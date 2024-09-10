<?php
include_once($rootDir.'include/config.php');

if (!isset($conn)) {
    die("Database connection error.");
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $dpt_id = intval($_GET['id']); // Get the dpt_id from the URL and ensure it's an integer

    // Fetch the department name using the dpt_id
    $dept_sql = "SELECT dep_name FROM departments WHERE id = ?";
    $dept_stmt = $conn->prepare($dept_sql);
    $dept_stmt->bind_param("i", $dpt_id);
    $dept_stmt->execute();
    $dept_result = $dept_stmt->get_result();

    // Check if the department exists
    if ($dept_result && $dept_result->num_rows > 0) {
        $dept = $dept_result->fetch_assoc();
        $department_name = $dept['dep_name'];
    } else {
        echo "<div class='container'><p>Invalid or missing department ID.</p></div>";
        exit();
    }

    // Fetch the books from the e_book table using the dpt_id
    $sql = "SELECT id, book_name, book_link, book_type, book_cover, author FROM e_book WHERE dpt_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $dpt_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any books were found
    if ($result && $result->num_rows > 0) {
        // Data is fetched in the while loop below
    } else {
        echo "<div class='container'><p>No books found for this department.</p></div>";
        exit();
    }
} else {
    echo "<div class='container'><p>Invalid or missing department ID.</p></div>";
    exit();
}
?>
