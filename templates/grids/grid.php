<?php
$size_page = 9; // количество новостей на одной странице
?>

<section class="grid grid3" id="grid-section">
  <div class="main-header">
    <span class="main-header-logo-first">Game</span>
    <span class="main-header-logo-second">News</span>
  </div>


  <?php
  // Поверка, есть ли GET запро
  if (isset($_GET['pageno'])) {
    // Если да то переменной $pageno присваиваем его
    $pageno = $_GET['pageno'];
  } else { // Иначе
    // Присваиваем $pageno один
    $pageno = 1;
  }

  // Вычисляем с какого объекта начать выводить
  $start_pos = ($pageno - 1) * $size_page;

  // SQL запрос для получения количества элементов
  $count_query = "SELECT COUNT(*) FROM news";
  // Отправляем запрос для получения количества элементов
  $news_count = $pdo->query($count_query)->fetch()[0];
  // Вычисляем количество страниц
  $total_pages = ceil($news_count / $size_page);


  $news_query = "SELECT id, id_author, title, date_time, post_description, main_img, small_img FROM news ORDER BY id DESC 
  LIMIT $start_pos, $size_page"; // с , по

  $news = $pdo->query($news_query);
  while ($news_row = $news->fetch()) {
    //получаем ник пользователя
    $query_author = "SELECT nickname FROM users where id = $news_row[id_author]";
    $nick_name = $pdo->query($query_author)->fetch()['nickname'];

    //
    $query_comments = "SELECT COUNT(id_news) AS comments_count FROM comments where id_news = $news_row[id]";
    $comments_count = $pdo->query($query_comments)->fetch()['comments_count'];
    $date_time = date_format(date_create($news_row['date_time']), 'd.m.Y H:i');

    echo <<<HTML
    <div class='main-news'>

      <a class='post-link' href='./post.php?id=$news_row[id]'>
        <div class='img-container'>
          <img class='news-img' src='$news_row[small_img]' alt='news image'/>
          </div>
          <h2 class='h2-news news-default-setings'> $news_row[title]</h2>
      </a>
    

    <p class='news-container'>$news_row[post_description]</p>
      <div class="post-footer">
      <div class="footer-post-details">
        <span class="post-date-time">$date_time</span>
        <span class="author">$nick_name</span>
      </div>
      <div class="footer-comment-details">
        <img class="icon comment-icon" src="./imgs/Comments.svg" alt="comment icon" />
HTML;
  ?>
  <?php echo "<a class='link-comment-count' href='./post.php?id=$news_row[id]#form-comments'>$comments_count</a>"; ?>
  </div>
  </div>
  </div>

  <?php }

  // если страниц больше 1-й - отображаем пагинацию
  if ($total_pages > 1) {
  ?>




  <div class="pagination">

    <button class="btn-pag btn-pag-left" aria-label="previous-page button">
      <a class="pag-btn-link" href="<?php if ($pageno <= 1) {
                                        echo '#';
                                      } else {
                                        echo "?pageno=" . ($pageno - 1);
                                      } ?>"><svg xmlns="http://www.w3.org/2000/svg" class="pag-btn-icon icon-left"
          fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" alt="previous-page icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg></a>

    </button>



    <?php

      // в начало
      echo "<a class='pag-start-end' href='?pageno=1'>в начало</a>";
      //  цикл отображения следующих страниц, отображающий всегда 6 страниц если это возможно
      $pageno + 5 - $total_pages  >= 2 ? $page_decris_to =  $pageno + 5 - $total_pages  :  $page_decris_to = 2;

      foreach (range($page_decris_to, 1, -1) as $i) {
        if ($pageno - $i > 0) {
          $page_grow = $pageno - $i;
          echo "<a class='pag-link' href='?pageno=$page_grow'>$page_grow</a>";
        }
      }


      //отображаем текущую страницу
      echo "<a class='pag-link pag-activ' href='?pageno=$pageno'>$pageno</a>";


      //  цикл отображения предыдущих страниц, отображающий всегда 6 страниц если это возможно
      5 - $pageno + 1 >= 3 ? $page_grow_to = 5 - $pageno + 1 :  $page_grow_to = 3;
      foreach (range(1,  $page_grow_to) as $i) {
        if ($total_pages - ($pageno + $i) >= 0) {
          $page_grow = $pageno + $i;
          echo "<a class='pag-link' href='?pageno=$page_grow'>$page_grow</a>";
        }
      }

      if (($pageno + 3) < $total_pages) {
        echo "<span>...</span>";
      }

      // в конец
      echo "<a class='pag-start-end' href='?pageno=$total_pages'>в конец</a>";
      ?>


    <button class="btn-pag btn-pag-right" aria-label="next-page button">
      <a class="pag-btn-link" href="<?php if ($pageno >= $total_pages) {
                                        echo '#';
                                      } else {
                                        echo "?pageno=" . ($pageno + 1);
                                      } ?>"> <svg xmlns="http://www.w3.org/2000/svg" class="pag-btn-icon icon-right"
          fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" alt="next-page icon" />
        </svg></a>


    </button>
  </div>
  <?php
  }
  ?>
</section>