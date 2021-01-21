<?php
session_start();
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
    <h1 class="display-4">Shopping Cart</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($_SESSION['cart'] as $id){
                echo "<div class='col-sm'>
                        <img src='/week3/images/S{$id}.jpg' alt='black diamond camalot'>Size {$id}
                        <a style='text-decoration: none;' href='/week3/remove_from_cart.php?id={$id}'>Delete</a>
                     </div><br>";}?>
        </div>
    </div>
	</main>
	<footer>
		<?php require $root . '/week3/footer.php'; ?>
	</footer>
</body>

</html>