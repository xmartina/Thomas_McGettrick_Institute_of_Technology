<?php
include_once($rootDir.'include/config.php');

if (!isset($conn)) {
    die("Database connection error.");
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $dpt_id = intval($_GET['id']); // Get the dpt_id from the URL and ensure it's an integer

    // Fetch the books from the e_book table using the dpt_id
    $sql = "SELECT id, book_name, book_link, book_type, book_cover, author FROM e_book WHERE dpt_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $dpt_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any books were found
    if ($result && $result->num_rows > 0) {
        $books = $result->fetch_all(MYSQLI_ASSOC); // Fetch all books as an associative array
    } else {
        echo "<div class='container'><p>No books found for this department.</p></div>";
        exit();
    }
} else {
    echo "<div class='container'><p>Invalid or missing department ID.</p></div>";
    exit();
}