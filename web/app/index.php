<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Houselr</title>
    <link rel="stylesheet" type="text/css" href="/week3/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <header class="display-4">
        <?php require $root . '/app/header.php'; ?>
    </header>
    <nav>
        <?php require $root . '/app/nav.php'; ?>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div method="GET" action="/week3/add?" class="col-md">
                <img src="/week3/images/S6.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=6">Add To Cart</a>
            </div>
            <div method="GET" action="shopping_cart.php" class="col-md">
                <img src="/week3/images/S5.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=5">Add To Cart</a>
            </div>
            <div class="col-md">
                <img src="/week3/images/S4.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=4">Add To Cart</a>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div method="GET" action="/week3/add?" class="col-md">
                <img src="/week3/images/S3.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=3">Add To Cart</a>
            </div>
            <div method="GET" action="shopping_cart.php" class="col-md">
                <img src="/week3/images/S2.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=2">Add To Cart</a>
            </div>
            <div class="col-md">
                <img src="/week3/images/S1.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=1">Add To Cart</a>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div method="GET" action="/week3/add?" class="col-md">
                <img src="/week3/images/S075.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=075">Add To Cart</a>
            </div>
            <div method="GET" action="shopping_cart.php" class="col-md">
                <img src="/week3/images/S05.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=05">Add To Cart</a>
            </div>
            <div class="col-md">
                <img src="/week3/images/S04.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=04">Add To Cart</a>
            </div>
        </div>
    </div>
    <footer>
        <?php require $root . '/app/footer.php'; ?>
    </footer>

</body>

</html>