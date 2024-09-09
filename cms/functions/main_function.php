<?php
include_once($rootDir.'include/config.php');
// General Settings
$sql = "SELECT * FROM external_pages WHERE id = 1"; // Adjust the table name if different
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row data
    $row = $result->fetch_assoc();

    // Example of using the fetched data
    $dpt_id = $row["department_id"]; // Adjust the column name as per your database schema
    echo "Department ID: " . $dpt_id; // Display the department ID

    // You can add more code here to utilize the fetched data
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();