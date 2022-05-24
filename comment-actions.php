<?php
// require './templates/configs/db_connect.php';
session_start();
require './templates/configs/db_connect.php';
require './templates/functions/arrays_fns.php';


// var_dump($_SESSION['id']);
// var_dump($_GET['id_user']);
if (isset($_GET['action']) and (int)$_GET['id_user'] === (int)$_SESSION['id']) {
  show_array($_GET);
  // and $_GET['']

  $query = "DELETE FROM comments WHERE id = ?";
  $del_prepare = $pdo->prepare($query);
  $del_prepare->execute([$_GET["comment_id"]]);
  header("location:./post.php?id=$_GET[post_id]#form-comments"); #form-comments
}


// echo $_GET["id"];