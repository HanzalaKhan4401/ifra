<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Display the admin dashboard
echo "Welcome to the Admin Dashboard!";
// Add your admin functionality here

// Logout link
echo '<a href="logout.php">Logout</a>';
?>
