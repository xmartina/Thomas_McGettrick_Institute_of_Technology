<?php
include_once ('config.php');
//General Settings
$sql = "SELECT * FROM general_settings"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$site_name = $row["site_name"];
$site_dec = $row["site_dec"];
$logo = $row["logo"];
$favicon = $row["favicon"];
$footer_dec = $row["footer_dec"];