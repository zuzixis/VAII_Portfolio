<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domov</title>
    <?php
        include('parts/head.php')
    ?>
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
                <li class="active"><a href="home.php">Domov</a></li>
                <li><a href="blog-blogs.php">Blog</a></li>
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
<div> <!--class="login-background"-->
    <img class="abstract-background" src="../img/login-bg2.png" alt="pozadie">
    <div>
        <div class = "main-title">
            <h1>
                Ukáž sa <br>
                a nájdi si prácu snov
            </h1>
            <h2>
                Zaregistruj sa, vyplň si profil a nájdi si prácu, ktorá ťa baví!
            </h2>
        </div>
    </div>
</div>

<div class="body-page">
    <section>
        <div class="home-about-as">
            <img class="body-page-photo" src="../img/question-mark.png" alt="modrý otáznik">
            <h2>Kto sme ?</h2>
            <p>
                Portfólio je stránka, ktorá poskytuje ilustračnú interakciu medzi potenciálnym zamestnancom
                a skutočným zamestnávateľom. Poskytujeme užívateľovi sa zaregistrovať, vytvoriť si vlastný
                "skills list" a ilustračné portfólio vlastných prác. Stránka slúži na propagáciu vlastných diel.
            </p>
        </div>
    </section>

    <section>
        <div class="home-blog">
            <img class="body-page-photo" src="../img/blog.png" alt="Obrázok reprezentujúci blog">
            <h2>Vyjadrite svoj názor v blogu</h2>
            <p>
                Súčasťou našej stránky je samostatná sekcia blogov. Každý zaregistrovaný užívateľ môže vytvárať
                nové blogy, kde sa môže vyjadrovať na rôzne témy, ktoré nemusia úzko súvisieť s
                témou našej stránky. Pre nezaregistrovaných užívateľov je blog plne verejný na prečítanie.
            </p>
            <div class="btn-link">
                <a href="blog-blogs.php"><div class="btn-h-center"> Viac</div> </a>
            </div>
        </div>
    </section>

    <section>
        <div class="home-portfolio">
            <img class="body-page-photo" src="../img/portfolio-home.png" alt="Obrázok reprezentujúci portfólio">
            <h2>Ukážte, čo ste vytvorili</h2>
            <p>
                V sekcii portfóliá sa nachádza zoznam portfólií prihlásených používateľov. Každé portfólio
                poskytuje jednoduchú predstavu vašich zručností pre zamestnávateľa. V portfóliu sa nachádza
                jednoduchý informačný textík, skill list, list napísaných blogov či
                animované portfólio vlastných projektov.
            </p>
            <div class="btn-link">
                <a href="#"><div class="btn-h-center"> Viac</div> </a>
            </div>
        </div>
    </section>

    <!--<section>
        <div class="home-new-opportunities">
            <img class="body-page-photo" src="../img/find-job.png" alt="Obrázok reprezentujúci pracové príležitosti">
            <h2>Pozrite si nové ponuky</h2>
            <p>
                V karte nové pozície nájdete nové pracovné ponuky od rôznych zamestnávateľov. Ak Vás nejaká pracovná
                ponuka osloví, stačí kontaktovať poskytovateľa. On si pozrie vaše portfólio a v prípade, že
                ho Vaše zručnosti zaujali môžete byť pozvaný na pohovor.
            </p>
            <div class="btn-link">
                <a href="#"><div class="btn-h-center"> Viac</div> </a>
            </div>
        </div>
    </section>-->
</div>

<?php
    include('parts/footer.php')
?>


</body>
</html>