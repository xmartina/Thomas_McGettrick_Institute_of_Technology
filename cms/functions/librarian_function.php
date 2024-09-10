<?php
session_start();
include_once($rootDir . 'cms/functions/main_function.php');
include_once($rootDir . 'cms/functions/login_function.php');

if (!isset($conn)) {
    die("Database connection error.");
}

$sql = "SELECT * FROM students"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$student_id = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$reg_no = $row['reg_no'];
$student_dpt = $row['dpt_id'];
$student_img = $row['img'];
$gender = $row['gender'];

$full_name = $fname . ' ' . $lname;
switch ($student_dpt) {
    case 1:
        $student_dpt = 'Electrical/Electronics Engineering';
        break;
    case 2:
        $student_dpt = 'Computer Engineering';
        break;
    case 3:
        $student_dpt = 'Computer Science';
        break;
    case 4:
        $student_dpt = 'Statistics';
        break;
    case 5:
        $student_dpt = 'Health Information Management';
        break;
    case 6:
        $student_dpt = 'Pharmaceutical Technology';
        break;
    case 7:
        $student_dpt = 'Community/Public Health';
        break;
    case 8:
        $student_dpt = 'Medical Laboratory Science';
        break;
    case 9:
        $student_dpt = 'Accountancy';
        break;
    case 10:
        $student_dpt = 'Business Administration';
        break;
    case 11:
        $student_dpt = 'Public Administration';
        break;
    default:
        $student_dpt = 'Unknown Department'; // Handle any unexpected department ID
        break;
}
if ($student_img == '') {
    $student_img = 'default.png';
}

if ($gender == 1) {
    $gender = 'male';
} elseif ($gender == 2) {
    $gender = 'female';
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    // Get form data
    $book_name = $_POST['book_name'];
    $book_type = $_POST['book_type'];
    $dpt_id = $_POST['dpt_id'];
    $author = $_POST['author'];
    $book_link = null;
    $book_cover = null;

    if ($book_type == '1') { // If book type is PDF
        if (isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] == 0) {
            $pdf_dir = $rootDir . 'front_added/pdf/'; // Directory on the server
            $pdf_link = $siteUrl . 'front_added/pdf/'; // URL to access the file
            $pdf_name = basename($_FILES['pdf_file']['name']);
            $pdf_path = $pdf_dir . $pdf_name; // Full server path

            if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_path)) {
                $book_link = $pdf_link . $pdf_name; // Store URL in the database
            } else {
                header('Location: /cms/librarian/add_book?msg=error_uploading_pdf');
                exit();
            }
        } else {
            header('Location: /cms/librarian/add_book?msg=pdf_required');
            exit();
        }
    } elseif ($book_type == '2') { // If book type is Link
        $book_link = $_POST['book_link']; // Directly store the link provided
    }

// Handle Book Cover Upload
    if (isset($_FILES['book_cover']) && $_FILES['book_cover']['error'] == 0) {
        $cover_dir = $rootDir . 'front_added/pdf/cover/'; // Directory on the server
        $cover_link = $siteUrl . 'front_added/pdf/cover/'; // URL to access the file
        $cover_name = basename($_FILES['book_cover']['name']);
        $cover_path = $cover_dir . $cover_name; // Full server path

        if (move_uploaded_file($_FILES['book_cover']['tmp_name'], $cover_path)) {
            $book_cover = $cover_link . $cover_name; // Store URL in the database
        } else {
            header('Location: /cms/librarian/add_book?msg=error_uploading_cover');
            exit();
        }
    } else {
        header('Location: /cms/librarian/add_book?msg=cover_required');
        exit();
    }

    // Prepare and execute SQL query to insert data
    $sql = "INSERT INTO e_book (book_name, book_link, book_type, dpt_id, book_cover, author) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisss", $book_name, $book_link, $book_type, $dpt_id, $book_cover, $author);

    if ($stmt->execute()) {
        header('Location: /cms/librarian/add_book?msg=book_added_successfully');
        exit();
    } else {
        header('Location: /cms/librarian/add_book?msg=error_adding_book');
        exit();
    }

    $stmt->close();
    $conn->close();
}