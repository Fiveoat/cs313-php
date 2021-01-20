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
		'S04'  => '<label for="S6"><img id="" src="/week3/images/S6.jpg" alt="black diamond camalot"> Size 6 </label>',
		'S05' => '<label for="S5"><img id="" src="/week3/images/S5.jpg" alt="black diamond camalot"> Size 5 </label>',
		'S075' => '<label for="S4"><img id="" src="/week3/images/S4.jpg" alt="black diamond camalot"> Size 4 </label>',
		'S1' => '<label for="S3"><img id="" src="/week3/images/S3.jpg" alt="black diamond camalot"> Size 3 </label>',
		'S2' => '<label for="S2"><img id="" src="/week3/images/S2.jpg" alt="black diamond camalot"> Size 2 </label>',
		'S3' => '<label for="S1"><img id="" src="/week3/images/S1.jpg" alt="black diamond camalot"> Size 1 </label>', 
		'S4' => '<label for="S075"><img id="" src="/week3/images/S075.jpg" alt="black diamond camalot"> Size .75 </label>',
		'S5' => '<label for="S05"><img id="" src="/week3/images/S05.jpg" alt="black diamond camalot"> Size .5 </label>',
		'S6' => '<label for="S04"><img id="" src="/week3/images/S04.jpg" alt="black diamond camalot"> Size .4 </label>');
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