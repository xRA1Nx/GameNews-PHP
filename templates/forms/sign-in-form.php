<?php
if (!isset($_SESSION["email"])) {

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $val) {
      $_SESSION[$key] = $val;
    }
    header("location:lk.php");
  } else {
    echo <<<SECTION
    <section class="white-section">
    <div class="forms-box">
      <h1 class="h1-white h1-white-margin-b">
        Вход в систему
      </h1>
      <form class="reuse-form" action="" method="POST">
        <div>
          <label for="email">Электронная почта:</label><br>
          <input class="inp" type="email" name="email" value="" placeholder="ваш email">
          <span></span>
        </div>
  
        <div>
          <label for="password">Пароль:</label><br>
          <input class="inp" type="password" name="password" placeholder="более восьми символов" value="">
          <span></span>
        </div>
        <p>Нет учетной записи? Пройдите <a href="./registration.php">регистрацию</a></p>
  
  
        <input class="inp-submit" type="submit" value="Войти">
      </form>
  </section>
 
  
SECTION;
  }
} else {
  header("location:index.php");
}
