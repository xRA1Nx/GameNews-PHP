<?php // head 

include "./templates/reuseble/head.php"; ?>
<title>Games Portal</title>
</head>

<body>
  <?php   //header
  include "./templates/reuseble/header.php"; ?>
  <main class="container container-white" id="main">

    <?php
    // PUT YOUR SECTION HERE

    // PUT YOUR SECTION HERE
    echo '<section class="white-section">';
    echo "<h2>$_SESSION[email], Добро пожаловать в лк!</h2>";
    echo "<p><a href='index.php'>На главную страницу</a></p>";
    echo "<p><a href='exit.php'>Выйти</a></p>";
    echo '</section>';

    // aside 
    include "./templates/reuseble/aside.php"; ?>
  </main>


  <?php  // footer
  include "./templates/reuseble/footer.php"; ?>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="./scripts/script.js"></script>
</body>

</html>