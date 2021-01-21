<?php
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
    <title>Order Confirmation</title>
</head>

<body>
    <h1>Order Confirmation</h1>
    <?php
    echo "<h1>Thank you, {$name} for your order.</h1>
    <h6>Email: {$email}</h6>
    <h6>Address:
    <h6>Street: {$street}</h6>
    <h6>City: {$city}</h6>
    <h6>State: {$state}</h6>
    <h6>Zip: {$zip}</h6>
    </h6>"
    ?>
</body>


</html>