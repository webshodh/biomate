<?php
session_start();
include '../../Login/config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve phone number from session
    $phone_number = $_SESSION['mobile'];
    
    // Retrieve form data from the personal details form
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $languages = $_POST['languages'];
    
    
    // SQL query to insert data into personal_details table
    $sql = "INSERT INTO religion_details (phone_number,religion,cast,languages) VALUES ('$phone_number','$religion','$cast',
    '$languages')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the next form page (religious details)
        header("Location: ../astro/index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
