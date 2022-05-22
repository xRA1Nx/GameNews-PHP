<?php
// require './templates/configs/db_connect.php';
require '../configs/db_connect.php';

echo $_GET["id"];
$query = "DELETE FROM news WHERE id = ?";
$del_prepare = $pdo->prepare($query);
$del_prepare->execute([$_GET["id"]]);
header("location:../../index.php");