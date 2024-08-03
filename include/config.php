<?php
include_once ('db_connect.php');
$sql = "SELECT username, user_email FROM users"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();