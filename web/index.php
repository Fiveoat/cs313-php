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
      let images = ['0713-2', '0752', '2675', '2983', '3584', '3629', '9186', '9399', '9984']
      let image_files = []
      for (i = 0; i < image_files.length; i++){
        images.push(`<img src='images/IMG_${image_file}.jpg' alt='image'>`)
      }
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
      <button type="button" onclick="getImage()">Click For Random Image</button>
        <div id="x"></div>
    </main>
    <footer>
      <?php require $root . '/footer.php'; ?>
    </footer>
  </div>
</body>

</html>