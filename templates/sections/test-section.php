<section class="white-section">
  <div class="forms-box">

    <?php
    require './templates/functions/arrays_fns.php';
    $post_query = "SELECT id_author,  post_description, text, main_img 
FROM news WHERE id = 9";
    $post = $pdo->query($post_query)->fetch();


    show_array($post)


    // $user_query = "SELECT id, email, fname, lname, nickname, avatar 
    // FROM users 
    // WHERE email LIKE 'stwski@yandex.ru'";
    // $user_data = $pdo->query($user_query);
    // $user = $user_data->fetch(PDO::FETCH_ASSOC);
    // show_array($user)


    ?>
  </div>
</section>