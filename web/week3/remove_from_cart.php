<?php
session_start();
echo $_GET['id'];
if (($key = array_search($_GET['id'], $array)) !== false) {
    echo "REOMVED";
    unset($array[$key]);
} else {
    echo "KPET";
}

// header("location: shopping_cart.php");
?>
