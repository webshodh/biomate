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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="form-structor">
      <div class="progressbar">
        <!-- <div class="progress" id="progress"></div> -->
        <div class="progress-step progress-step-active" data-title="Personal">
          1
        </div>
        <div class="progress-step" data-title="Religious">2</div>
        <div class="progress-step" data-title="Astro">3</div>
        <div class="progress-step" data-title="Family">4</div>
        <div class="progress-step" data-title="Edu & Career">5</div>
        <div class="progress-step" data-title="LifeStyle">6</div>
        <div class="progress-step" data-title="Contact">7</div>
        <div class="progress-step" data-title="Upload Photo">8</div>
      </div>

      <div class="signup">
        <!-- <h2 class="form-title" id="signup"><span>or</span>Sign up</h2> -->
        <div class="form-holder">
          <form id="signupForm" method="POST" action="./personal.php">
            <input
              type="text"
              name="first_name"
              class="input"
              placeholder="First Name"
            />
            <input
              type="text"
              name="last_name"
              class="input"
              placeholder="Last name"
            />
            <select name="gender" class="input">
              <option value="" disabled selected>Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
              <option value="prefer_not_to_say">Prefer not to say</option>
            </select>

            <select name="bloodgroup" class="input">
              <option value="" disabled selected>Select Blood Group</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>

            <select name="complexion" class="input">
              <option value="" disabled selected>Select Complexion</option>
              <option value="fair">Fair</option>
              <option value="wheatish">Wheatish</option>
              <option value="dusky">Dusky</option>
              <option value="dark">Dark</option>
            </select>

            <select name="height" class="input">
              <option value="" disabled selected>Select Height</option>
              <!-- Heights from 4'5" to 7' -->
              <option value="4'5">4'5"</option>
              <option value="4'6">4'6"</option>
              <option value="4'7">4'7"</option>
              <option value="4'8">4'8"</option>
              <option value="4'9">4'9"</option>
              <option value="4'10">4'10"</option>
              <option value="4'11">4'11"</option>
              <option value="5'0">5'0"</option>
              <option value="5'1">5'1"</option>
              <option value="5'2">5'2"</option>
              <option value="5'3">5'3"</option>
              <option value="5'4">5'4"</option>
              <option value="5'5">5'5"</option>
              <option value="5'6">5'6"</option>
              <option value="5'7">5'7"</option>
              <option value="5'8">5'8"</option>
              <option value="5'9">5'9"</option>
              <option value="5'10">5'10"</option>
              <option value="5'11">5'11"</option>
              <option value="6'0">6'0"</option>
              <option value="6'1">6'1"</option>
              <option value="6'2">6'2"</option>
              <option value="6'3">6'3"</option>
              <option value="6'4">6'4"</option>
              <option value="6'5">6'5"</option>
              <option value="6'6">6'6"</option>
              <option value="6'7">6'7"</option>
              <option value="6'8">6'8"</option>
              <option value="6'9">6'9"</option>
              <option value="6'10">6'10"</option>
              <option value="6'11">6'11"</option>
              <option value="7'0">7'0"</option>
            </select>

            <input
              type="text"
              name="weight"
              class="input"
              placeholder="weight"
            />
          </form>
        </div>

        <button class="submit-btn" type="submit">Next</button>
      </div>
    </div>
  </body>
</html>
