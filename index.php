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

  <div class="tinder--card">
      <img src="/images/meme2.png">
    <div class="rating">
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
    </div>
    <h3>Demo card 2</h3>
    <p>This is a demo for Tinder like swipe cards</p>
  </div>
</body>
<script src="./js/header.js"></script>
</html>