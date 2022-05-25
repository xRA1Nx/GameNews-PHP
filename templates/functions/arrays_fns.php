<?php
// require './templates/functions/arrays_fns.php';

function show_array($array)
{
  echo "<pre>";
  var_dump($array);
  echo "</pre>";
}

function in_fetch_array($array, $field, $value)
{
  $flag = false;
  foreach ($array as $row) {
    if ($row[$field] === $value) {
      $flag = true;
      break;
    }
  }
  return $flag;
}
