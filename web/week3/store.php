<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Wind River Range Equipment</title>
    <link rel="stylesheet" type="text/css" href="/week3/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <header class="display-4">
        <?php require $root . '/week3/header.php'; ?>
    </header>
    <nav>
        <?php require $root . '/week3/nav.php'; ?>
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
                <a class="btn btn-outline-secondary" class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=075">Add To Cart</a>
            </div>
            <div method="GET" action="shopping_cart.php" class="col-md">
                <img src="/week3/images/S05.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=05">Add To Cart</a>
            </div>
            <div class="col-md">
                <img src="/week3/images/S04.jpg" alt="black diamond camalot">
                <a class="btn btn-outline-secondary" href="/week3/add_to_cart.php?id=04">Add To Cart</a>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md">
                <input class="form-check-input" type="checkbox" name="products[]" id="S3" value="S3"><label for="S3"><img id="" src="/week3/images/S3.jpg" alt="black diamond camalot"> Size 3 Price: $100 </label><br />
            </div>
            <div class="col-md">
                <input class="form-check-input" type="checkbox" name="products[]" id="S2" value="S2"><label for="S2"><img id="" src="/week3/images/S2.jpg" alt="black diamond camalot"> Size 2 Price: $90 </label><br />
            </div>
            <div class="col-md">
                <input class="form-check-input" type="checkbox" name="products[]" id="S1" value="S1"><label for="S1"><img id="" src="/week3/images/S1.jpg" alt="black diamond camalot"> Size 1 Price: $80 </label><br />
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <input class="form-check-input" type="checkbox" name="products[]" id="S075" value="S075"><label for="S075"><img id="" src="/week3/images/S075.jpg" alt="black diamond camalot"> Size .75 Price: $70 </label><br />
            </div>
            <div class="col-md">
                <input class="form-check-input" type="checkbox" name="products[]" id="S05" value="S05"><label for="S05"><img id="" src="/week3/images/S05.jpg" alt="black diamond camalot"> Size .5 Price: $60 </label><br />
            </div>
            <div class="col-md">
                <input class="form-check-input" type="checkbox" name="products[]" id="S04" value="S04"><label for="S04"><img id="" src="/week3/images/S04.jpg" alt="black diamond camalot"> Size .4 Price: $50 </label><br />
            </div>
        </div>
    </div>
    <br><br><br>
    <input type="submit" class="btn btn-outline-secondary" value="Add To Cart"> -->
    </form>
    <footer>
        <?php require $root . '/week3/footer.php'; ?>
    </footer>

</body>

</html>