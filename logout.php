<?php
session_start();
unset($_SESSION['user_name']);

session_destroy();

echo "<script>alert('Successfully logged out!!');</script>";
include('index.php');
//echo "<a href='index.php'/>TO continue shopping click here!!!</a>";
?>