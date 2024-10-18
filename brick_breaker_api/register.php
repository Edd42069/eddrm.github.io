<?php
include 'db.php';

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";

if ($conn->query($sql) === TRUE) {
    echo "New user registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
