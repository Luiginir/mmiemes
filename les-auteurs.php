<?php
require "header.php";
?>

<!DOCTYPE html>
<html lang="fr">


<?php echo generateHeader($csslink = "./css/les-auteurs.css");

$user = "1"

?>

<body>
    <main>
        <div class="banner">
            <div class="carousel-indicators">
                <div class="active-profile"> </div>
                <div> </div>
            </div>
            <img src="images/auteurs/amir.jpg" class="profile-imgs">
            <div class="add"><i class="fa-solid fa-plus"></i></div>
        </div>

        <div class="infos">
            <div>
                <h3>Amir Metmati</h3>
                <p>18</p>
                <i class="fa-solid fa-circle-check certif"></i>
            </div>
            <div class="details">
                <i class="fa-solid fa-ruler"></i>
                <p>1m72</p>
            </div>
            <div class="details">
                <i class="fa-solid fa-briefcase"></i>
                <p>Dresseur de rhinocéros</p>
            </div>
            <div class="details">
                <i class="fa-solid fa-location-pin"></i>
                <p>A coté de chez vous</p>
            </div>
            <div class="cards">
                <div class="card">
                    <p>📸</p>
                    <p>Amateur de photographie</p>
                </div>
            </div>
            <div class="description">
                <h4>À propos de moi</h4>
                <p>blabla</p>
            </div>
        </div>

        <div class="infos hidden">
            <div>
                <h3>Lucas Thomassin</h3>
                <p>21</p>
                <i class="fa-solid fa-circle-check certif"></i>
            </div>
            <div class="details">
                <i class="fa-solid fa-ruler"></i>
                <p>1m72</p>
            </div>
            <div class="details">
                <i class="fa-solid fa-briefcase"></i>
                <p>Poseur de portes blindées</p>
            </div>
            <div class="details">
                <i class="fa-solid fa-location-pin"></i>
                <p>A coté de chez vous</p>
            </div>
            <div class="cards">
                <div class="card">
                    <p>📸</p>
                    <p>Amateur de photographie</p>
                </div>
            </div>
            <div class="description">
                <h4>À propos de moi</h4>
                <p>blabla</p>
            </div>
        </div>
    </main>
</body>
<script src="js/les-auteurs.js"></script>
</html>