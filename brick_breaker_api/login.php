<?php
include 'db.php';

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$sql = "SELECT * FROM users WHERE user_email = '$user_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($user_password, $row['user_password'])) {
        echo "Login successful";
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found";
}

$conn->close();
?>
