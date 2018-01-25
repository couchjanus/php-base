<?php
// Общие настройки

if (function_exists('date_default_timezone_set')){
    date_default_timezone_set('Europe/Kiev');    
}

// Включение вывода всех ошибок и предупреждений

// Выключение протоколирования ошибок
// error_reporting(0);

// Включать в отчет простые описания ошибок
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Включать в отчет E_NOTICE сообщения (добавятся сообщения о 
// непроинициализированных переменных или ошибках в именах переменных)
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Добавлять сообщения обо всех ошибках, кроме E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);

// Добавлять в отчет все ошибки PHP


ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

ini_set('log_errors', 1);

ini_set('error_log', dirname(__FILE__) . '/error_log.txt');

error_reporting(E_ALL);

// Добавлять в отчет все ошибки PHP
// error_reporting(-1);

// То же, что и error_reporting(E_ALL);
// ini_set('error_reporting', E_ALL);

require_once realpath(__DIR__).'/config/app.php';

function makeConnection(){
        try {
            return new PDO(
                'mysql:host=localhost;dbname='.DATABASE,
                DBUSER,
                DBPASSWORD               
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
}

function render($path, $data = []) 
{
    extract($data);
    return require VIEWS."{$path}.php";
}

require_once CORE.'Router.php';