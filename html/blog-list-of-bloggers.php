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
  <meta name="description" content="Zoznam blogerov">
  <meta name="keywords" content="Blog, list of bloggers">
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

<div class="blog-body">
  <section id="first-section">
    <div>
      <h1>Blogy</h1>
      <nav>
        <ul>
          <li>
            <a href="blog-blogs.php">Blogy</a>
          </li>
          <li class="active">
            <a href="blog-list-of-bloggers.php">Zoznam blogerov</a>
          </li>
            <?php
            if (isset($_SESSION["id"]))
            {
                echo '<li class="no-active"><a id="btn-new-blog" href="create-new-blog.php">Napísať nový článok</a></li>';
            }
            ?>
        </ul>
      </nav>
    </div>

      <?php foreach ($app->getAllBloggers() as $blogger) { ?>

    <div class = "blogger-box">
      <img src="../files/profil_photos/<?=$blogger->getProfilPhoto()?>" alt="Fotka profilu">
      <a href="profil.php?id=<?=$blogger->getId()?>"><h3><?=$blogger->getFullName()?></h3></a>
      <p>
          <?=$out = strlen($blogger->getBasicInfo()) > 200 ? substr($blogger->getBasicInfo(),0,200)."..." : $blogger->getBasicInfo();?>
      </p>
    </div>

      <?php }?>


  </section>
</div>

<footer class="footer">
  <div>
  </div>
</footer>

</body>
</html>