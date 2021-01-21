<?php
foreach ($_POST as $x){
    echo "x".$x;
    header("location: store.php");
}
session_start();
if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
    echo "BOI SET".$_SESSION["cart"];
} else{
    foreach ($_SESSION["cart"] as $x){
        echo "y".$x;
    }
}
// 
?>
