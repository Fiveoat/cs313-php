<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
$user_id = (int) $_SESSION['user_id'];
$home_id = (int) $_GET['home_id'];
echo $home_id;
echo $user_id;
$db = getConnection();
$statement= $db->prepare("UPDATE bookings SET booked =? WHERE home_id =? AND renter =?");
$statement->execute(array(0, $home_id, $user_id));
// header("location: account.php");
?>