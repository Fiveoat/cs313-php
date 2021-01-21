<?php
foreach ($_POST as $x){
    echo "x".$x;
}
session_start();
if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
} else{
    foreach ($_SESSION["cart"] as $x){
        echo "y".$x;
    }
}
// header("location: store.php");
?>
