<?php
/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 * 
 *  Данный файл хранит все константы/настрйоки, чтобы не лазить по файлам и не искать нужное
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("DB_HOST", "localhost");//хост 
define("DB_USER", "root");//имя пользователя
define("DB_PASSWORD", "");//паролья
define("DB_NAME", "php_lab");//база данных название
define("ROOT_PATH", $_SERVER['SERVER_NAME']);
define('__ROOT__', dirname(dirname(__FILE__))); 
define('STATIC_PATH', dirname(dirname(__FILE__)) . '/static/');
define('INCLUDE_PATH', dirname(dirname(__FILE__)) . '/include/');
define("USER_APP_PATH", dirname(dirname(__FILE__)) . '/include/user_app/');
define("PRODUCT_APP_PATH", dirname(dirname(__FILE__)) . '/include/product_app/');
session_start();
?>