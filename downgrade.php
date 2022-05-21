<?php
session_start();
require "./templates/configs/db_connect.php";
require './templates/functions/roles.php';
if (isset($_SESSION['email']) and is_author()) {

  $quary_prepare = $pdo->prepare("INSERT INTO authors VALUES(?)");
  $quary_prepare = $pdo->prepare("DELETE FROM authors WHERE id = ?");
  $quary_prepare->execute([$_SESSION['id']]);
  $_SESSION["premium"] = false;
}

header("location:lk.php");