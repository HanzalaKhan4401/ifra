<?php

include('connection.php');


// Database connection
// $db = new mysqli('localhost', 'root', ' ', 'care');
// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }

// Get user input
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$city = $_POST['city'];
$Speciality = $_POST['speciality'];


// Check if the username is already taken
$check_query = "SELECT id FROM doctors WHERE email' = '$email'";
$run_email = mysqli_query($connection,$check_query);
if(mysqli_num_rows($run_email)> 0){

}
$stmt = $db->prepare($check_query);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
        header("Location: doc_signup.php?error=1");

    // Insert new admin
    $insert_query = "INSERT INTO `doctors` (`name`, `email`, `password`, `city`, `specialty`) VALUES ('$username', '$email', '$password', '$city', '$Speciality')";
    $connect_insert = mysqli_query($connection,$insert_query);
    $stmt = $db->prepare($insert_query);
    $stmt->bind_param("ss", $username, $email, $password, $city, $Speciality);
    $stmt->execute();
    header("Location: login.php");}

$stmt->close();
$db->close();
?>










