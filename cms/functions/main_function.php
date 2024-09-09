<?php
$HomeDir = '/home/multistream6/domains/thomas.matagram.com/public_html/';
include_once($HomeDir.'include/config.php');
// General Settings
$sql = "SELECT * FROM general_settings"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$site_name = $row["site_name"];
$site_dec = $row["site_dec"];
$site_phone = $row["phone"];
$site_email = $row["email"];
$site_address = $row["address"];
$logo = $row["logo"];
$footer_logo = $row["footer_logo"];
$favicon = $row["favicon"];
$footer_dec = $row["footer_dec"];
$footer_copyright = $row["footer_copyright"];