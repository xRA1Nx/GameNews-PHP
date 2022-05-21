<section class="white-section">
  <div class="forms-box">

    <?php

    require './templates/configs/db_connect.php';
    require './templates/functions/arrays_fns.php';


    var_dump(isset($_SESSION['email']) and is_author());


    // $user_query = "SELECT id, email, fname, lname, nickname, avatar 
    // FROM users 
    // WHERE email LIKE 'stwski@yandex.ru'";
    // $user_data = $pdo->query($user_query);
    // $user = $user_data->fetch(PDO::FETCH_ASSOC);
    // show_array($user)


    ?>
  </div>
</section>