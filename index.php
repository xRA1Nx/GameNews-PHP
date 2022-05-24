<?php // head 

require "./templates/reuseble/head.php"; ?>

<title>Games Portal</title>
</head>

<body>

  <?php  // header
  require "./templates/reuseble/header.php"; ?>


  <main class="container container-main" id="main">
    <?php
    // grid 
    require "./templates/grids/grid.php";
    // aside
    require "./templates/reuseble/aside.php";
    ?>
  </main>


  <?php  // footer
  require "./templates/reuseble/footer.php"; ?>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="./scripts/script.js"></script>

</body>

</html>