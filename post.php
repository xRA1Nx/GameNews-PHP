<?php // head 
    include "./templates/reuseble/head.php"; ?>

<title>Games Portal</title>
</head>

<body>

  <?php   //header
  include "./templates/reuseble/header.php";?>


  <main class="container container-white" id="main">
    <?php   
    // post & comments section
    include "./templates/sections/post-and-comments.php";
    // aside 
    include "./templates/reuseble/aside.php"; 
    ?>
  </main>


  <?php  // footer
  include "./templates/reuseble/footer.php";?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="./scripts/script.js"></script>

</body>

</html>