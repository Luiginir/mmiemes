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

        <div class="infos">
            <div class="banner">
                <div class="carousel-indicators">
                    <div class="indicator active-profile"> </div>
                    <div class="indicator"> </div>
                </div>
                <img src="./images/auteurs/amir.jpg" class="profile-imgs">
                <div class="add"><i class="fa-solid fa-plus"></i></div>
            </div>

            <div class="details">
                <div>
                    <h3>Amir Metmati</h3>
                    <p>18</p>
                    <i class="fa-solid fa-circle-check certif"></i>
                </div>
                <div class="detail">
                    <i class="fa-solid fa-ruler"></i>
                    <p>1m72</p>
                </div>
                <div class="detail">
                    <i class="fa-solid fa-briefcase"></i>
                    <p>Arabe</p>
                </div>
                <div class="detail">
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
                    <p>Passionné de vidéos, de photos et de vol, je me suis lancé dans les études du Multimédia et de l'Internet. Aujourd'hui, j'essaie de combiner ces passions pour créer des projets innovants et captivants.</p>
                </div>
            </div>
        </div>



        <div class="infos hidden">
            <div class="banner">
                <div class="carousel-indicators">
                    <div class="indicator"> </div>
                    <div class="indicator active-profile"> </div>
                </div>
                <img src="./images/auteurs/lucas.png" class="profile-imgs">
                <div class="add"><i class="fa-solid fa-plus"></i></div>
            </div>

            <div class="details">
                <div>
                    <h3>Lucas Thomassin</h3>
                    <p>21</p>
                    <i class="fa-solid fa-circle-check certif"></i>
                </div>
                <div class="detail">
                    <i class="fa-solid fa-ruler"></i>
                    <p>1m76</p>
                </div>
                <div class="detail">
                    <i class="fa-solid fa-briefcase"></i>
                    <p>Poseur de portes blindées</p>
                </div>
                <div class="detail">
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
                    <p>Passionné de technologie, de photos et de portes blindées, je me suis lancé dans les études du Multimédia et de l'Internet. Aujourd'hui, j'essaie de combiner ces passions pour créer des projets innovants et captivants.</p>
                </div>
            </div>
        </div>


    </main>
</body>
<script src="js/header.js"></script>
<script src="js/les-auteurs.js"></script>
</html>