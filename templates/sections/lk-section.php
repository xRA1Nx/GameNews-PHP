<?php if (isset($_SESSION['email'])) :
  // include "./templates/functions/arrays_fns.php";
  // show_array($_SESSION);
?>


<section class="white-section-100">
  <div class="lk-box">


    <?php if (!isset($_GET["profile-action"])) { ?>

    <h1 class="h1-white h1-white-margin-b">Личный кабинет</h1>
    <div class=user-data>
      <div class="user-avatar">
        <img class="user-avatar-img" src="<?php echo $_SESSION['avatar'] ?> ">
        <nav>
          <a href="./lk.php?profile-action=edit-ava">изменить</a>
          <a href="./lk.php?profile-action=del-ava">удалить</a>
        </nav>
      </div>

      <div class="user-info">
        <p> <strong>Фамилия</strong>: <?php echo $_SESSION['lname'] ?>
          <a href="./lk.php?profile-action=edit-lname">изменить</a>
        </p>
        <p><strong>Имя:</strong> <?php echo $_SESSION['fname'] ?>
          <a href="./lk.php?profile-action=edit-fname">изменить</a>
        </p>
        <p><strong>Эл. почта:</strong> <?php echo $_SESSION['email'] ?>
          <a href="./lk.php?profile-action=edit-email">изменить</a>
        </p>
        <p><strong>Псевдоним:</strong> <?php echo $_SESSION['nickname'] ?>
          <a href="./lk.php?profile-action=edit-nick">изменить</a>
        </p>
        <p class=p-row-action>
          <span class="profile-button">
            <a href='./lk.php?profile-action=edit-pass'>сменить пароль</a>
          </span>
          <span class="profile-button exit-link">
            <a href='exit.php'>Выйти</a>
          </span>
        </p>

      </div>
    </div>


    <!-- Подписки -->
    <main class="profile-main">
      <div class="subsribtions">
        <p class="subsribtions-title">Ваши подписки:</p>
        <?php
            $query_cats = "SELECT id_category FROM users_categorys 
          WHERE id_user = '$_SESSION[id]'";
            $cats = $pdo->query($query_cats)->fetchall();
            if (empty($cats)) {
              echo '<p>На данный момент у вас нет подписок</p>';
            }
            echo '<ul class="subscriptions-list">';
            foreach ($cats as $cat) {
              $query_cat = "SELECT name FROM categorys WHERE id = '$cat[id_category]'";
              $cat_name = $pdo->query($query_cat)->fetch()["name"];
              echo <<< ROW
            <li>
              <span>$cat_name</span>
              <a class="unscribe-link" href='subscribe.php?id_category=$cat[id_category] &
              id_user=$_SESSION[id]  & action=del'>отписаться</a>
            </li> 
                     
ROW;
            }
            echo '</ul>';
            ?>
      </div>


      <div class="profile-actions">
        <!-- <a class="change-ava" href="#">сменить аватар</a> -->
        <?php if (!is_author()) { ?>
        <p class="profile-button">Для размещения и редактирования новостей нужны авторсие права <a href="./upgrade.php">
            Получить права</a></p>
        <?php } ?>
        <?php if (is_author()) { ?>
        <p class="profile-button"><a href="./downgrade.php">Отказаться от авторских прав</a></p>
        <?php } ?>
      </div>
    </main>


    <?php } else { //  ДЕСТВИЯ НА ИЗМЕНЕНИЕ ДАННЫХ В ПРОФИЛЕ
        //меняем фамилию
        if ($_GET["profile-action"] === "edit-lname") {
          echo '<h1 class="h1-white h1-white-margin-b">Изменение вашей фамилии</h1>';
          if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $error = "";
          } else {
            $_POST['lname'] = htmlspecialchars(trim($_POST['lname']));
            $reg_exp = "/^[а-яё]{2,}$/ui";
            if (mb_strlen($_POST['lname']) < 2) {
              $error = "Фамилия должно быть длинее 2х букв";
            } elseif (!preg_match($reg_exp, ($_POST['lname']))) {
              $error = 'Фамилия должно состоять только из русских букв!';
            } else {
              $query = "UPDATE users SET lname = '$_POST[lname]' WHERE id = ?";
              $prepare_upd = $pdo->prepare($query);
              $prepare_upd->execute([$_SESSION['id']]);
              $_SESSION['lname'] = $_POST['lname'];
              header("location:./lk.php");
            }
          }
          echo <<<FORM
          <form  class="reuse-form" method = 'post' >
          <div>
          <span>$error</span><br>
          <input class="inp" type ="text" id = "lname" name = "lname" placeholder="укажите вашу фамилию" >
          <input class="inp-submit" type = "SUBMIT" value="изменить">
          </div>
          </form>
          <p class = "change-profile-attention">После изменения данных понадобится повторно авторизоваться</p>
          FORM;
        }
        //меняем имя
        if ($_GET["profile-action"] === "edit-fname") {
          echo '<h1 class="h1-white h1-white-margin-b">Изменение вашего имени</h1>';
          if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $error = "";
          } else {
            $_POST['fname'] = htmlspecialchars(trim($_POST['fname']));
            $reg_exp = "/^[а-яё]{2,}$/ui";
            if (mb_strlen($_POST['fname']) < 2) {
              $error = "Имя должно быть длинее 2х букв";
            } elseif (!preg_match($reg_exp, ($_POST['fname']))) {
              $error = 'Имя должно состоять только из русских букв!';
            } else {
              $query = "UPDATE users SET fname = '$_POST[fname]' WHERE id = ?";
              $prepare_upd = $pdo->prepare($query);
              $prepare_upd->execute([$_SESSION['id']]);
              $_SESSION['fname'] = $_POST['fname'];
              header("location:./lk.php");
            }
          }
          echo <<<FORM
          <form  class="reuse-form" method = 'post' >
          <div>
          <span>$error</span><br>
          <input class="inp" type ="text" id = "fname" name = "fname" placeholder="укажите вашу фамилию" >
          <input class="inp-submit" type = "SUBMIT" value="изменить">
          </div>
          </form>
          <p class = "change-profile-attention">После изменения данных понадобится повторно авторизоваться</p>
          FORM;
        }




        //меняем аву
        if ($_GET["profile-action"] === "edit-ava") {
          echo '<h1 class="h1-white h1-white-margin-b">Изменение аватара</h1>';
          if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $error = "";
          } else {
            $_POST['ava'] = htmlspecialchars(trim($_POST['ava']));
            if (empty($_POST['ava'])) {
              $error = "укажите ссылку на ваш аватар";
            } else {
              $query = "UPDATE users SET avatar = '$_POST[ava]' WHERE id = ?";
              $prepare_upd = $pdo->prepare($query);
              $prepare_upd->execute([$_SESSION['id']]);
              $_SESSION['avatar'] = $_POST['ava'];
              header("location:./lk.php");
            }
          }
          echo <<<FORM
       
        <form  class="reuse-form" method = 'post' >
        <div>
        <span>$error</span><br>
        <input class="inp" type ="url" id = "ava" name = "ava" placeholder="укажите название ссылки на ваш аватар" size = 35>
        <input class="inp-submit" type = "SUBMIT" value="изменить">
        </div>
        </form>
        <p class = "change-profile-attention">После изменения данных понадобится повторно авторизоватьс"</p>
FORM;
        }
        //удаляем аву
        if ($_GET["profile-action"] === "del-ava") {
          echo '<h1 class="h1-white h1-white-margin-b">Удаление аватара</h1>';
          $query = "UPDATE users SET avatar = default WHERE id = ?";
          $prepare_upd = $pdo->prepare($query);
          $prepare_upd->execute([$_SESSION['id']]);
          $_SESSION['avatar'] = "./imgs/ava-default.svg";
          header("location:./lk.php");
        }

        //меняем nickname
        if ($_GET["profile-action"] === "edit-nick") {
          echo '<h1 class="h1-white h1-white-margin-b">Изменение псевдонима</h1>';
          if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $error = "";
          } else { // Если POST
            $_POST['nick'] = htmlspecialchars(trim($_POST['nick']));
            require './templates/functions/arrays_fns.php';
            $query_res = $pdo->query("SELECT nickname FROM users")->fetchall();
            if (mb_strlen($_POST['nick']) < 5) {
              $error = "Псевдоним д.б. длинее 5 символов";
            } elseif (in_fetch_array($query_res, "0", $_POST['nick'])) {
              $error = "Этот псевдоним уже занят";
            } else {
              $query = "UPDATE users SET nickname = '$_POST[nick]' WHERE id = ?";
              $prepare_upd = $pdo->prepare($query);
              $prepare_upd->execute([$_SESSION['id']]);
              $_SESSION['nickname'] = $_POST['nick'];
              header("location:./lk.php");
            }
          }
          echo <<<FORM
       
        <form  class="reuse-form" method = 'post' >
        <div>
        <span>$error</span><br>
        <input class="inp" type ="text" id = "nick" name = "nick" placeholder="укажите ваш псевдоним">
        <input class="inp-submit" type = "SUBMIT" value="изменить">
        </div>
        </form>
        <p class = "change-profile-attention">После изменения данных понадобится повторно авторизоваться</p>
FORM;
        }
        // изменяем email
        if ($_GET["profile-action"] === "edit-email") {
          echo '<h1 class="h1-white h1-white-margin-b">Изменение электронной почты</h1>';
          if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $error = "";
          } else { // Если POST
            $_POST['email'] = htmlspecialchars(trim($_POST['email']));
            require './templates/functions/arrays_fns.php';
            $reg_exp = "/^.+@.+$/u";
            $query_res = $pdo->query("SELECT email FROM users")->fetchall();
            if (mb_strlen($_POST['email']) === 0) {
              $error = "заполните поле";
            } elseif (!preg_match($reg_exp, $_POST['email'])) {
              $error = 'Адрес электронной почты введен в неверном формате';
            } elseif (in_fetch_array($query_res, "0", $_POST['email'])) {
              $error = "Этот email уже занят";
            } else {
              $query = "UPDATE users SET email = '$_POST[email]' WHERE id = ?";
              $prepare_upd = $pdo->prepare($query);
              $prepare_upd->execute([$_SESSION['id']]);
              session_unset();
              header("location:sign-in.php");
            }
          }
          echo <<<FORM
       
        <form  class="reuse-form" method = 'post' >
        <div>
        <span>$error</span><br>
        <input class="inp" type ="text" id = "email" name = "email" placeholder="укажите ваш псевдоним">
        <input class="inp-submit" type = "SUBMIT" value="изменить">
        </div>
        </form>
        <p class = "change-profile-attention">После изменения данных понадобится повторно авторизоваться</p>
FORM;
        }

        //меняем пароль
        if ($_GET["profile-action"] === "edit-pass") {
          echo '<h1 class="h1-white h1-white-margin-b">Изменение вашего пароля</h1>';
          if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $error = "";
          } else {
            $_POST['pass1'] = htmlspecialchars(trim($_POST['pass1']));
            $_POST['pass2'] = htmlspecialchars(trim($_POST['pass2']));
            if (mb_strlen($_POST['pass1']) < 8) {
              $error = "пароль должен быть длинее 8 символов";
            } elseif ($_POST['pass1'] != $_POST['pass2']) {
              $error = 'пароль не совпадает';
            } else {
              $query = "UPDATE users SET password = '$_POST[pass1]' WHERE id = ?";
              $prepare_upd = $pdo->prepare($query);
              $prepare_upd->execute([$_SESSION['id']]);
              session_unset();
              header("location:sign-in.php");
            }
          }
          echo <<<FORM
          <form  class="reuse-form" method = 'post' >
          <div>
          <span>$error</span><br>
          <input class="inp" type ="password" id = "pass1" name = "pass1" placeholder="введите пароль" ><br>
          <input class="inp" type ="password" id = "pass2" name = "pass2" placeholder="повторите ваш пароль" ><br>
          <input class="inp-submit" type = "SUBMIT" value="изменить">
          </div>
          </form>
          <p class = "change-profile-attention">После изменения данных понадобится повторно авторизоваться</p>
          FORM;
        }
      } ?>


    </main>
    <?php else : ?>
    <?php header("location:index.php") ?>;
    <?php endif; ?>