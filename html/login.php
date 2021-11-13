<?php
    session_start();
    require "../App.php";
    $app = new App();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Prihlásenie sa na stránku portfolio.">
  <meta name="keywords" content="Prihlásenie sa">
  <meta name="author" content="Zuzana Žillová">

  <title>Prihlásenie</title>
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <script src="../skript/skript.js"></script>

</head>
<body>
<header>
  <div class="menu">
    <div class="left-blue-area">
      <div class="left-blue-background "></div>
      <img id="logo-icon" src="../img/portfolio.png" alt="Logo">
      <ul>
        <li>
          <a href="tel:+421910117452" >
            <img src="../img/telefon.png" alt="ikona telefónu">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/zuzka150/" target="_blank">
            <img src="../img/instagram.png" alt="ikona instagram">
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/zillova" target="_blank">
            <img src="../img/facebook.png" alt="ikona facebook">
          </a>
        </li>
        <li>
          <a href="mailto:zuzka.zillova@gmail.com" >
            <img src="../img/email.png" alt="ikona email">
          </a>
        </li>

      </ul>
    </div>

    <nav class="main-menu">
      <img class="btn-menu" onclick="openCloseNav()" src="../img/menu.png" alt="menu">

      <ul id="menu-items">
        <li class="no-active"><a href="home.php">Domov</a></li>
        <li class="no-active"><a href="blog-blogs.php">Blog</a></li>
        <li class="no-active"><a href="portfolios.php">Portfóliá</a></li>
      </ul>

    </nav>
  </div>

</header>
<div>
  <img class="abstract-background" src="../img/login-bg2.png" alt="pozadie">
  <div class="center">
    <h1>Prihlásenie</h1>
    <form method="post" enctype="multipart/form-data">
      <div class="txt_field">
        <input id="log-name" type="text" name="username" required>
         <span></span>
        <label for="log-name">Email</label>
      </div>
      <div class="txt_field">
        <input id="log-pass" type="password" name="password" required>
        <span></span>
        <label for="log-pass">Heslo</label>
      </div>
      <input type="submit" name="login" value="Prihlásiť sa">
      <div class="signup_link">
        Nie ste zaregistrovaný? <a href="registration.html">Zaregistrovať sa</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>