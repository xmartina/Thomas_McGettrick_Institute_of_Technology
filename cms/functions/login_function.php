<?php

include_once($rootDir . 'cms/functions/main_function.php');

// Ensure database connection is available
if (!isset($conn)) {
    die("Database connection error.");
}

$error = ''; // Initialize an empty error message

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    // Fetch and sanitize user inputs
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Prepare SQL query to check the user's credentials
    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the user exists
        if ($result && $result->num_rows == 1) {
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
            }
        } else {
            $error = "No user found with that email.";
        }

        $stmt->close(); // Close the statement
    } else {
        $error = "Failed to prepare the SQL statement.";
    }
}
?>
