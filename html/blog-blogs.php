<?php
    require "../App.php";
    $app = new App();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Blogy">
  <meta name="keywords" content="Blog">
  <meta name="author" content="Zuzana Žillová">
  <title>Blogy</title>
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
        <li class="no-active">
          <a id="btn-login" href="login.php">Prihlásenie</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="blog-body">
  <section id="first-section">
    <div>
      <h1>Blogy</h1>
      <nav>
        <ul>
          <li class="active">
            <a href="blog-blogs.php">Blogy</a>
          </li>
          <li>
            <a href="blog-list-of-bloggers.php">Zoznam blogerov</a>
          </li>
          <li class="no-active">
            <a id="btn-new-blog" href="create-new-blog.php">Napísať nový článok</a>
          </li>
        </ul>
      </nav>
    </div>
    <div>

        <?php foreach ($app->getAllBlogs() as $blog) { ?>

      <div class="box">
        <img src="../files/profil_photos/<?=$blog->getAuthorProfilPhoto()?>" alt="Fotko autora">
        <div class="info">
          <a href="article.php?id=<?=$blog->getId()?>"><h3><?=$blog->getTitle()?></h3></a>
          <a href="profil.php?id=<?=$blog->getUserId()?>"><h4><?=$blog->getAuthorFullName()?></h4></a>
          <p>
              <?=$out = strlen($blog->getText()) > 250 ? substr($blog->getText(),0,250)."..." : $blog->getText();?>

          </p>
        </div>
      </div>
        <?php }?>


    </div>
  </section>
</div>

<footer class="footer">
  <div>
  </div>
</footer>

</body>
</html>