<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Page\Asset;

$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Тест шаблона");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php $APPLICATION->ShowTitle();?></title>
	<?php $APPLICATION->ShowHead();?>
	<?php 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/common.css');
		Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
		Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge" />');
	?>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="barba-wrapper">