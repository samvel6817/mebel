<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '<a class="breadcrumbs__item" href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">'.$title.'</a>';
	}
	else
	{
		$strReturn .= '<span class="breadcrumbs__item_last">'.$title.'</span>';
	}
}

$strReturn .= '<div style="clear:both"></div></div>';

return $strReturn;
?>

<textarea name="" id="" cols="30" rows="10"><?print_r($arResult)?></textarea>
