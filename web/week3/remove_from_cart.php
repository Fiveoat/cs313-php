<?php
session_start();
echo $_GET['id'];
if (($key = array_search($_GET['id'], $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
}
header("location: shopping_cart.php");
?>
