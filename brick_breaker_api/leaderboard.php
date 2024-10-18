<?php
include 'db.php';

$sql = "SELECT users.user_name, scores.score FROM scores JOIN users ON scores.user_id = users.user_id ORDER BY scores.score DESC LIMIT 10";
$result = $conn->query($sql);

$leaderboard = array();
while($row = $result->fetch_assoc()) {
    $leaderboard[] = $row;
}

echo json_encode($leaderboard);

$conn->close();
?>
