<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
if (isset($_SESSION['user_id'])){
$user_id = (int) $_SESSION['user_id'];
$home_id = (int) $_SESSION['home_id'];
$duration = (int) $_POST['duration'];
function book_home($home_id, $user_id, $duration){
         $db = getConnection();
         $statement = $db->prepare("UPDATE bookings SET renter=?, duration=?, booked=? WHERE home_id=?");
         $statement->execute(array($user_id, $duration, 1, $home_id));
     }
book_home($home_id, $user_id, $duration);
header("location: account_bookings.php");
} else {
    header("location: sign_in.php");
}
?>