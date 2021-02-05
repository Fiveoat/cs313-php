<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
$user_id = (int) $_SESSION['user_id'];
$home_id = $_GET['home_id'];
$duration = $_GET['duration'];
function book_home($home_id, $user_id, $duration){
         $db = getConnection();
         $statement = $db->prepare("INSERT INTO bookings (renter, home_id, duration, booked) VALUES (?, ?, ?)");
         $statement->execute(array($user_id, $home_id, $duration, 1));
     }
book_home($home_id, $user_id, $duration);
header("location: account.php");
?>