<?php
include('connection.php');
include('header.php');



session_start();

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check admin credentials
$query = "SELECT id FROM 'admin' WHERE email= '$email' AND password= '$password'";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($admin_id);

if ($stmt->num_rows == 1) {
    // Successful login
    $_SESSION['admin_id'] = $admin_id;
    header("Location: admin_dashboard.php");
} else {
    // Invalid credentials
    header("Location: login.php?error=1");
}

$stmt->close();
$db->close();
?>
