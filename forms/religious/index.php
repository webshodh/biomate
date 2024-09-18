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
          <form id="signupForm" method="POST" action="./religion.php">
          <input type="text" name="religion" class="input" placeholder="religion" />
          <input type="text" name="cast" class="input" placeholder="cast">
		  <input type="text" name="languages" class="input" placeholder="language" />
          
          
        </div>
        <button class="submit-btn" type="submit" >Next</button>
      </form>
       
      </div>
</body>
</html>