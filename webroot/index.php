<?php
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('display_errors', true);
// defining constants for root paths
define('WEBROOT', str_replace('webroot/index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('webroot/index.php', '', $_SERVER['SCRIPT_FILENAME']));

include ROOT.'app/config/database.php';
require(ROOT . 'AppController.php');

$appController = new AppController();
$appController->dispatch($conn);