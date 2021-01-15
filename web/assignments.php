<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/main.css" media="screen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script type="text/javascript" src="/main.js"></script>
  <title>Home</title>
</head>

<body>
  <div class=".container-md">
    <header class="display-4">
      <?php require $root . '/header.php'; ?>
    </header>
    <nav>
      <?php require $root . '/nav.php'; ?>
    </nav>
    <main>
    <br><br><br><br><br><br><br>
    <h1 class="display-1">COMING SOON</h1>
    <br><br><br><br><br><br><br>
    </main>
  <footer>
    <?php require $root . '/footer.php'; ?>
  </footer>
  </div>
</body>

</html>