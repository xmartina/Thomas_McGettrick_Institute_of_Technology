<?php
// Your SQL query to fetch all records from the e_book table
$sql = "SELECT * FROM students"; // Adjust the table name if different
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
// Loop through each row in the result set
while ($row = $result->fetch_assoc()) {
// Extract the data from the current row
$bookId = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$reg_no = $row['reg_no'];
$student_dpt = $row['dpt_id'];
$student_img = $row['img'];
$gender = $row['gender'];

$full_name = $fname.' '.$lname;
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
if($student_img == ''){
    $student_img = 'default.png';
}

if($gender == 1){
    $gender = 'male';
}elseif($gender == 2){
    $gender = 'female';
}
?>

<div class="d-flex align-items-center justify-content-between gap-3 mb-32">
    <div class="d-flex align-items-center">
        <img src="<?=$siteUrl?>cms/assets/added/img/student/<?=$student_img?>" alt="<?=$full_name?>"
             class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
        <div class="flex-grow-1">
            <h6 class="text-md mb-0"><?=$full_name?></h6>
            <span class="text-sm text-secondary-light fw-medium"><?=$student_dpt?></span>
        </div>
    </div>
    <span class="text-primary-light text-md fw-medium"><?=$gender?></span>
</div>

    <?php
}
} else {
    echo "No records found.";
}
?>