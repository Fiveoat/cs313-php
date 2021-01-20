<?php
if (is_array($_POST['product'])){
	foreach($_POST['product'] as $value)
	 {
		 echo 'Been To: '. $_POST[$value] . '<br>';
	 }
 }
else {echo "hi";}
// $firstName = $_POST["first_name"];
// $lastName = $_GET["last_name"];
// $address = $_GET["address"];
// $phone = $_GET["phone"];
// $cam2 = $_GET["item_0"];
// $cam4 = $_GET["item_1"];
// $cam5 = $_GET["item_2"];
// $cam6 = $_GET["item_3"];
// $cardType = $_GET["card"];
// $cardNumber = $_GET["credit_card"];
// $cardLast4 = substr($cardNumber, 15, 19);
// $cardExpiration = $_GET["exp_date"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Wind River Range Equipment</title>
    <link rel="stylesheet" type="text/css" href="/week3/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<header class="display-4">
    <?php require $root . '/week3/header.php'; ?>
</header>
<nav>
      <?php require $root . '/week3/nav.php'; ?>
    </nav>


<footer>
    <?php require $root . '/week3/footer.php'; ?>
</footer>
</html>