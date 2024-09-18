<?php
session_start();
include '../../Login/config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve phone number from session
    $phone_number = $_SESSION['mobile'];
    
    // Retrieve form data from the personal details form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bloodgroup'];
    $complexion = $_POST['complexion'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $location = $_POST['location'];
    
    // SQL query to insert data into personal_details table
    $sql = "INSERT INTO personal_details (phone_number, first_name, last_name, gender, 
    bloodgroup, complexion, height, weight, location) VALUES ('$phone_number','$first_name',
    '$last_name','$gender','$bloodgroup','$complexion','$height','$weight','$location')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the next form page (religious details)
        header("Location: ../religious/index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
