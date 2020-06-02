<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");

if ($_GET['pass'] != '014') {
	die('need password');
}

(new \Local\Models\NormalizeCatalogSectionFromThematicMenuLevel2())->exe();
(new \Local\Models\NormalizeCatalogSectionFromThematicMenuLevel1())->exe();
?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>