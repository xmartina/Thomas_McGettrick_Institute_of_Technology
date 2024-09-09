<?php
// Your SQL query to fetch all records from the e_book table
$sql = "SELECT * FROM e_book"; // Adjust the table name if different
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
// Loop through each row in the result set
while ($row = $result->fetch_assoc()) {
// Extract the data from the current row
$bookId = $row['id'];
$bookName = $row['book_name'];
$bookLink = $row['book_link'];
$bookCover = $row['book_cover'];
$author = $row['author'];
?>

<div class="d-flex align-items-center justify-content-between gap-3 mb-32">
    <div class="d-flex align-items-center">
        <img src="assets/images/users/user1.png" alt=""
             class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
        <div class="flex-grow-1">
            <h6 class="text-md mb-0">Dianne Russell</h6>
            <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
        </div>
    </div>
    <span class="text-primary-light text-md fw-medium">60/80</span>
</div>

    <?php
}
} else {
    echo "No records found.";
}
?>