<?php
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css\les-auteurs.css">
    <link rel="stylesheet" href="css\global.css">

</head>

<?php echo generateHeader() ?>

<body>
    <main>
        <div class="banner">
            <div class="carousel-indicators">
                <div class="active-profile"> </div>
                <div> </div>
            </div>
            <img src="images/auteurs/amir.jpg">
            <div class="add"><i class="fa-solid fa-plus"></i></div>
        </div>

        <div class="infos">
            <div>
                <h3>Nom de l'auteur</h3>
                <p>18</p>
                <i class="fa-solid fa-circle-check certif"></i>
            </div>
            <div class="details">
                <i class="fa-solid fa-ruler"></i>
                <p>1m72</p>
            </div>
            <div class="details">
                <i class="fa-solid fa-briefcase"></i>
                <p>Développeur web</p>
            </div>
            <div class="details">
                <i class="fa-solid fa-location-pin"></i>
                <p>A coté de chez vous</p>
            </div>
            <div class="cards">
                <div class="card">
                    <p>📸</p>
                    <div>
                        <p>Amateur de</p>
                        <p>Photographie</p>
                    </div>
                </div>
            </div>
            <div class="description">
                <h4>À propos de moi</h4>
                <p>blabla</p>
            </div>
        </div>

    </main>
</body>
</html>