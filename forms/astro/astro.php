<?php
session_start();
include '../../Login/config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve phone number from session
    $phone_number = $_SESSION['mobile'];



    // Retrieve form data from the personal details form
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $tob = $_POST['tob'];
    $rashi = $_POST['rashi'];
    $nakshatra = $_POST['nakshatra'];
    $gotra = $_POST['gotra'];
    
    
    // SQL query to insert data into personal_details table
    $sql = "INSERT INTO astro (phone_number,dob,pob,tob,rashi,nakshatra,gotra)
     VALUES ('$phone_number','$dob','$pob','$tob','$rashi','$nakshatra','$gotra')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the next form page (religious details)
        header("Location: ../family/family.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
