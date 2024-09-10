<?php
include_once($rootDir.'include/config.php');

// Ensure database connection is available
if (!isset($conn)) {
    die("Database connection error.");
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $book_id = intval($_GET['id']); // Get the book_id from the URL and ensure it's an integer

    // Fetch the department/book from the database using the book_id
    $sql = "SELECT book_id, dep_name FROM departments WHERE book_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $book_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching department was found
    if ($result && $result->num_rows > 0) {
        $department = $result->fetch_assoc();
        $dep_name = htmlspecialchars($department['dep_name']); // Sanitize the department name
    } else {
        echo "Department not found.";
        exit();
    }
} else {
    echo "Invalid or missing book ID.";
    exit();
}
?>
