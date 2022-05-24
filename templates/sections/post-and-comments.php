<?php
require './templates/functions/arrays_fns.php';

if (!isset($_SESSION['id']) and  isset($_GET['comment_id'])) {
  header("location:./post.php?id=$_GET[id]");
}


if ($_SERVER['REQUEST_METHOD'] === "GET") {
  $post_query = "SELECT id, id_author, id_category,  title, text, main_img, date_time 
  FROM news WHERE id = $_GET[id]";
  $post = $pdo->query($post_query)->fetch();
  $query_author = "SELECT nickname FROM users where id = $post[id_author]";
  $nick_name = $pdo->query($query_author)->fetch()['nickname'];
  $post_date_time = date_format(date_create($post['date_time']), 'd.m.Y H:i');
  $query_comments = "SELECT COUNT(id_news) AS comments_count FROM comments where id_news = $_GET[id]";
  $comments_count = $pdo->query($query_comments)->fetch()['comments_count'];
  $category = $post["id_category"];

?>
<!-- POST ACTIONS -->
<section class="white-section">
  <div class="post">
    <h1 class="h1-postnews-title h1-white">
      <p>
        <?php
          echo "$post[title] </p>";

          if (isset($_SESSION['email'])) {
            $users_categorys = $pdo->query("SELECT id_category FROM users_categorys WHERE id_user = $_SESSION[id]")->fetchall();
            echo '<nav nav class="post-actions">';
            echo '<div>';

            if (!in_fetch_array($users_categorys, "id_category", $category)) {

              echo <<< SUBSCRIBE
           
            <a class="post-actions-link describ-link"
          href="./subscribe.php?id_category=$post[id_category] & id_user=$_SESSION[id]
          & action=add& post_id=$_GET[id] ">Подписаться</a>
             
  SUBSCRIBE;
            }
            echo '</div>';
            echo '<ul class="post-actions-list">';
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
          }
          ?>
        <!-- Информация  о статье-->
        <li>
          <a class="post-actions-link" href="#form-comments">комментарии</a>
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
  </div>
  <div class="post-box">
    <p class="post-text">
      <?php echo str_replace("\n", "</p><p class='post-text'>", $post['text'])  ?>
    </p>
  </div>




  <?php
    // Если GET то показываем страницу 
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
      echo '<div name="form-comments" id="form-comments">';
      // ЕСЛИ пользователь авторизован то показываем форму
      if (isset($_SESSION['id']) and  !isset($_GET['comment_id'])) {

    ?>

  <!-- :::::::::::::
                  !!! ФОРМА!!!
                :::::::::::::::-->

  <form method="post" class="form-post-comment">
    <textarea class="input-post-comment" name="comment" placeholder="Введите ваше сообщение"></textarea>
    <img class="comment-avatar avatar" src="<?php echo $_SESSION['avatar'] ?>" alt="user avatar" />
    <div class="comment-actions">
      <input class="submit-comment" type="submit" />
    </div>
  </form>
  <?php } else 
        if (!isset($_GET['comment_id'])) {
        // иначе предлагаем ползователю зарегистрироваться чтобы оставить комментарий
        echo "<p>Чтобы оставить комментарий <a href='./sign-in.php'>войдите в систему</a></p>";
      }

      echo '</div>'
      ?>

  <?php
      // Выгружаем из БД комментарии и данные пользователей по ним и заполняем страницу
      $query_post_comments = "SELECT id, id_news, id_user, text, date_time FROM comments WHERE id_news = $_GET[id] ORDER BY date_time DESC";
      $get_comment = $pdo->query($query_post_comments);
      while ($comment = $get_comment->fetch()) {
        $query_user = "SELECT id, nickname, avatar FROM users
      WHERE id = $comment[id_user]";
        $user = $pdo->query($query_user)->fetch();
        $comment_date_time = date_format(date_create($comment['date_time']), 'd.m.Y H:i');
        // если нажали кнопку "изменить" у комментария выводим форму и наполняем ее
        if (isset($_GET['comment_id']) and $comment['id'] === (int)$_GET['comment_id'] and isset($_SESSION['id'])) {
          echo <<< FORM
          <form method="post" class="form-post-comment" id='comment-$comment[id]'>
          <textarea class="input-post-comment" name="comment" placeholder="Введите ваше сообщение">$comment[text]</textarea>
          <img class="comment-avatar avatar" src="$_SESSION[avatar]" alt="user avatar" />
          <div class="comment-actions">
          <input class="submit-comment" type="submit" value="изменить" />
          <p class="comment-button"><a  class="cancel-link" href='./post.php?id=$_GET[id]#comment-$comment[id]'>отменить</a></p>
          </div>
          </form>
  FORM;
        } else {
          // выгружаем циклом комментарии по одному

          echo "<div class='post-comment'>";
          echo "<p class='comment-user-nick' id='comment-$comment[id]'>";
          echo "$user[nickname] <span>$comment_date_time</span></p>";
          echo "<img class='avatar comment-avatar' src='$user[avatar]' alt='user avatar' />";
          echo "<p class='comment-text'>$comment[text]</p>";


          // если есть сессия и пользователь может удалить/редактировать свои комменты
          if (isset($_SESSION['id']) and $comment['id_user'] === $_SESSION['id']) {
            echo "<nav>
      <a href='./post.php?id=$_GET[id]&action=edit&comment_id=$comment[id]#comment-$comment[id]'>редактировать</a>
      <a
        href='./comment-actions.php?action=del&comment_id=$comment[id]&id_user=$comment[id_user]&post_id=$_GET[id]'>удалить</a>
    </nav>";
          }
          echo '</div>';
        }
      };
      ?>

</section>
<?php } ?>
<?php } else {
  // Если метод POST
  if (!empty($_POST["comment"])) {
    if (isset($_GET['action'])) {
      $prepare_comment = $pdo->prepare("UPDATE comments SET text = ? WHERE id =?");
      $prepare_comment->execute([$_POST['text'],  $_GET['comment_id']]);
    }

    // Если комментарий не пустой то записываем его в БД
    $prepare_comment = $pdo->prepare("INSERT INTO comments(id_news, id_user, text) VALUES (?,?,?)");
    $prepare_comment->execute([$_GET['id'], $_SESSION['id'], $_POST['comment']]);
  }
  // В обоих случаях перенаправляем на эту страницу с новостями на якорь комментария
  header("location:post.php?id=$_GET[id]#form-comments");
}


?>