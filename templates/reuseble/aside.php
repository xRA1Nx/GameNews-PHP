<aside class="aside-right">
  <div class='hot-watched-discussed'>
    <p>
      <!-- <a class="link-hwd link-hot-disscused" href="#">Top обсуждаемые</a> -->
      <!-- <a class="link-hwd link-hot-watched" href="#">Top просмотров</a> -->
      Top обсуждаемые
    </p>
  </div>


  <?php
  require './templates/configs/db_connect.php';
  // $query = "SELECT news.id, news.id_author, news.title, news.date_time, news.post_description, news.main_img, news.small_img, comments.id_news FROM news, comments WHERE news.id = comments.id_news  ORDER BY COUNT(comments.id) DESC LIMIT 3";
  $query = "SELECT
  news.id, news.id_author, news.title, news.date_time, news.post_description, news.main_img, news.small_img, comments.id_news, COUNT(comments.id_news) as com_count 
  FROM news, comments
  WHERE news.id = comments.id_news  
  GROUP BY  news.id, news.id_author, news.title, news.date_time, news.post_description, news.main_img, news.small_img, comments.id_news
  ORDER BY com_count DESC
  LIMIT 3";
  $query_res = $pdo->query($query);

  while ($news_row = $query_res->fetch()) {
    //получаем ник пользователя
    $query_author = "SELECT nickname FROM users WHERE id = $news_row[id_author]";
    $nick_name = $pdo->query($query_author)->fetch()['nickname'];

    //
    $query_comments = "SELECT COUNT(id_news) AS comments_count FROM comments where id_news = $news_row[id]";
    $comments_count = $pdo->query($query_comments)->fetch()['comments_count'];
    $date_time = date_format(date_create($news_row['date_time']), 'd.m.Y H:i');

    echo <<<HTML
      <div class="main-news">
      <a class='post-link' href='./post.php?id=$news_row[id]'>
      <div class='img-container'>
      <img class='news-img' src='$news_row[small_img]' alt='news image'/>
      </div>
      <h2 class='h2-news news-default-setings'>$news_row[title]</h2></a>
            </div>
  HTML;
  }

  ?>
</aside>