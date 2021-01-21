<?php
session_start();
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$state = htmlspecialchars($_POST["state"]);
$city = htmlspecialchars($_POST["city"]);
$zip = htmlspecialchars($_POST["zip"]);
$street = htmlspecialchars($_POST["street"]);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Wind River Range Equipment</title>
    <link rel="stylesheet" type="text/css" href="/week3/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
    <header class="display-4">
        <?php require $root . '/week3/header.php'; ?>
    </header>
    <nav>
        <?php require $root . '/week3/nav.php'; ?>
    </nav>
    <h1>Order Confirmation</h1>
    <?php
    echo "<h1>Thank you, {$name} for your order.</h1>
    <h6>Email: {$email}</h6>
    <h6>Street: {$street}</h6>
    <h6>City: {$city}</h6>
    <h6>State: {$state}</h6>
    <h6>Zip: {$zip}</h6>
    </h6>";
    ?>
    <footer>
        <?php require $root . '/week3/footer.php'; ?>
    </footer>
</body>


</html>