<?php

use Rest\Monitoring\Profile;
use Bitrix\Main\Loader;

require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/header.php';

Loader::includeModule('rest.monitoring');

$arView = [
    'NAME',
    'URL',
    'METHOD',
    'CHECK_INTERVAL',
    'ACTIVITY',
];

$oProfile = new Profile();

echo '<pre>';

var_dump($oProfile->viewProfile(2, $arView));

echo '</pre>';

require_once $_SERVER["DOCUMENT_ROOT"] . '/bitrix/footer.php';