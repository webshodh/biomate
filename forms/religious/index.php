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
      <!-- Progress Bar  -->
      <div class="progressbar">
        <!-- <div class="progress" id="progress"></div> -->
        <div class="progress-step progress-step-active" data-title="Personal">
          1
        </div>
        <div class="progress-step progress-step-active" data-title="Religious">
          2
        </div>
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
          <form id="signupForm" method="POST" action="./religion.php">
            <select name="religion" class="input">
              <option value="" disabled selected>Select Religion</option>
              <option value="hinduism">Hinduism</option>
              <option value="islam">Islam</option>
              <option value="christianity">Christianity</option>
              <option value="sikhism">Sikhism</option>
              <option value="buddhism">Buddhism</option>
              <option value="jainism">Jainism</option>
              <option value="zoroastrianism">Zoroastrianism</option>
              <option value="judaism">Judaism</option>
              <option value="other">Other</option>
              <option value="prefer_not_to_say">Prefer not to say</option>
            </select>
            
            <input type="text" name="cast" class="input" placeholder="Cast" />
            <input type="text" name="subcast" class="input" placeholder="Sub-Cast" />
            <input
              type="text"
              name="languages"
              class="input"
              placeholder="Mother Tongue"
            />
          </form>

          <button class="submit-btn" type="submit">Next</button>
        </div>
      </div>
    </div>
  </body>
</html>
