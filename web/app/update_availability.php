<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
$user_id = (int) $_SESSION['user_id'];
$db = getConnection();
print_r($_GET);
if ($_GET['set'] == 1){
    $set = 1;
    echo 1;
} else {
    $set = 0;
    echo 0;
}
$statement= $db->prepare("UPDATE bookings SET booked =? WHERE owner =?");
$statement->execute(array($set, $user_id));
header("location: account.php");
?>