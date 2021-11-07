<?php
define("DB_HOST", "localhost");//хост 
define("DB_USER", "root");//имя пользователя
define("DB_PASSWORD", "");//паролья
define("DB_NAME", "Transformators");//база данных название


$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);//подключение к бд
if ($mysql->connect_errno) exit("Не удалось подключиться к БД");
$mysql->set_charset('utf8');
?>