<?php
if ($_SERVER['REQUEST_METHOD'] === "GET") {

  $post_query = "SELECT id_author,  title, text, main_img, date_time 
  FROM news WHERE id = $_GET[id]";
  $post = $pdo->query($post_query)->fetch();
  $query_author = "SELECT nickname FROM users where id = $post[id_author]";
  $nick_name = $pdo->query($query_author)->fetch()['nickname'];
  $post_date_time = date_format(date_create($post['date_time']), 'd.m.Y H:i');
  $query_comments = "SELECT COUNT(id_news) AS comments_count FROM comments where id_news = $_GET[id]";
  $comments_count = $pdo->query($query_comments)->fetch()['comments_count'];

?>
<!-- POST ACTIONS -->
<section class="white-section">
  <div class="post">
    <h1 class="h1-postnews-title h1-white">
      <p>
        <?php echo $post['title'] ?>
      </p>
      <nav class="post-actions">
        <a class="post-actions-link describ-link" href="./subscriptions.php">Подписаться</a>

        <ul class="post-actions-list">
          <?php
            // Только для пользователей с правами - АВТОР
            if (isset($_SESSION['email']) and is_author()) {
              echo <<< NAV
                <li>
                  <a
                    class="post-actions-link post-actions-link-red"
                    href="./create.php?id=$_GET[id]"
                    >Редактировать</a
                  >
                </li>
                <li>
                  <a
                    class="post-actions-link post-actions-link-red"
                    href="./post-del.php?id=$_GET[id]"
                    >Удалить</a
                  >
                </li>
NAV;
            }
            ?>
          <!-- Информация  о статье-->
          <li>
            <a class="post-actions-link" href="#form-comments">Комментировать</a>
          </li>
        </ul>
      </nav>
    </h1>
    <div class="post-author-conteiner">
      <p>
        <span class="post-author-conteiner-label">АВТОР</span>
        <span class="post-author-conteiner-content"><?php echo $nick_name ?></span>
      </p>

      <p>
        <span class="post-author-conteiner-label">ОПУБЛИКОВАНО</span>
        <span class="post-author-conteiner-content"><?php echo $post_date_time ?></span>
      </p>
      <p>
        <span class="post-author-conteiner-label">КОММЕНТАРИИ</span>
        <span class="post-author-conteiner-content"><?php echo $comments_count ?></span>
      </p>
    </div>
    <img class="post-main-img" src="<?php echo $post['main_img'] ?>" alt="POST big Img" />
    <p class="post-text">
      <?php echo $post['text'] ?>
    </p>
  </div>


  <?php
    // Если GET то показываем страницу 
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
      echo '<div name="form-comments" id="form-comments">';
      // ЕСЛИ пользователь авторизован то показываем форму
      if (isset($_SESSION['id'])) {

    ?>

  <!-- :::::::::::::
                  !!! ФОРМА!!!
                :::::::::::::::-->
  <form method="post" class="form-post-comment">
    <textarea class="input-post-comment" name="comment" placeholder="Введите ваше сообщение"></textarea>
    <img class="post-my-avatar avatar" src="./imgs/ava-default.svg" alt="user avatar" />
    <input class="submit-comment" type="submit" />
  </form>
  <?php } else {
        // иначе предлагаем ползователю зарегистрироваться чтобы оставить комментарий
        echo "<p>Чтобы оставить комментарий <a href='./sign-in.php'>войдите в систему</a></p>";
      }
      echo '</div>'
      ?>

  <?php
      // Выгружаем из БД комментарии и данные пользователей по ним и заполняем страницу
      require './templates/functions/arrays_fns.php';
      $query_post_comments = "SELECT id_news, id_user, text, date_time FROM comments WHERE id_news = $_GET[id] ORDER BY date_time DESC";
      $get_comment = $pdo->query($query_post_comments);
      while ($comment = $get_comment->fetch()) {
        $query_user = "SELECT id, nickname, avatar FROM USERS
      WHERE id = $comment[id_user]";
        $user = $pdo->query($query_user)->fetch();
        $comment_date_time = date_format(date_create($comment['date_time']), 'd.m.Y H:i');

        echo <<<ROW
      <div class="post-comment">
      <p class="comment-user-nick">
        $user[nickname] <span>$comment_date_time</span>
      </p>
      <img class="avatar comment-avatar" src="$user[avatar]" alt="user avatar" />

      <p class="comment-text">
        $comment[text]
      </p>
    </div>

ROW;
      };
      ?>

</section>
<?php } ?>
<?php } else {
  // Если метод POST
  if (!empty($_POST["comment"])) {
    // Если комментарий не пустой то записываем его в БД
    $prepare_comment = $pdo->prepare("INSERT INTO comments(id_news, id_user, text) VALUES (?,?,?)");
    $prepare_comment->execute([$_GET['id'], $_SESSION['id'], $_POST['comment']]);
  }
  // В обоих случаях перенаправляем на эту страницу с новостями на якорь комментария
  header("location:post.php?id=$_GET[id]#form-comments");
}


?>