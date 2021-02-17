<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
$user_id = (int) $_SESSION['user_id'];
$db = getConnection();
$statement= $db->prepare("UPDATE bookings SET booked =? WHERE user_id =?");
$statement->execute(array(0, $user_id));
header("location: account.php");
?>