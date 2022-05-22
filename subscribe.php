<?php
require './templates/functions/arrays_fns.php';
require './templates/configs/db_connect.php';

if ($_GET['action'] === 'add') {
  $prepare_add = $pdo->prepare("INSERT INTO users_categorys (id_category, id_user)
VALUES (?,?)");
  $prepare_add->execute([$_GET['id_category'], $_GET['id_user']]);
  header("location:post.php?id=$_GET[post_id]");
} else {
  $prepare_del = $pdo->prepare("DELETE FROM users_categorys WHERE id_category = ?");
  $prepare_del->execute([$_GET['id_category']]);
  header("location:lk.php");
}

// show_array($_GET);
// echo ($_GET['id_category']);
// echo ($_GET['id_user']);