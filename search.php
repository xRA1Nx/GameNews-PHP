<?php
require './templates/configs/db_connect.php';
require './templates/functions/arrays_fns.php';
$query = "SELECT id FROM news WHERE text LIKE %$_POST[contains]%";
$news = $pdo->query($query);



echo ($_POST['contains']);
