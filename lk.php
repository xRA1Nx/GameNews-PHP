<?php // head 
ob_start();

require "./templates/reuseble/head.php"; ?>
<title>Личный кабинет</title>
</head>

<body>
  <?php   //header
  require "./templates/reuseble/header.php"; ?>
  <main class="container container-white" id="main">


    <!-- // PUT YOUR SECTION HERE -->
    <?php
    require "./templates/sections/lk-section.php";
    ?>
    <!-- // PUT YOUR SECTION HERE -->


  </main>


  <?php  // footer
  require "./templates/reuseble/footer.php"; ?>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="./scripts/script.js"></script>
</body>

</html>