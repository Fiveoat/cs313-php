<?php
$root = $_SERVER['DOCUMENT_ROOT'];
echo $root;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/main.css" media="screen">
  <title>Home Page</title>
</head>

<body>
  <div id="container">
    <header>
      <?php require $root . '/header.php'; ?>
    </header>
    <nav>
    <?php require $root . '/nav.php'; ?>
    </nav>
    <main>
      <h1>About Coty Fivecoat</h1>
      <div class="photo">
        <span class="delorian"><img class="car" src="/phpmotors/images/vehicles/delorean.jpg" alt="Delorean"></span>
        <div class="info">
          <h2>DMC Delorean</h2>
          <div class="info-list">
            <ul class="list">
              <li>3 Cup holders</li>
              <li>Superman doors</li>
              <li>Fuzzy Dice!</li>
            </ul>
          </div>
      <div class="review-upgrade-box">
        <div class="review-box">
          <h2>DMC Delorean Reviews</h2>
          <div class="review">
            <ol>
              <li>"So fast its almost like traveling in time." (4/5)</li>
              <li>"Coolest ride on the road." (4/5)</li>
              <li>"I'm feeling Marty McFly!" (5/5)</li>
              <li>"The most futuristic ride of our day." (4.5/5)</li>
              <li>"80's livin and I love it!" (5/5)</li>
            </ol>
          </div>
        </div>
        <div class="upgrades-box">
          <h2>Delorean Upgrades</h2>
          <div class="upgrades">
            <div class="select-upgrade">
              <div class="image-container">
                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
              </div>
              <a href="#" class="upgrade-link-container">Flux Capacitor</a>
            </div>
            <div class="select-upgrade">
              <div class="image-container">
                <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decal">
              </div>
              <a href="#" class="upgrade-link-container">Flame Decal</a>
            </div>
            <div class="select-upgrade">
              <div class="image-container">
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Sticker">
              </div>
              <a href="#" class="upgrade-link-container">Bumper Stickers</a>
            </div>
            <div class="select-upgrade">
              <div class="image-container">
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
              </div>
              <a href="#" class="upgrade-link-container">Hub Caps</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <?php require $root . '/footer.php'; ?>
    </footer>
  </div>
</body>

</html>