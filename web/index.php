<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/main.css" media="screen">
  <script type="text/javascript" src="/main.js"></script>
  <script>
    function getImage() {
      let i = 0;
      let images = ["<img src='images/IMG_0713-2.jpg' alt='image'>", "<img src='images/IMG_0752.jpg' alt=image>", "<img src='images/IMG_2675.jpg' alt='image'>", "<img src='images/IMG_2983.jpg' alt='image'>", "<img src='images/IMG_3584.jpg' alt='image'>", "<img src='images/IMG_9984.jpg' alt='image'>",]
      i = Math.floor(Math.random() * images.length);
      document.getElementById('x').innerHTML = images[i];
    }
  </script>

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
      <h1>About Me</h1>
      <p>I think that the </p>
      <button onclick="getImage()">
        <div id="x"></div>
    </main>
    <footer>
      <?php require $root . '/footer.php'; ?>
    </footer>
  </div>
</body>

</html>