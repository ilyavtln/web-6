<?php
    global $APPLICATION;
    if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
        die();
?>

<?php
    use Bitrix\Main\Page\Asset;
?>

<?php
    session_start();
?>
<!doctype html>
<html lang="ru">

<head>
    <?php $APPLICATION->ShowHead() ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
        Asset::getInstance()->addCss(
            CUtil::GetAdditionalFileURL('/styles/bootstrap.css'));
        
        Asset::getInstance()->addCss(
            CUtil::GetAdditionalFileURL('/styles/style.css'));
        
        Asset::getInstance()->addCss(
            CUtil::GetAdditionalFileURL('/styles/slider.css'));
        
        Asset::getInstance()->addJs(
            CUtil::GetAdditionalFileURL('/scripts/slider.js'));
        
        Asset::getInstance()->addJs(
            CUtil::GetAdditionalFileURL('/scripts/bootstrap.js'));
        
        
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString('<meta charset="utf-8">');
    ?>
</head>

<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>