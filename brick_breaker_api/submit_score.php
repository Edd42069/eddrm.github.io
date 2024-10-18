<?php
include 'db.php';

$user_id = $_POST['user_id'];
$score = $_POST['score'];

$sql = "INSERT INTO scores (user_id, score) VALUES ('$user_id', '$score')";

if ($conn->query($sql) === TRUE) {
    echo "Score submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>