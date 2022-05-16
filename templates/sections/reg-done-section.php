<?php if (isset($_SESSION['email'])) : ?>
  <section class="white-section">
    <div class="forms-box">
      <h1 class="h1-white h1-white-margin-b">
        Поздравляем, вы прошли регистрацию!
      </h1>
      <p>На вашу почту <strong><?php echo $_SESSION['email'];
                                session_unset(); ?></strong> отправлено письмо. Пройдите по ссылке,указанной в
        письме для
        активации учетной записи.</p>


  </section>
<?php else : ?>
  <?php header("location:index.php") ?>;
<?php endif; ?>