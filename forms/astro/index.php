<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // User is not logged in, redirect to login page
    header("Location: ../../Login/index.html");
    exit();
}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div class="form-structor">
      <div class="signup">
        <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <div class="form-holder">
          <form id="signupForm" method="POST" action="./astro.php">
          <input type="text" name="dob" class="input" placeholder="dob" />
          <input type="text" name="pob" class="input" placeholder="pob">
          <input type="text" name="tob" class="input" placeholder="tob">
          
		  <input type="text" name="rashi" class="input" placeholder="rashi" />
          <input type="text" name="nakshatra" class="input" placeholder="nakshatra">
		  <input type="text" name="gotra" class="input" placeholder="gotra" />

          
          
        </div>
        <button class="submit-btn" type="submit" >Next</button>
      </form>
       
      </div>
</body>
</html>

