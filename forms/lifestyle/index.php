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
        <div class="progress-step progress-step-active" data-title="Religious">
          2
        </div>
        <div class="progress-step progress-step-active" data-title="Astro">
          3
        </div>
        <div class="progress-step progress-step-active" data-title="Family">
          4
        </div>
        <div
          class="progress-step progress-step-active"
          data-title="Edu & Career"
        >
          5
        </div>
        <div class="progress-step progress-step-active" data-title="LifeStyle">6</div>
        <div class="progress-step" data-title="Contact">7</div>
        <div class="progress-step" data-title="Upload Photo">8</div>
      </div>

      <div class="signup">
        <!-- <h2 class="form-title" id="signup"><span>or</span>Sign up</h2> -->
        <div class="form-holder">
          <form id="signupForm" method="POST" action="./personal.php">
            <select name="diet" class="input">
                <option value="" disabled selected>Select Diet</option>
                <option value="veg">Vegetarian</option>
                <option value="egg">Eggiterian</option>
                <option value="non_veg">Non-Vegetarian</option>
                <option value="vegan">Vegan</option>
                <option value="other">Other</option>
                <option value="prefer_not_to_say">Prefer not to say</option>
              </select>

              <select name="drinking" class="input">
                <option value="" disabled selected>Select Drinking Habit</option>
                <option value="regularly">Regularly</option>
                <option value="occasionally">Occasionally</option>
                <option value="never">Never</option>
                <option value="prefer_not_to_say">Prefer not to say</option>
              </select>

              <select name="smoking" class="input">
                <option value="" disabled selected>Select Smoking Habit</option>
                <option value="regularly">Regularly</option>
                <option value="occasionally">Occasionally</option>
                <option value="never">Never</option>
                <option value="prefer_not_to_say">Prefer not to say</option>
              </select>
              
          </form>
        </div>

        <button class="submit-btn" type="submit">Next</button>
      </div>
    </div>
  </body>
</html>
