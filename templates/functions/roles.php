<?php
// require './templates/functions/roles.php';

function is_author()
{

  require './templates/configs/db_connect.php';
  $query = "SELECT id FROM authors WHERE id = $_SESSION[id]";
  $author = $pdo->query($query)->fetch();
  return !empty($author);
  // return $author;
}