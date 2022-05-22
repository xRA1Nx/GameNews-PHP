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

      if (!isset($_GET['id'])) {


        $insert_post_query = "INSERT INTO news 
      (id_author, title, post_description, text, main_img, small_img)
      VALUES (?, ?, ?, ?, ?, ?)";
        $prepare_post = $pdo->prepare($insert_post_query);
        $prepare_post->execute([
          $_SESSION['id'],
          $_POST['post_title'],
          $_POST['post_preview'],
          $_POST['post_text'],
          $_POST['post_img_url'],
          $_POST['news_img_url']
        ]);

        $get_last_post_query = "SELECT max(id) FROM news";
        $post_id = $pdo->query($get_last_post_query)->fetch()[0];
        $prepare_category = $pdo->prepare("INSERT INTO categorys (name, id_news) VALUES (?, ?)");
        $prepare_category->execute([$_POST['category'],  (int)$post_id]);
      } else {

        $query_post_update = "UPDATE news SET
        main_img = '$_POST[post_img_url]',
        small_img = '$_POST[news_img_url]',
        title = '$_POST[post_title]',
        post_description = '$_POST[post_preview]',
        text = '$_POST[post_text]'      
        WHERE id = ?";

        $query_category_update = "UPDATE categorys SET
        name = '$_POST[category]'
        WHERE id_news = ?
        ";

        $post_prepare = $pdo->prepare($query_post_update);
        $category_prepare = $pdo->prepare($query_category_update);

        $post_prepare->execute([$_GET['id']]);
        $category_prepare->execute([$_GET['id']]);
      }

      header("location:index.php");
    }
    //если метод GET , то выводим изначальную форму


  } else {
    $input = validate_сreat_form(); //массив из пустых строк
    $errors = $input;
    if (isset($_GET['id'])) {
      // $errors = [str_repeat("", 6)];

      // $post_query = "SELECT id, title, post_description, text, main_img, small_img
      // FROM news WHERE id = $_GET[id]";
      // $category_query = "SELECT name, id_news 
      // FROM categorys  WHERE id_news = $_GET[id]";
      // $category = $pdo->query($category_query)->fetch();
      // $post = $pdo->query($post_query)->fetch();

      list($post, $category) = get_post_and_category($_GET['id']);

      $input['category'] = $category['name'];
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