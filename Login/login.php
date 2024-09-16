<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // SQL query to check for the user with the provided mobile number
    $sql = "SELECT * FROM users WHERE mobile = '$mobile'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Login successful
            echo "Login successful!";
            
            // Start a session or perform other login actions
            session_start();
            $_SESSION['user_id'] = $row['id']; // Example: storing the user ID
            $_SESSION['logged_in'] = true;
            header("Location: ../home/index.php");
            exit(); // Always exit after using header to prevent further code execution
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "No user found with this mobile number!";
    }
}
?>
