<?php
session_start();
// $_SESSION['cart'] = array();
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
$amounts = array(120, 110, 100, 90, 80, 70, 60, 50, 40);
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
	<main>
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
	</main>
	<footer>
		<?php require $root . '/week3/footer.php'; ?>
	</footer>
</body>

</html>