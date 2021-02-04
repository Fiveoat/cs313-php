<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/app/connection.php';
$user_id = (int) $_SESSION['user_id'];
$db = getConnection();
$points = (int)$_POST['select'];
$statement= $db->prepare("UPDATE users SET points =?");
$statement->execute(array($points));
?>