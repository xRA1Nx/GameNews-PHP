<?php if (isset($_SESSION['from'])) : ?>
  <section class="white-section">
    <div class="forms-box">
      <h1 class="h1-white h1-white-margin-b">
        Поздравляем, вы прошли регистрацию!
      </h1>
      <p>На вашу почту <strong><?php echo $email;
                                unset($_SESSION['from']); ?></strong> отправлено письмо. Пройдите по
        ссылке,указанной в
        письме для
        активации учетной записи.</p>


  </section>
<?php else : ?>
  <?php header("location:index.php") ?>;
<?php endif; ?>