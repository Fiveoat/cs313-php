<?php
session_start();
echo $_GET['id'];
if (($key = array_search($_GET['id'], $_SESSION['cart'])) !== false) {
    echo "REOMVED";
    unset($_SESSION['cart'][$key]);
} else {
    echo "KPET";
}

// header("location: shopping_cart.php");
?>
