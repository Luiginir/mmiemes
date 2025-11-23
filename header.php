<?php

function generateHeader($csslink = "") {
    // préparer le lien CSS additionnel de façon sûre
    $extraCss = "";
    if (!empty($csslink)) {
        $extraCss = '<link rel="stylesheet" href="' . htmlspecialchars($csslink, ENT_QUOTES, 'UTF-8') . '">';
    }

    return
    <<<HTML
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adopte un meme</title>
    <!--  Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  CSS  -->
    <link rel="stylesheet" href="css/global.css">
    $extraCss
</head>

<header>
      <div id="topnav" class="topnav">

        <!--  Logo  -->
        <div>
            <img src="images/logo.svg" alt="logo">
        </div>

        <!--  Nav pc -->
        <div class="nav-pc">
            <nav>
                <a href="index.php">Accueil</a>
                <a href="les-memes.php">Les memes</a>
                <a href="les-auteurs.php">Les auteurs</a>
                <a href="a-propos.php">A propos</a>
            </nav>
        </div>


        <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
        <!-- Some spans to act as a hamburger -->
        <span></span>
        <span></span>
        <span></span>
        </a>

        <!-- Responsive Menu -->
        <nav role="navigation" id="topnav_responsive_menu">
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="les-memes.php">LES MEMES</a></li>
            <li><a href="les-auteurs.php">LES AUTEURS</a></li>
            <li><a href="a-propos.php">A PROPOS</a></li>
        </ul>
        </nav>
    </div>
</header>

HTML;

}

?>


