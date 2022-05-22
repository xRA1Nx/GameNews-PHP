<?php
$post_query = "SELECT id_author,  title, text, main_img, date_time 
FROM news WHERE id = $_GET[id]";
$post = $pdo->query($post_query)->fetch();
$query_author = "SELECT nickname FROM users where id = $post[id_author]";
$nick_name = $pdo->query($query_author)->fetch()['nickname'];
$date_time = date_format(date_create($post['date_time']), 'd.m.Y H:i');
$query_comments = "SELECT COUNT(id_news) AS comments_count FROM comments where id_news = $_GET[id]";
$comments_count = $pdo->query($query_comments)->fetch()['comments_count'];

?>

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
          <li>
            <a class="post-actions-link" href="#comments">Комментировать</a>
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
        <span class="post-author-conteiner-content"><?php echo $date_time ?></span>
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
  <div class="discussion-conteiner" id="comments">
    <form method="post" class="form-post-comment">
      <textarea class="input-post-comment" placeholder="Введите ваше сообщение"></textarea>
      <img class="post-my-avatar avatar" src="./imgs/ava-default.svg" alt="user avatar" />
      <input class="submit-comment" type="submit" />
      <!-- <a href="link-comm-edit">редактировать</a> -->
    </form>

    <div class="post-comment">
      <p class="comment-user-nick">
        IvanovI <span>23.11.21 в 10:24</span>
      </p>
      <img class="avatar comment-avatar" src="./imgs/ava-default.svg" alt="user avatar" />

      <p class="comment-text">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
        suscipit, necessitatibus libero sunt optio magnam eius,
        reprehenderit accusantium corrupti nemo pariatur, quos odit
        tenetur non quam quaerat. Aliquam sapiente repellat earum quo
        atque! Ullam, inventore libero vero doloremque distinctio illo
        assumenda dolor? Cumque, aperiam ullam distinctio ab labore magnam
        modi!
      </p>
    </div>
    <div class="post-comment">
      <p class="comment-user-nick">
        Strekozz <span>19.11.21 в 13:52</span>
      </p>
      <img class="avatar comment-avatar" src="./imgs/ava-default.svg" alt="user avatar" />
      <p class="comment-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
        reprehenderit blanditiis, voluptas maiores, odit nemo aut vitae
        perspiciatis, deleniti quia amet inventore quas.
      </p>
    </div>
  </div>
</section>