<?php
  require 'header.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
    <?php echo generateHeader($csslink = "./css/index.css") ?>
<body>
  <div class='title-container'>
    <img src="./images/largelogo.svg" alt="">

    <h1>Le dernier meme</h1>
  </div>

  <div class="last-meme-container">
      <img src="/images/meme1.png">
      <div>
        <h3>La classique</h3>
        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p>La soirée se passe bien, jusqu'au moment où tu te rends compte qu'il est déjà 4h. Le lendemain, à 8h, c'est CM de Mr Daghmi. Ça c'est ta tête à ce cours. Du coup c'est drôle.</p>
      </div>
  </div>
<script src="./js/header.js"></script>

</body>
</html>