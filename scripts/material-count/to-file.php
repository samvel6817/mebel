<?php

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

global $USER;
if (!$USER->IsAdmin()) {
    die;
}

$materials = $_SESSION['MATERIAL'];
arsort($materials);

$text = '';

foreach ($materials as $material => $quantity) {
    $text .= "$material - $quantity\n";
};


file_put_contents('material.txt', $text);

echo 'Файл сохранен';
?>