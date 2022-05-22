<?php
include "./templates/reuseble/head.php";
if (isset($_SESSION['email']) and is_author() and isset($_GET['id'])) : ?>
<title>Games Portal</title>
</head>

<body>
  <?php   //header
    include "./templates/reuseble/header.php"; ?>
  <main class="container container-white" id="main">

    <?php
      // PUT YOUR SECTION HERE
      include "./templates/sections/confirm-post-del-section.php";
      // PUT YOUR SECTION HERE



      // aside 
      // include "./templates/reuseble/aside.php";
      ?>
  </main>


  <?php  // footer
    include "./templates/reuseble/footer.php"; ?>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="./scripts/script.js"></script>
</body>

</html>

<?php else : ?>
<?php header("location:index.php") ?>;
<?php endif; ?>