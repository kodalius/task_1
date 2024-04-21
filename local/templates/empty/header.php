
<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;?>
<!DOCTYPE html>
<head>
    <link href="<?=SITE_TEMPLATE_PATH?>/components/bitrix/news.list/myTemplate1/build/css/common.css" rel="stylesheet">
</head>
<body>
<?$APPLICATION->ShowHead();?>
<?$APPLICATION->ShowPanel();?>
