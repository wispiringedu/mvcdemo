<?php

if (!file_exists('../vendor/autoload.php')) {
    echo "Plz use `php composer.phar install` to initial the project!";
    exit;
}


use Wispiring\Core\Utils;

define('SYSYTEM_ROOT', realpath(__DIR__ . '/../'));

require '../vendor/autoload.php';
$config = require '../config/config.php';

$configInstance = Utils::getConfigInstance()->setValues($config);

if ($configInstance->getValue('debug') === true) {
	error_reporting(-1);
}

$configInstance->loadConfigFromXml('../config/config.xml');


$page   = isset($_GET['page']) ? $_GET['page'] : 'Default';
$action = isset($_GET['action']) ? $_GET['action'] : 'Index';


$configInstance->setValue('thema', 'default');

$configInstance->setValue('mysqlInfo', array('dbnam' => 'a', 'pdu' => 'b'));



try {
    Utils::router($page, $action);
} catch (Exception $e) {
    $code = $e->getCode();
    if ($code === 404) {
        header("HTTP/1.0 404 Not Found");
        echo $e->getMessage();
        exit;
    }
}
