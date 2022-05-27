<section class="white-section">
  <?php

  require('./templates/functions/form_validation_fns.php');


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    list($errors, $input, $flag) = validate_сreat_form();

    // если в форма не валидна,показываем ошибки
    if (!$flag) {

      show_creat_form($errors, $input);
    } else {

      // если форма валидна cоздаем сессию и добавляем в бд статью
      $query_get_id_cat = "SELECT id FROM categorys WHERE name = '$_POST[category]'";
      $id_category = $pdo->query($query_get_id_cat)->fetch()["id"];
      if (!isset($_GET['id'])) {


        $insert_post_query = "INSERT INTO news 
      (id_author, title, post_description, text, main_img, small_img, id_category)
      VALUES (?, ?, ?, ?, ?, ?, ?)";

        $prepare_post = $pdo->prepare($insert_post_query);
        $prepare_post->execute([
          $_SESSION['id'],
          $_POST['post_title'],
          $_POST['post_preview'],
          $_POST['post_text'],
          $_POST['post_img_url'],
          $_POST['news_img_url'],
          $id_category
        ]);
      } else {

        $query_post_update = "UPDATE news SET
        main_img = '$_POST[post_img_url]',
        small_img = '$_POST[news_img_url]',
        title = '$_POST[post_title]',
        post_description = '$_POST[post_preview]',
        id_category = $id_category,
        text = '$_POST[post_text]'      
        WHERE id = ?";

        $post_prepare = $pdo->prepare($query_post_update);
        $post_prepare->execute([$_GET['id']]);
      }

      header("location:index.php");
    }
    //если метод GET , то выводим изначальную форму


  } else {
    $input = validate_сreat_form(); //массив из пустых строк
    $errors = $input;
    if (isset($_GET['id'])) {

      // заполняем форму из уже имеющихся данных статьи
      $post = get_post_and_category($_GET['id']);
      // $input['category'] = $post['name'];
      $input['post_title'] = $post['title'];
      $input['post_preview'] = $post['post_description'];
      $input['post_text'] = $post['text'];
      $input['post_img_url'] = $post['main_img'];
      $input['news_img_url'] = $post['small_img'];
    }



    show_creat_form($errors, $input);
  }

  ?>


</section>