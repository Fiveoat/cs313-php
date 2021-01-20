<?php
session_start();
$_SESSION['cart'] = array();
$root = $_SERVER['DOCUMENT_ROOT'];
if (!isset($_SESSION["total"])) {
    $_SESSION["total"] = 0;
    for ($i = 0; $i < count($products); $i++) {
        $_SESSION["qty"][$i] = 0;
        $_SESSION["amounts"][$i] = 0;
    }
}
if (isset($_GET['reset'])) {
    if ($_GET["reset"] == 'true') {
        unset($_SESSION["qty"]);
        unset($_SESSION["amounts"]);
        unset($_SESSION["total"]);
        unset($_SESSION["cart"]);
    }
}
if (isset($_GET["add"])) {
    $i = $_GET["add"];
    $qty = $_SESSION["qty"][$i] + 1;
    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    $_SESSION["cart"][$i] = $i;
    $_SESSION["qty"][$i] = $qty;
}
if (isset($_GET["delete"])) {
    $i = $_GET["delete"];
    $qty = $_SESSION["qty"][$i];
    $qty--;
    $_SESSION["qty"][$i] = $qty;
    if ($qty == 0) {
        $_SESSION["amounts"][$i] = 0;
        unset($_SESSION["cart"][$i]);
    } else {
        $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    }
}
$products = array("Size 6", "Size 5", "Size 4", "Size 3", "Size 2", "Size 1", "Size .75", "Size .5", "Size .4");
$images = array("S6", "S5", "S4", "S3", "S2", "S1", "S075", "S05", "S04");
$prices = array(120, 110, 100, 90, 80, 70, 60, 50, 40);
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
    <div id="products">
        <h2 class="display-6">Black Diamond Camalots</h2>
        <br><br><br>
        <div class="container">
            <div class="row">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="col-md">
                        <?php echo "<label><img src='/week3/images/{$images[$i]}.jpg' alt='black diamond camalot'>{$products[$i]} Price :${$prices[$i]} </label><a href='?add=<?php echo ($i); ?>'>Add To Cart</a>"; ?>
                    </div>
                <?php }
                ?>
            </div>
            <div class="row">
                <?php
                for ($i = 3; $i < 6; $i++) {
                ?>
                    <div class="col-md">
                        <?php echo "<label><img src='/week3/images/{$images[$i]}.jpg' alt='black diamond camalot'>{$products[$i]} Price :${$prices[$i]}</label><a href='?add=<?php echo ($i); ?>'>Add To Cart</a>"; ?>
                    </div>
                <?php }
                ?>
            </div>
            <div class="row">
                <?php
                for ($i = 6; $i < 9; $i++) {
                ?>
                    <div class="col-md">
                        <?php echo "<label><img src='/week3/images/{$images[$i]}.jpg' alt='black diamond camalot'>{$products[$i]} Price :${$prices[$i]}</label><a href='?add=<?php echo ($i); ?>'>Add To Cart</a>"; ?>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION["cart"])) {
    ?>
        <br /><br /><br />
        <h2>Cart</h2>
        <table>
            <tr>
                <th>Product</th>
                <th width="10px">&nbsp;</th>
                <th>Qty</th>
                <th width="10px">&nbsp;</th>
                <th>Amount</th>
                <th width="10px">&nbsp;</th>
                <th>Action</th>
            </tr>
            <?php
            $total = 0;
            foreach ($_SESSION["cart"] as $i) {
            ?>
                <tr>
                    <td><?php echo ($products[$_SESSION["cart"][$i]]); ?></td>
                    <td width="10px">&nbsp;</td>
                    <td><?php echo ($_SESSION["qty"][$i]); ?></td>
                    <td width="10px">&nbsp;</td>
                    <td><?php echo ($_SESSION["amounts"][$i]); ?></td>
                    <td width="10px">&nbsp;</td>
                    <td><a href="?delete=<?php echo ($i); ?>">Delete from cart</a></td>
                </tr>
            <?php
                $total = $total + $_SESSION["amounts"][$i];
            }
            $_SESSION["total"] = $total;
            ?>
            <tr>
                <td colspan="7">Total : <?php echo ($total); ?></td>
            </tr>
        </table>
    <?php
    }
    ?>
    <!-- <form method="POST" action="shopping_cart.php">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S6" value="S6"><label for="S6"><img id="" src="/week3/images/S6.jpg" alt="black diamond camalot"> Size 6 Price: $130 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S5" value="S5"><label for="S5"><img id="" src="/week3/images/S5.jpg" alt="black diamond camalot"> Size 5 Price: $120 </label><br />
                    </div>
                    <div class="col-md">
                        <input class="form-check-input" type="checkbox" name="products[]" id="S4" value="S4"><label for="S4"><img id="" src="/week3/images/S4.jpg" alt="black diamond camalot"> Size 4 Price: $110 </label><br />
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div class="container">
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
            <input type="submit" class="btn btn-outline-secondary" value="Add To Cart">
        </form> -->
    <footer>
        <?php require $root . '/week3/footer.php'; ?>
    </footer>

</body>

</html>