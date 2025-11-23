<?php
  require 'header.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
      <?php echo generateHeader($csslink = "./css/les-memes.css") ?>
<body>



<div class="tinder">
  <div class="tinder--status">
    <i class="fa-solid fa-xmark"></i>
    <i class="fa-solid fa-heart"></i>
  </div>

  <div class="tinder--cards">
    <div class="tinder--card">
      <img src="/images/meme1.png">
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <h3>La classique</h3>
      <p>La soirée se passe bien, jusqu'au moment où tu te rends compte qu'il est déjà 4h. Le lendemain, à 8h, c'est CM de Mr Daghmi. Ça c'est ta tête à ce cours. Du coup c'est drôle.</p>
    </div>
    <div class="tinder--card">
      <img src="/images/meme2.png">
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <h3>La Galo</h3>
      <p>Ici, ce n'est pas "Ctrl+C, Ctrl+V", c'est "édition copier, édition coller". Du coup c'est drôle.</p>
    </div>
    <div class="tinder--card">
      <img src="/images/meme3.png">
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <h3>Le cadreur</h3>
      <p>Toi, tu ne te souviens sûrement pas de ce qu'il s'est passé. Mais la galerie de ce / cette pote, elle, elle s'en souviens. Du coup c'est drôle.</p>
    </div>
    <div class="tinder--card">
      <img src="/images/meme4.png">
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <h3>L'enc*lade</h3>
      <p>Au début t'as de bonne intentions, mais [SQL ERROR]:حتى أنا لا أعرف.
. Du coup c'est drôle.</p>
    </div>
    <div class="tinder--card" >
      <img src="/images/meme5.png">
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      <h3>L'enc*lade (encore)</h3>
      <p>Dans le contexte actuel, les élèves ont (selon eux) une charge (légèrement) trop élevée de travail, et on leur annonce un travail impossible à réaliser. Du coup c'est drôle.</p>
    </div>
  </div>

      <div class="tinder--buttons">
      <button id="nope"><i class="fa fa-remove"></i></button>
      <button id="love"><i class="fa fa-heart"></i></button>
    </div>


</div>

<div class="background">
  <h2>C'est tout pour l'instant.</h2>
  <a class="btn" href="./index.php">Voir le dernier meme</a>
</div>
</body>
<!-- HammerJS pour les gestes tactiles -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="./js/header.js"></script>
<script src="./js/les-memes.js"></script>
</html>