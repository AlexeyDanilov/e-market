<?php

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Установка соединения с БД

$con = mysqli_connect('localhost', 'root', '', 'e-market');
mysqli_set_charset($con, 'utf8');
if (mysqli_connect_errno()) {
    echo 'Error: ' . mysqli_connect_error();
}


// 4. Вызор Router

$router = new Router();
$router->run();