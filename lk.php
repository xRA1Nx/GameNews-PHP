<?php // head 

include "./templates/reuseble/head.php"; ?>
<title>Games Portal</title>
</head>

<body>
  <?php   //header
  include "./templates/reuseble/header.php"; ?>
  <main class="container container-white" id="main">


    <!-- // PUT YOUR SECTION HERE -->

    <section class="white-section">
      <div class="forms-box">
        <h1 class="h1-white h1-white-margin-b">
          <?php echo $_SESSION['email'] ?>, Добро пожаловать!!!
        </h1>
        <h3>На данный момент у вас нет подписок</h3>
        <p><a href='index.php'>На главную страницу</a></p>
        <p><a href='exit.php'>Выйти</a></p>

    </section>

    <!-- // PUT YOUR SECTION HERE -->


    <?php
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