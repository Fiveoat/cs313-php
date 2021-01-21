<?php
session_start();

foreach ($_SESSION['cart'] as $id){
    if($id == $_GET['id']){
      unset($_SESSION['cart'][$_GET['id']]);
    }
  }
header("location: shopping_cart.php");
?>
