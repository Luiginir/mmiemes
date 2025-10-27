<?php
  require 'header.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
<body>

  <?php echo generateHeader($csslink = "./css/index.css") ?>

  <div class="meme-container">
    <img src="./images/test.png" alt="test image">
    <div>
      <i class="fa-solid fa-xmark"></i>
      
    </div>
    <div>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
    </div>
    <div>
      <i class="fa-solid fa-heart"></i>
    </div>
  </div>
  <div>
    <h2>Nom du meme</h2>
    <p>Description du meme</p>
  </div>
</body>
</html>