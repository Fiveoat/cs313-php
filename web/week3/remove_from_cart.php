<?php
session_start();
if (($key = array_search($_GET['id'], $array)) !== false) {
    unset($array[$key]);
}
header("location: shopping_cart.php");
?>
