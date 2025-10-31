<?php
  require 'header.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
<body>

  <?php echo generateHeader($csslink = "./css/index.css") ?>

<div class="tinder">
  <div class="tinder--status">
    <i class="fa fa-remove"></i>
    <i class="fa fa-heart"></i>
  </div>

  <div class="tinder--cards">
    <div class="tinder--card">
      <img src="/images/meme1.png">
      <h3>Demo card 1</h3>
      <p>This is a demo for Tinder like swipe cards</p>
    </div>
    <div class="tinder--card">
      <img src="/images/meme2.png">
      <h3>Demo card 2</h3>
      <p>This is a demo for Tinder like swipe cards</p>
    </div>
    <div class="tinder--card">
      <img src="/images/meme3.png">
      <h3>Demo card 3</h3>
      <p>This is a demo for Tinder like swipe cards</p>
    </div>
    <div class="tinder--card">
      <img src="/images/meme4.png">
      <h3>Demo card 4</h3>
      <p>This is a demo for Tinder like swipe cards</p>
    </div>
    <div class="tinder--card" >
      <img src="/images/test.png">
      <h3>Demo card 5</h3>
      <p>This is a demo for Tinder like swipe cards</p>
    </div>
  </div>

      <div class="tinder--buttons">
      <button id="nope"><i class="fa fa-remove"></i></button>
      <button id="love"><i class="fa fa-heart"></i></button>
    </div>


</div>

<div class="background">

</div>
</body>
<!-- HammerJS pour les gestes tactiles -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="./js/index.js"></script>
</html>