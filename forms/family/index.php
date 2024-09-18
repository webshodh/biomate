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
              name="fathers_name"
              class="input"
              placeholder="Father's Name"
            />
            <input
              type="text"
              name="mothers_name"
              class="input"
              placeholder="Mother's Name"
            />
            <select name="fathers_occupation" class="input">
              <option value="" disabled selected>
                Select Father's Occupation
              </option>
              <option value="business">Business</option>
              <option value="farmer">Farmer</option>
              <option value="government_employee">Government Employee</option>
              <option value="self_employed">Private-Employed</option>
              <option value="retired">Retired</option>
              <option value="other">Other</option>
              <option value="prefer_not_to_say">Prefer not to say</option>
            </select>

            <select name="mothers_occupation" class="input">
              <option value="" disabled selected>
                Select Mother's Occupation
              </option>
              <option value="business">Business</option>
              <option value="farmer">Farmer</option>
              <option value="government_employee">Government Employee</option>
              <option value="self_employed">Self-Employed</option>
              <option value="retired">Retired</option>
              <option value="housewife">Housewife</option>
              <option value="other">Other</option>
              <option value="prefer_not_to_say">Prefer not to say</option>
            </select>

            <select name="no_of_brothers" class="input">
              <option value="" disabled selected>Select No Of Brothers</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="more_than_10">More than 5</option>
            </select>

            <select name="no_of_sisters" class="input">
              <option value="" disabled selected>Select No Of Sisters</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="more_than_10">More than 5</option>
            </select>
          </form>
        </div>

        <button class="submit-btn" type="submit">Next</button>
      </div>
    </div>
  </body>
</html>
