<section class="grid grid3" id="grid-section">
  <div class="main-header">
    <span class="main-header-logo-first">Game</span>
    <span class="main-header-logo-second">News</span>
  </div>


  <?php
  require './templates/configs/db_connect.php';
  $query = "SELECT news.id, news.id_author, news.title, news.date_time, news.post_description, news.main_img, news.small_img , categorys.id_news, categorys.name
  FROM news, categorys 
  WHERE news.id = categorys.id_news and categorys.name = 'diablo'
  ORDER BY id DESC";
  $query_res = $pdo->query($query);
  while ($news_row = $query_res->fetch()) {
    //получаем ник пользователя
    $query_author = "SELECT nickname FROM users where id = $news_row[id_author]";
    $nick_name = $pdo->query($query_author)->fetch()['nickname'];

    //
    $query_comments = "SELECT COUNT(id_news) AS comments_count FROM comments where id_news = $news_row[id]";
    $comments_count = $pdo->query($query_comments)->fetch()['comments_count'];
    $date_time = date_format(date_create($news_row['date_time']), 'd.m.Y H:i');

    echo <<<HTML
    <div class='main-news'>
    <a class='post-link' href='./post.php'>
    <div class='img-container'>
    <img class='news-img' src='$news_row[small_img]' alt='news image'/>
    </div>
    <h2 class='h2-news news-default-setings'> $news_row[title]</h2></a>
    <p class='news-container'>$news_row[post_description]</p>
      <div class="post-footer">
      <div class="footer-post-details">
        <span class="post-date-time">$date_time</span>
        <span class="author">$nick_name</span>
      </div>
      <div class="footer-comment-details">
        <img class="icon comment-icon" src="./imgs/Comments.svg" alt="comment icon" />
        <a class="link-comment-count" href="#">$comments_count</a>
      </div>
    </div>
  </div>
HTML;
  }
  ?>


  <div class="pagination">
    <button class="btn-pag btn-pag-left" aria-label="previous-page button">
      <svg xmlns="http://www.w3.org/2000/svg" class="pag-btn-icon icon-left" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2" alt="previous-page icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <a href="#" class="pag-link">1</a>
    <a href="#" class="pag-link">2</a>
    <a href="#" class="pag-link">3</a>
    <a href="#" class="pag-link">4</a>
    <a href="#" class="pag-link">5</a>
    <a href="#" class="pag-link">6</a>
    <span>...</span>
    <a href="#" class="pag-link">23</a>

    <button class="btn-pag btn-pag-right" aria-label="next-page button">
      <svg xmlns="http://www.w3.org/2000/svg" class="pag-btn-icon icon-right" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" alt="next-page icon" />
      </svg>
    </button>
  </div>
</section>