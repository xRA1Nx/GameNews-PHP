<?php if (isset($_SESSION['email'])) {
  header("location:index.php");
}
?>



<section class="white-section">
  <div class="forms-box">
    <h1 class="h1-white h1-white-margin-b">
      Страница восстановления вашего пароля
    </h1>

    <?php
    if (!isset($_GET['massage'])) {

      if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $error = "";
        $value = "";
      } else { // ЕСЛИ МЕТОД POST
        require('./templates/functions/form_validation_fns.php');
        // require './templates/functions/arrays_fns.php';
        $error = validate_reset_pass($_POST['email']);
        $value = $_POST['email'];

        // Если форма валидна отправляем письмо с паролем
        if (!$error) {
          $query = "SELECT  fname, lname, password FROM users WHERE email LIKE '$_POST[email]'";
          $user = $pdo->query($query)->fetch();
          $massage =  "Уважаемый $user[fname] $user[lname], ваш пароль - $user[password]. Настоятельно рекомендуем Вам изменить ваш пароль в личном кабинете!";
          mail(
            "$_POST[email]",
            'восстановление пароля',
            $massage
          );

          header("location:make-new-pass.php?massage=send&email=$_POST[email]");
        }
      }


      // Если форма не валидна или метод GET


    ?>
    <form class="reuse-form" action="" method="POST">
      <div>
        <p class="p-form-error"><?php echo $error ?></p>
        <input class="inp" type="email" name="email" value="<?php echo $value ?>" placeholder="укажите ваш email"
          size=34>
      </div>
      <input class="inp-submit" type="submit" value="восстановить">
    </form>


    <?php  } else {
      echo "<p>Письмо с вашим паролем отправлено на вашу почту - <strong>$_GET[email]</strong></p> ";

      echo "<br><p><a href='./index.php'>На главную страницу</a></p>";
    }

    ?>

</section>