<?php
session_start();
$_SESSION['cart'] = array();
header("location: store.php");
?>
