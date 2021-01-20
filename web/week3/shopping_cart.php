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