<?php if (isset($_SESSION['email'])) : ?>


<section class="white-section-100">
  <div class="lk-box">
    <h1 class="h1-white h1-white-margin-b">
      Личный кабинет
    </h1>


    <div class=profile>

      <img class="profile-avatar" src="<?php echo $_SESSION['avatar'] ?> ">

      <div class="profile-info">
        <p> <strong>Фамилия</strong>: <?php echo $_SESSION['lname'] ?></p>
        <p><strong>Имя:</strong> <?php echo $_SESSION['fname'] ?></p>
        <p><strong>эл. почта:</strong> <?php echo $_SESSION['email'] ?></p>
        <p><strong>псевдоним:</strong> <?php echo $_SESSION['nickname'] ?> - <a href="#">изменить</a></p>
      </div>
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
              <a href='subscribe.php?id_category=$cat[id_category] &
              id_user=$_SESSION[id]  & action=del'>отписаться</a>

            </li>          
ROW;
          }
          echo '</ul>';
          ?>





      </div>
    </div>
    <a class="change-ava" href="#">сменить аватар</a>
    <?php if (!is_author()) { ?>
    <p class="get-premium"><a href="./upgrade.php">Получить авторские права</a></p>
    <?php } ?>
    <?php if (is_author()) { ?>
    <p class="get-premium"><a href="./downgrade.php">Отказаться от авторских прав</a></p>
    <?php } ?>



    <p><a class="exit-link" href='exit.php'>Выйти</a></p>

</section>
<?php else : ?>
<?php header("location:index.php") ?>;
<?php endif; ?>