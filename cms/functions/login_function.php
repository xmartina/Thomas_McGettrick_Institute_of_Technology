<?php
include_once ($rootDir.'cms/functions/main_function.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['login']) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to check the user's credentials
    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);
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
        }
    } else {
        $error = "No user found with that email.";
    }
}
