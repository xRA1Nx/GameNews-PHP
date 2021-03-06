<?php


?>


<header>
  <div class="header-top" id="top">
    <div class="container header-top-section">
      <div class="header-left">
        <a class="home" href="./index.php">
          <img class="icon icon-logo" src="./imgs/icons/logo.svg" alt="logo icon" />
          <span class="logo-text-first">Game</span>
          <span class="logo-text-second">News</span>
        </a>
        <nav class="contacts-nav">
          <!-- *************************** -->
          <!--  CONTACT-ICONS  -->
          <!-- *************************** -->

          <ul class="nav-list contacts-nav-list">
            <li>
              <a href="https://vk.com/" target="_blank">
                <img class="icon icon-contacts" src="./imgs/icons/contacts/vk.svg" alt="vk icon" />
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/" target="_blank">
                <img class="icon icon-contacts" src="./imgs/icons/contacts/youtube.svg" alt="youtube icon" />
              </a>
            </li>
            <li>
              <a href="https://twitter.com/" target="_blank">
                <img class="icon icon-contacts" src="./imgs/icons/contacts/twitter.svg" alt="twitter icon" />
              </a>
            </li>
            <li>
              <a href="https://steamcommunity.com/" target="_blank">
                <img class="icon icon-contacts" src="./imgs/icons/contacts/steam.svg" alt="steam icon" />
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header-right">
        <button class="btn-header-nav btn-nav-border">
          <ion-icon name="menu-outline" class="nav-menu-icons menu-enter"></ion-icon>
          <ion-icon name="close-outline" class="nav-menu-icons menu-exit"></ion-icon>
        </button>
        <nav class="nav-menu">
          <ul class="nav-menu-list">
            <?php
            if (isset($_SESSION['email'])) { ?>

            <li>
              <a class="need-to-autorized" href="./lk.php">Личный кабинет</a>
              <ion-icon class="nav-bar-ion-icon" name="person-circle-outline"></ion-icon>
            </li>

            <?php if (is_author()) : ?>
            <li>
              <a class="need-to-autorized" href="./create.php">Написать статью</a>
              <ion-icon class="nav-bar-ion-icon" name="create-outline"></ion-icon>
            </li>
            <?php endif ?>

            <li>
              <a class="need-to-autorized" href="./exit.php">Выйти</a>
              <ion-icon class="nav-bar-ion-icon" name="log-out-outline"></ion-icon>
            </li>
            <?php } else { ?>
            <li>
              <a class='need-to-autorized' href='./sign-in.php?from=<?php echo $_SERVER['REQUEST_URI'] ?>'>Войти</a>
              <ion-icon class="nav-bar-ion-icon" name="log-in-outline"></ion-icon>
            </li>
            <li>
              <a class="need-to-autorized" href="./registration.php">Регистрация</a>
              <ion-icon class="nav-bar-ion-icon" name="person-add-outline"></ion-icon>
            </li>
        </nav>

        <?php }
            // **********************ФОРМА**************************
      ?>
        </ul>
        <form class="header-form-search" method="post" action="filter.php">
          <input name="contains" type="text" placeholder="ПОИСК" class="header-input-search" />
          <button class="header-input-submit">
            <img src="./imgs/icons/search.svg" class="header-img-search" alt="search icon" />
        </form>
      </div>
    </div>
  </div>

  <!-- *************************** -->
  <!--  GAME-ICONS  -->
  <!-- *************************** -->

  <div class="header-bottom">
    <nav class="game-icons container">
      <ul class="nav-list game-icons-list">
        <li>
          <a href="./filter.php?name=diablo">
            <img class="game-icon icons" src="./imgs/icons/games/Diablo.svg" alt="diablo icon" />
          </a>
          <a class="game-name" href="./filter.php?name=diablo">Diablo</a>
        </li>

        <li>
          <a href="./filter.php?name=Overwatch">
            <img class="game-icon icons" src="./imgs/icons/games/Overwatch.svg" alt="Overwatch icon" />
          </a>
          <a href="./filter.php?name=Overwatch" class="game-name">Overwatch</a>
        </li>

        <li>
          <a href="./filter.php?name=HoS">
            <img class="game-icon icons" src="./imgs/icons/games/Hots.svg" alt="Herous of the storm icon" />
          </a>
          <a href="./filter.php?name=Hos" class="game-name">Herous of the storm</a>
        </li>

        <li>
          <a href="./filter.php?name=Starcraft">
            <img class="game-icon icons" src="./imgs/icons/games/Starcraft_2.svg" alt="Starcraft 2 icon" />
          </a>
          <a href="./filter.php?name=Starcraft" class="game-name">Starcraft</a>
        </li>

        <li>
          <a href="./filter.php?name=Hearthstone">
            <img class="game-icon icons" src="./imgs/icons/games/Hearthstone.svg" alt="Hearthstone icon" />
          </a>
          <a href="./filter.php?name=Hearthstone" class="game-name">Hearthstone</a>
        </li>

        <li>
          <a href="./filter.php?name=Warcraft">
            <img class="game-icon icons" src="./imgs/icons/games/WoW.svg" alt="World of Warcraft icon" />
          </a>
          <a href="./filter.php?name=Warcraft" class="game-name">World of Warcraft</a>
        </li>

        <li>
          <a href="./filter.php?name=Другие игры">
            <img class="game-icon icons" src="./imgs/icons/games/Other_Games.svg" alt="Other Games" />
          </a>
          <a href="./filter.php?name=Другие игры" class="game-name">Другие игры</a>
        </li>
      </ul>
    </nav>
  </div>
</header>