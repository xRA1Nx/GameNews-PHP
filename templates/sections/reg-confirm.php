<?php

// если не отправлено подтверждение учетной записи по email
if (!isset($_GET['regdone_email'])) {

  // если  мы перешли на эту страницу после заполнения формы регистрации
  if (isset($_SESSION['from']) and $_SESSION['from'] = "registration") :

    mail("$email", 'регистрация', "$fname $lname, 
поздравляем с регистрацией на сайте NewsPortal!!!
Ваш логин - $email
Ваш пароль - $password
Для активации учетной записи пройдите по ссылке - http://f0673760.xsph.ru/registration-done.php?regdone_email=$email 
  ");
?>
<section class="white-section">
  <div class="forms-box">
    <h1 class="h1-white h1-white-margin-b">
      Поздравляем, вы прошли регистрацию!

    </h1>
    <p>На вашу почту <strong>
        <?php echo $email;
            $_SESSION['from'] = "none"; ?>
      </strong> отправлено приветственное письмо для активации вашей учетной записи. </p>
    <br>
    <p><a href='./index.php'>На главную страницу</a></p>



</section>
<?php else : ?>
<?php header("location:index.php") ?>;
<?php endif;
  // если переходим на страницу из письма
} else {
  if (isset($_SESSION['from'])) {
    // создаем пользователя
    $insert_query = $pdo->prepare("INSERT INTO users VALUE(null,?,?,?,?,?,default)");

    $insert_query->execute([
      $_SESSION['fname'],
      $_SESSION['lname'],
      $_GET['regdone_email'],
      $_SESSION['password'],
      $_GET['regdone_email'] // значение ника по умолчанию
    ]);
    session_unset();

  ?>
<section class="white-section">
  <div class="forms-box">
    <h1 class="h1-white h1-white-margin-b">
      Поздравляем, ваша учетная запись создана!
      <p><a href='./index.php'>На главную страницу</a></p>
      <p><a href='./sign-in.php'>Войти в систему</a></p>
      <?php } else header("location:index.php");
  } ?>