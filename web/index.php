<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
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

    </main>
    <footer>
      <?php require $root . '/footer.php'; ?>
    </footer>
  </div>
</body>

</html>