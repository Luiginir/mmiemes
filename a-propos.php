<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>A propos</title>
</head>
<?php
require "header.php";
echo generateHeader($csslink ="./css/a-propos.css");
?>
<body>
    <div class="a-propos-container">
        <h2>
            À propos de ce site
        </h2>

        <div>
            <h3>
                Objectifs
            </h3>
            <p>
                Ce site web a été créé dans le cadre d'un projet scolaire afin de présenter des Memes auxquels les élèves peuvent s'identifier.
                L'objectif principal est de fournir une plateforme où les étudiants peuvent partager des contenus humoristiques liés à leur vie quotidienne et à leurs expériences scolaires.
            </p>
        </div>

        <div>
            <h3>
                Déontologie
            </h3>
            <p>
                Toute personne souhaitant publier des Memes sur ce site doit respecter une charte de bonne conduite visant à garantir le respect et la dignité de tous les utilisateurs.
                Les Memes ne doivent pas contenir de contenu offensant, discriminatoire ou inapproprié.    
            </p>
        </div>
    </div>

</body>
<script src="js/header.js"></script>
</html>