<?php 
// Front Controller Общие настройки
// включение отображения ошибок
ini_set('display_errors', '1');
error_reporting(E_ALL);

//Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/autoload.php');

//Установка соединения с БД

//Вызов Router

$router = new router();
$router->run();
//var_dump($_SERVER);


?>