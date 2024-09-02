<?php
include_once($rootDir.'include/config.php');
//General Settings
$sql = "SELECT * FROM external_pages WHERE id = 1"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//$dpt_id = $row["department_id"];
