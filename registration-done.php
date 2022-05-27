<?php // head 
ob_start();



require "./templates/reuseble/head.php"; ?>
<title>Регистрация выполнена</title>
</head>

<body>
  <?php   //header
  if (isset($_SESSION['email'])) {
    $email =  $_SESSION['email'];
    unset($_SESSION['email']);
  }

  $fname =  $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $password =  $_SESSION['password'];



  require "./templates/reuseble/header.php"; ?>
  <main class="container container-white" id="main">


    <?php

    // PUT YOUR SECTION HERE
    require "./templates/sections/reg-confirm.php";
    // PUT YOUR SECTION HERE

    ?>
  </main>


  <?php  // footer
  require "./templates/reuseble/footer.php"; ?>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="./scripts/script.js"></script>
</body>

</html>