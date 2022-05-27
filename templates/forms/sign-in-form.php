<?php
require('./templates/functions/form_validation_fns.php');
if (isset($_SESSION['email'])) {
  header("location:lk.php");
} else {


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    list($errors, $input, $flag) = validate_signin_form();

    // если в форма не валидна,показываем ошибки
    if (!$flag) {
      show_signin_form($errors, $input);
      // формируем сессию из БД и перенаправляем в ЛК    
    } else {

      $user_query = "SELECT id, email, fname, lname, nickname, avatar 
      FROM users WHERE email LIKE '$_POST[email]'";
      $user = $pdo->query($user_query)->fetch(PDO::FETCH_ASSOC);
      foreach ($user as $key => $val) {
        $_SESSION[$key] = $val;
      }
      // если мы зашли с какой либо страницы то будет редирект на нее
      if (isset($_GET['from'])) {
        header("location:$_GET[from]");
        // иначе будет редирект в ЛК
      } else {
        header("location:lk.php");
      }
    }


    //если метод GET , то выводим изначальную форму
  } else {
    $input = validate_signin_form(); //массив из пустых строк
    show_signin_form($input, $input);
  }
}