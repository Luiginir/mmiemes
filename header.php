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
    <title>Les auteurs</title>
    <!--  Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!--  Font Awesome  -->
    <script src="https://kit.fontawesome.com/062789c208.js" crossorigin="anonymous"></script>
    <!--  CSS  -->
    <link rel="stylesheet" href="css/global.css">
    $extraCss
</head>

<header>
<!--  Logo  -->
    <div>
        <img src="images/logo.svg" alt="logo">
    </div>

    <div class="nav-pc">
        <a></a>
    </div>
    <div class="nav-mobile">
        <i class="fa-solid fa-bars"></i>
    </div>
</header>

HTML;

}

?>


