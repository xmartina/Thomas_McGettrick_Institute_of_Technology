<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$rootDir = '/home/multistream6/domains/thomas.matagram.com/public_html/';
include_once($rootDir . 'cms/functions/main_function.php'); // Make sure this includes the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to check the user's credentials
    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the user exists
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['pass'])) {
                // Store user information in session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['admin_id'] = $user['admin_id'];

                // Redirect based on admin_id
                if ($user['admin_id'] == 2) {
                    header('Location: /cms/liberian');
                    exit();
                } elseif ($user['admin_id'] == 1) {
                    header('Location: /cms/admin');
                    exit();
                } else {
                    header('Location: /dashboard'); // Default or fallback location
                    exit();
                }
            } else {
                $error = "Incorrect password.";
                echo $error; // Debugging output
            }
        } else {
            $error = "No user found with that email.";
            echo $error; // Debugging output
        }
    } else {
        // Output statement preparation error
        echo "Failed to prepare SQL statement.";
    }
}
?>
