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
  <meta name="description" content="Písanie nového blogu">
  <meta name="keywords" content="Blog, create new blog">
  <meta name="author" content="Zuzana Žillová">
  <title>Písanie blogu</title>
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
        <li><a href="home.php">Domov</a></li>
        <li class="active"><a href="blog-blogs.php">Blog</a></li>
        <li><a href="portfolios.php">Portfóliá</a></li>
          <?php
          if (isset($_SESSION["id"]))
          {
              echo '<li class="no-active"><a href="logout.php"></a>';
              echo $_SESSION["name"];
              echo '<li class="no-active"><a id="btn-login" href="logout.php">Odhlásiť sa</a>';

              //echo '<img class="log-photo" src="../files/profil_photos/my-photo.JPG">';
          }else{
              echo '<a id="btn-login" href="login.php">Prihlásenie</a></li>';
          }
          ?>
      </ul>

    </nav>
  </div>

</header>
<div class="blog-body blog-body-create">
  <section id="first-section">
    <div>
      <h1>Písanie blogu...</h1>
      <nav>
        <ul>
          <li class="no-active">
            <a id="btn-new-blog" href="blog-blogs.php">Zrušiť</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <section>
      <form action="blog-blogs.php" method="post" enctype="multipart/form-data">
    <div class="center">
      <div class="left-side">
        <h1>Nový článok</h1>
          <div class="txt_field">
            <input id="create-title" type="text" name="title" required>
            <span></span>
            <label for="create-title">Nadpis</label>
          </div>
      </div>
      <div class="right-side">
          <div>
            <label for="create-blog-text">Text:</label>
            <textarea id="create-blog-text"  rows="10" cols="10" name="text">
            </textarea>
          </div>
          <input type="submit" value="Vytvoriť blog" name="create-blog">
      </div>

    </div>
      </form>
  </section>
</div>
</body>
</html>