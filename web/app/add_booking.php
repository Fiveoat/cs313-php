<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
if (isset($_SESSION['user_id'])){
    $user_id = (int) $_SESSION['user_id'];
$home_id = (int) $_POST['home_id'];
$duration = (int) $_POST['duration'];
echo $home_id."\n";
echo $duration."\n";
echo $user_id."\n";
$db = getConnection();
$statement = $db->prepare("INSERT INTO bookings (renter, home_id, booked, duration) VALUES (?, ?, ?, ?)");
$statement->execute(array($user_id, $home_id, 1,$duration));
header("location: account.php");
} else {
    header("location: sign_in.php");
}
?>