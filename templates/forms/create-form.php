<section class="white-section">
  <div class="forms-box">
    <h1 class="h1-white">
      Разместить статью
    </h1>
    <form class="reuse-form" action="" method="GET">
      <div>
        <label for="categorys">Категория:</label><br>
        <select id="categorys" class="inp" name="categorys">
          <option value="">Выберите категорию:</option>
          <option value="volvo">Diablo</option>
          <option value="saab">Overwatch</option>
          <option value="volvo">Starcraft</option>
          <option value="saab">Warcraft</option>
        </select>
        <span></span>
      </div>



      <div>
        <label for="inp-post-title">Заголовок статьи:</label><br>
        <input class="inp" type="text" name="inp-post-title" id="inp-post-title" placeholder="не более 50 символов"
          value="" size=50>
        <span></span>
      </div>

      <div>
        <label for="inp-post-img">Изображение статьи:</label><br>
        <input type="file" name="inp-post-img" id="inp-post-img" placeholder="прикрепите изображение" value="" size=50>
        <span></span>
      </div>

      <div>
        <label for="inp-post-img">Текст статьи:</label><br>

        <textarea class="inp post-text-area" placeholder="Введите ваше сообщение"></textarea>
        <span></span>
      </div>

      <input class="inp-submit" type="submit" value="разместить">
    </form>
</section>