<?php

if (isset($_SESSION['from'])) :

  mail("$email", 'регистрация', "$fname $lname, поздравляем с регистрацией на сайте NewsPortal
Ваш логин - $email
Ваш пароль - $password
  ");
?>
<section class="white-section">
  <div class="forms-box">
    <h1 class="h1-white h1-white-margin-b">
      Поздравляем, вы прошли регистрацию!
    </h1>
    <p>На вашу почту <strong>
        <?php echo $email;
          unset($_SESSION['from']); ?>
      </strong> отправлено приветственное письмо c учетными данными. </p>
    <br>
    <p><a href='./index.php'>На главную страницу</a></p>



</section>
<?php else : ?>
<?php header("location:index.php") ?>;
<?php endif; ?>