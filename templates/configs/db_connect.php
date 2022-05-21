<?php

// require './templates/configs/db_connect.php';


$host = 'localhost'; // адрес сервера бд
$db_name = 'newsportal'; // имя базы данных
$log = 'admin'; // имя пользователя базы данных
$pass = 'admin';

// создать экземпляр класса PDO и положить его в переменную $pdo
$pdo = new PDO("mysql:host=$host;dbname=$db_name", $log, $pass);