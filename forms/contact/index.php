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
        <div class="progress-step progress-step-active" data-title="LifeStyle">
          6
        </div>
        <div class="progress-step progress-step-active" data-title="Contact">
          7
        </div>
        <div class="progress-step" data-title="Upload Photo">8</div>
      </div>

      <div class="signup">
        <!-- <h2 class="form-title" id="signup"><span>or</span>Sign up</h2> -->
        <div class="form-holder">
          <form id="signupForm" method="POST" action="./personal.php">
            <!-- Country -->

            <input
              type="text"
              id="country"
              name="country"
              class="input"
              placeholder="Country"
              required
            />

            <!-- State -->

            <input
              type="text"
              id="state"
              name="state"
              class="input"
              placeholder="State"
              required
            />

            <!-- District -->

            <input
              type="text"
              id="district"
              name="district"
              class="input"
              placeholder="District"
              required
            />

            <!-- Permanent Address -->

            <textarea
              id="permanent_address"
              name="permanent_address"
              class="input"
              placeholder="Permanent Address"
              rows="4"
              required
            ></textarea>

            <!-- Pincode -->

            <input
              type="text"
              id="pincode"
              name="pincode"
              class="input"
              placeholder="Pincode"
              required
            />

            <!-- Mobile Number -->

            <input
              type="tel"
              id="mobile_no"
              name="mobile_no"
              class="input"
              placeholder="Mobile Number"
              pattern="[0-9]{10}"
              required
            />

            <!-- Parent Mobile Number -->

            <input
              type="tel"
              id="parent_mobile_no"
              name="parent_mobile_no"
              class="input"
              placeholder="Parent Mobile Number"
              pattern="[0-9]{10}"
              required
            />
          </form>
        </div>

        <button class="submit-btn" type="submit">Next</button>
      </div>
    </div>
  </body>
</html>
