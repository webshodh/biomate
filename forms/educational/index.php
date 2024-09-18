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
        <div class="progress-step progress-step-active" data-title="Edu & Career">5</div>
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
              name="degree"
              class="input"
              placeholder="Degree"
            />
            <input
              type="text"
              name="college_name"
              class="input"
              placeholder="College Name"
            />

            <input
              type="text"
              name="company_name"
              class="input"
              placeholder="Company Name"
            />

            <input
              type="text"
              name="desigantion"
              class="input"
              placeholder="Desigantion"
            />
            <select name="package_range" class="input">
                <option value="" disabled selected>Select Package Range</option>
                <option value="2_4">2-4 Lakh</option>
                <option value="4_7">4-7 Lakh</option>
                <option value="7_10">7-10 Lakh</option>
                <option value="10_15">10-15 Lakh</option>
                <option value="15_20">15-20 Lakh</option>
                <option value="20_25">20-25 Lakh</option>
                <option value="25_30">25-30 Lakh</option>
                <option value="30_plus">30+ Lakh</option>
              </select>

              <select name="family_income" class="input">
                <option value="" disabled selected>Select Family Income</option>
                <option value="3_5_lakh">3-5 Lakh</option>
                <option value="5_7_lakh">5-7 Lakh</option>
                <option value="7_10_lakh">7-10 Lakh</option>
                <option value="10_15_lakh">10-15 Lakh</option>
                <option value="15_20_lakh">15-20 Lakh</option>
                <option value="20_30_lakh">20-30 Lakh</option>
                <option value="30_plus_lakh">30+ Lakh</option>
              </select>
              
          </form>
        </div>

        <button class="submit-btn" type="submit">Next</button>
      </div>
    </div>
  </body>
</html>
