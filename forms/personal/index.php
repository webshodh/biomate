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
          <form id="signupForm" method="POST" action="./personal.php">
          <input type="text" name="first_name" class="input" placeholder="First Name" />
          <input type="text" name="last_name" class="input" placeholder="Last name">
		  <input type="text" name="gender" class="input" placeholder="gender" />
          <input type="text" name="bloodgroup" class="input" placeholder="bloodgroup">
		  <input type="text" name="complexion" class="input" placeholder="complexion" />
          <input type="text" name="height" class="input" placeholder="height">
		  <input type="text" name="weight" class="input" placeholder="weight" />
          <input type="text" name="location" class="input" placeholder="location">
          
        </div>
        <button class="submit-btn" type="submit" >Next</button>
      </form>
       
      </div>
</body>
</html>