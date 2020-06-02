<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock,
    Local\Config;

$sectionsID = Config::$sections;

/*************************************************************************
	Processing of received parameters
*************************************************************************/
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
$arParams["SECTION_ID"] = intval($arParams["SECTION_ID"]);
$arParams["SECTION_CODE"] = trim($arParams["SECTION_CODE"]);

$arParams["SECTION_URL"]=trim($arParams["SECTION_URL"]);

$arParams["TOP_DEPTH"] = intval($arParams["TOP_DEPTH"]);
if($arParams["TOP_DEPTH"] <= 0)
	$arParams["TOP_DEPTH"] = 2;
$arParams["COUNT_ELEMENTS"] = $arParams["COUNT_ELEMENTS"]!="N";
if (!isset($arParams["COUNT_ELEMENTS_FILTER"]))
{
	$arParams["COUNT_ELEMENTS_FILTER"] = "CNT_ACTIVE";
}
if (
	$arParams["COUNT_ELEMENTS_FILTER"] !== "CNT_ALL"
	&& $arParams["COUNT_ELEMENTS_FILTER"] !== "CNT_ACTIVE"
	&& $arParams["COUNT_ELEMENTS_FILTER"] !== "CNT_AVAILABLE"
)
{
	$arParams["COUNT_ELEMENTS_FILTER"] = "CNT_ALL";
}
$arParams["ADD_SECTIONS_CHAIN"] = $arParams["ADD_SECTIONS_CHAIN"]!="N"; //Turn on by default

if(empty($arParams["FILTER_NAME"]) || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $arParams["FILTER_NAME"]))
{
	$arrFilter = array();
}
else
{
	global ${$arParams["FILTER_NAME"]};
	$arrFilter = ${$arParams["FILTER_NAME"]};
	if(!is_array($arrFilter))
		$arrFilter = array();
}

$arParams["CACHE_FILTER"] = isset($arParams["CACHE_FILTER"]) && $arParams["CACHE_FILTER"] == "Y";
if(!$arParams["CACHE_FILTER"] && !empty($arrFilter))
	$arParams["CACHE_TIME"] = 0;

$arResult["SECTIONS"]=array();

/*************************************************************************
			Work with cache
*************************************************************************/
if($this->startResultCache(false, array($arrFilter, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups()))))
{
	if(!Loader::includeModule("iblock"))
	{
		$this->abortResultCache();
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}

	$existIblock = Iblock\IblockSiteTable::getList(array(
		'select' => array('IBLOCK_ID'),
		'filter' => array('=IBLOCK_ID' => $arParams['IBLOCK_ID'], '=SITE_ID' => SITE_ID, '=IBLOCK.ACTIVE' => 'Y')
	))->fetch();
	if (empty($existIblock))
	{
		$this->abortResultCache();
		return;
	}

	$arFilter = array(
		"ACTIVE" => "Y",
		"GLOBAL_ACTIVE" => "Y",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	);

	$arSelect = array();
	if(array_key_exists("SECTION_FIELDS", $arParams) && !empty($arParams["SECTION_FIELDS"]) && is_array($arParams["SECTION_FIELDS"]))
	{
		foreach($arParams["SECTION_FIELDS"] as &$field)
		{
			if (!empty($field) && is_string($field))
				$arSelect[] = $field;
		}
		if (isset($field))
			unset($field);
	}

	if(!empty($arSelect))
	{
		$arSelect[] = "ID";
		$arSelect[] = "NAME";
		$arSelect[] = "LEFT_MARGIN";
		$arSelect[] = "RIGHT_MARGIN";
		$arSelect[] = "DEPTH_LEVEL";
		$arSelect[] = "IBLOCK_ID";
		$arSelect[] = "IBLOCK_SECTION_ID";
		$arSelect[] = "LIST_PAGE_URL";
		$arSelect[] = "SECTION_PAGE_URL";
	}
	$boolPicture = empty($arSelect) || in_array('PICTURE', $arSelect);

	if(isset($arParams['SECTION_USER_FIELDS']) && !empty($arParams["SECTION_USER_FIELDS"]) && is_array($arParams["SECTION_USER_FIELDS"]))
	{
		foreach($arParams["SECTION_USER_FIELDS"] as &$field)
		{
			if(is_string($field) && preg_match("/^UF_/", $field))
				$arSelect[] = $field;
		}
		if (isset($field))
			unset($field);
	}

	$arResult["SECTION"] = false;
	$intSectionDepth = 0;
	if($arParams["SECTION_ID"]>0)
	{
		$arFilter["ID"] = $arParams["SECTION_ID"];
		$rsSections = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
		$rsSections->SetUrlTemplates("", $arParams["SECTION_URL"]);
		$arResult["SECTION"] = $rsSections->GetNext();
	}
	elseif('' != $arParams["SECTION_CODE"])
	{
		$arFilter["=CODE"] = $arParams["SECTION_CODE"];
		$rsSections = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
		$rsSections->SetUrlTemplates("", $arParams["SECTION_URL"]);
		$arResult["SECTION"] = $rsSections->GetNext();
	}

	if(is_array($arResult["SECTION"]))
	{
		unset($arFilter["ID"]);
		unset($arFilter["=CODE"]);
		$arFilter["LEFT_MARGIN"]=$arResult["SECTION"]["LEFT_MARGIN"]+1;
		$arFilter["RIGHT_MARGIN"]=$arResult["SECTION"]["RIGHT_MARGIN"];
		$arFilter["<="."DEPTH_LEVEL"]=$arResult["SECTION"]["DEPTH_LEVEL"] + $arParams["TOP_DEPTH"];

		$ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arResult["SECTION"]["IBLOCK_ID"], $arResult["SECTION"]["ID"]);
		$arResult["SECTION"]["IPROPERTY_VALUES"] = $ipropValues->getValues();

		$arResult["SECTION"]["PATH"] = array();
		$rsPath = CIBlockSection::GetNavChain(
			$arResult["SECTION"]["IBLOCK_ID"],
			$arResult["SECTION"]["ID"],
			array(
				"ID", "CODE", "XML_ID", "EXTERNAL_ID", "IBLOCK_ID",
				"IBLOCK_SECTION_ID", "SORT", "NAME", "ACTIVE",
				"DEPTH_LEVEL", "SECTION_PAGE_URL"
			)
		);
		$rsPath->SetUrlTemplates("", $arParams["SECTION_URL"]);
		while($arPath = $rsPath->GetNext())
		{
			if ($arParams["ADD_SECTIONS_CHAIN"])
			{
				$ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arParams["IBLOCK_ID"], $arPath["ID"]);
				$arPath["IPROPERTY_VALUES"] = $ipropValues->getValues();
			}
			$arResult["SECTION"]["PATH"][]=$arPath;
		}
	}
	else
	{
		$arResult["SECTION"] = array("ID"=>0, "DEPTH_LEVEL"=>0);
		$arFilter["<="."DEPTH_LEVEL"] = $arParams["TOP_DEPTH"];
	}
	$intSectionDepth = $arResult["SECTION"]['DEPTH_LEVEL'];

	$sectionFilter = array_merge($arrFilter, $arFilter);

	$elementFilter = array(
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"CHECK_PERMISSIONS" => "Y",
		"MIN_PERMISSION" => "R",
		"INCLUDE_SUBSECTIONS" => (isset($sectionFilter["ELEMENT_SUBSECTIONS"]) && $sectionFilter["ELEMENT_SUBSECTIONS"] == "N" ? "N" : "Y")
	);
	if (!empty($sectionFilter['PROPERTY']) && is_array($sectionFilter['PROPERTY']))
	{
		foreach (array_keys($sectionFilter['PROPERTY']) as $propertyId)
		{
			$field = CIBlock::MkOperationFilter($propertyId);
			$elementFilter[$field['PREFIX'].'PROPERTY_'.$field['FIELD']] = $sectionFilter['PROPERTY'][$propertyId];
		}
		unset($field, $propertyId, $value);
	}

	switch ($arParams["COUNT_ELEMENTS_FILTER"])
	{
		case "CNT_ALL":
			break;
		case "CNT_ACTIVE":
			$elementFilter["ACTIVE"] = "Y";
			$elementFilter["ACTIVE_DATE"] = "Y";
			break;
		case "CNT_AVAILABLE":
			$elementFilter["ACTIVE"] = "Y";
			$elementFilter["ACTIVE_DATE"] = "Y";
			$elementFilter["AVAILABLE"] = "Y";
			break;
	}

	//ORDER BY
	$arSort = array(
		"left_margin"=>"asc",
	);

    function createParams($arSection)
    {
        $params = [
            "NAME" => $arSection['NAME'],
            "CODE" => $arSection['CODE'],
            "ID" => $arSection['ID'],
            "RELATIVE_DEPTH_LEVEL" => $arSection['DEPTH_LEVEL'],
            "IBLOCK_SECTION_ID" => $arSection['IBLOCK_SECTION_ID'],
            "URL" => $arSection['SECTION_PAGE_URL'],
        ];
        return $params;
    }

    //Выборка из указанного ID раздела
    $rsSections = CIBlockSection::GetList($arSort, $sectionFilter, false, $arSelect);
    $rsSections->SetUrlTemplates("", $arParams["SECTION_URL"]);
    $subSection =1;
    while($arSection = $rsSections->GetNext())
    {
        if($arSection['DEPTH_LEVEL'] == 1 && $subSection==1) {
            $arResult['SECTIONS'][] = createParams($arSection);
            $subSection++;
            $firstSection = "Y";
        } elseif($arSection['DEPTH_LEVEL'] == 1) {
            $arResult['SECTIONS'][] = createParams($arSection);
            $firstSection = "N";
        } elseif($arSection['DEPTH_LEVEL'] > 1 && $firstSection == "Y") {
            $arResult['SECTIONS'][] = createParams($arSection);
        } elseif (!isset($firstSection)){
            $arResult['SECTIONS'][] = createParams($arSection);
        }
    }

	unset($arSection);

	$arResult["SECTIONS_COUNT"] = count($arResult["SECTIONS"]);

	$this->setResultCacheKeys(array(
		"SECTIONS_COUNT",
		"SECTION",
	));

	$this->includeComponentTemplate();
}

