<?php
foreach ($_POST as $x){
    foreach($x as $wtf){
        echo "ugh".$wtf;
        array_push($_SESSION["cart"], $wtf);
    }
    echo "x".$x;
    array_push($_SESSION["cart"], 420, "TACOs");
    // header("location: store.php");
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
