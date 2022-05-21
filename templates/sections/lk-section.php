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
    </div>
    <a class="change-ava" href="#">сменить аватар</a>
    <?php if (!is_author()) { ?>
    <p class="get-premium"><a href="./upgrade.php">Получить авторские права</a></p>
    <?php } ?>
    <?php if (is_author()) { ?>
    <p class="get-premium"><a href="./downgrade.php">Отказаться от авторских прав</a></p>
    <?php } ?>

    <div class="subsribtions">
      <p class="subsribtions-title">Ваши подписки:</p>
      <p>На данный момент у вас нет подписок</p>
    </div>

    <p><a class="exit-link" href='exit.php'>Выйти</a></p>

</section>
<?php else : ?>
<?php header("location:index.php") ?>;
<?php endif; ?>