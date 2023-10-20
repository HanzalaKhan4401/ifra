<?php
// Database connection
$db = new mysqli('localhost', 'root', '', 'care');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the username is already taken
$check_query = "SELECT id FROM admins WHERE email=?";
$stmt = $db->prepare($check_query);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    header("Location: signup.php?error=1");
} else {
    // Insert new admin
    $insert_query = "INSERT INTO admins (email, password) VALUES (?, ?)";
    $stmt = $db->prepare($insert_query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    header("Location: login.php");
}

$stmt->close();
$db->close();
?>









