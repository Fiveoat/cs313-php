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
		$products = array(
		'S04'  => 'BLACK DIAMOND SIZE S04',
		'S05' => 'BLACK DIAMOND SIZE S04',
		'S075' => 'BLACK DIAMOND SIZE S04',
		'S1' => 'BLACK DIAMOND SIZE S04',
		'S2' => 'BLACK DIAMOND SIZE S04',
		'S3' => 'BLACK DIAMOND SIZE S04', 
		'S4' => 'BLACK DIAMOND SIZE S04',
		'S5' => 'BLACK DIAMOND SIZE S04',
		'S6' => 'BLACK DIAMOND SIZE S04');
		foreach ($_POST['products'] as $product) {
			echo $products[$product];
		}
		?>
	</main>
	<footer>
		<?php require $root . '/week3/footer.php'; ?>
	</footer>
</body>

</html>