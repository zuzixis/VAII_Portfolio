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
  <meta name="description" content="Profil používateľa na stránke portfolio.">
  <meta name="keywords" content="Profil,user">
  <meta name="author" content="Zuzana Žillová">
  <title>Profil</title>
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
        <li><a href="blog-blogs.php">Blog</a></li>
        <li class="active"><a href="portfolios.php">Portfóliá</a></li>
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

<div class="profil-body">
  <section id="first-section">
    <div class="header-profil">

        <?php foreach ($app->loadProfil() as $user) { ?>

        <img class="profil-photo" src="../files/profil_photos/<?=$user->getProfilPhoto()?>" alt="Profilová fotka">

      <div class="header-title">
        <h1><?=$user->getFullName()?></h1>
        <h3><?=$user->getRole()?></h3>
      </div>

    </div>
  </section>
  <section>
    <div class="contact">
      <h2 class="p-subtitles">Kontakt:</h2>
      <ul>
        <li><img src="../img/gps.png" alt="Logo poloha">
          <span>
           <?=$user->getLocation()?>
         </span>
        </li>
        <li>
          <img src="../img/telefon.png"  alt="Logo telefón">
          <a href="tel:+421910117452">
              <?=$user->getNumber()?>
          </a>
        </li>
        <li>
          <img src="../img/email.png" alt="Logo email.">
          <a href="mailto:zuzka.zillova@gmail.com">
              <?=$user->getEmail()?>
          </a>
        </li>
        <li>
          <img src="../img/facebook.png" alt="Logo facebook">
            <span><?=$user->getFacebook()?></span>
        </li>
        <li>
          <img src="../img/instagram.png" alt="Logo instragram">
            <span><?=$user->getInstagram()?></span>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="profil-info">
      <h2 class="p-subtitles">Základné informácie</h2>
      <p>
          <?=$user->getBasicInfo()?>
          <?php }?>
      </p>
    </div>
  </section>
  <section>
    <div class="profil-skills">
      <h2 class="p-subtitles">Skills</h2>
      <ul>
          <?php foreach ($app->getUsersSkills() as $skill) { ?>
              <li><img class="skill-icons" src="../files/skills/<?=$skill->getImage()?>" alt="obrázok dovedomosti - skill"></li>
          <?php }?>
      </ul>
    </div>
  </section>
  <section>
    <div class="profil-blogs">
      <h2 class="p-subtitles">Moje blogy</h2>
      <ul>
          <?php foreach ($app->getUsersBlogs() as $blog) { ?>
              <li><a href="article.php?id=<?=$blog->getId()?>"><?=$blog->getTitle()?></a></li>
          <?php }?>
      </ul>
    </div>
  </section>
  <section>
    <div class="profil-portfolio">
      <h2 class="p-subtitles">Portfolio</h2>
      <div class="grid">
          <?php foreach ($app->getUsersProjects() as $project) { ?>
              <div class="grid-item">
                  <img src="../files/portfolios/<?=$project->getImage()?>" alt="tetris">
                  <div class="detail-grid-item">
                      <p>
                          <?=$project->getTitle()?>
                      </p>
                  </div>
              </div>
              <?php }?>
        </div>
    </div>
  </section>
</div>

<footer class="footer">
  <div>
  </div>
</footer>

</body>
</html>