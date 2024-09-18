<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // User is not logged in, redirect to login page
    header("Location: ../../Login/index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../../global.css" />
    <title>Astro Signup</title>
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
        <div class="progress-step" data-title="Family">4</div>
        <div class="progress-step" data-title="Edu & Career">5</div>
        <div class="progress-step" data-title="LifeStyle">6</div>
        <div class="progress-step" data-title="Contact">7</div>
        <div class="progress-step" data-title="Upload Photo">8</div>
      </div>
      <div class="signup">
        <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <div class="form-holder">
          <form id="signupForm" method="POST" action="./astro.php">
            <input
              type="date"
              name="dob"
              class="input"
              placeholder="Date of Birth"
              required
            />

            <input
              type="text"
              name="pob"
              class="input"
              placeholder="Place of Birth"
              required
            />
            <div style="display: flex">
              <input
                type="text"
                id="tob"
                name="tob"
                class="input"
                placeholder="hh:mm"
                required
              />

              <select id="ampm" name="ampm" class="input" required>
                <option value="" disabled selected>AM/PM</option>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
              </select>
            </div>

            <select name="rashi" class="input">
              <option value="" disabled selected>Select Rashi</option>
              <option value="mesha">Aries</option>
              <option value="vrishabha">Taurus</option>
              <option value="mithuna">Gemini</option>
              <option value="karka">Cancer</option>
              <option value="simha">Leo</option>
              <option value="kanya">Virgo</option>
              <option value="tula">Libra</option>
              <option value="vrishchika">Scorpio</option>
              <option value="dhanu">Sagittarius</option>
              <option value="makara">Capricorn</option>
              <option value="kumbha">Aquarius</option>
              <option value="meena">Pisces</option>
            </select>

            <select name="nakshatra" class="input">
              <option value="" disabled selected>Select Nakshatra</option>
              <option value="ashvini">Ashvini</option>
              <option value="bharani">Bharani</option>
              <option value="krittika">Krittika</option>
              <option value="rohini">Rohini</option>
              <option value="mrigasira">Mrigasira</option>
              <option value="ardra">Ardra</option>
              <option value="punarvasu">Punarvasu</option>
              <option value="pushya">Pushya</option>
              <option value="ashlesha">Ashlesha</option>
              <option value="magha">Magha</option>
              <option value="purvaphalguni">Purvaphalguni</option>
              <option value="uttaraphalguni">Uttaraphalguni</option>
              <option value="hasta">Hasta</option>
              <option value="chitra">Chitra</option>
              <option value="svati">Svati</option>
              <option value="visakha">Visakha</option>
              <option value="anuradha">Anuradha</option>
              <option value="jatak">Jyeshtha</option>
              <option value="moola">Moola</option>
              <option value="purvashadha">Purvashadha</option>
              <option value="uttarashadha">Uttarashadha</option>
              <option value="abhijit">Abhijit</option>
              <option value="shravana">Shravana</option>
              <option value="dhanishta">Dhanishta</option>
              <option value="shatabhisha">Shatabhisha</option>
              <option value="purvabhadra">Purvabhadra</option>
              <option value="uttarabhadra">Uttarabhadra</option>
              <option value="revati">Revati</option>
            </select>

            <input type="text" name="gotra" class="input" placeholder="Gotra" />
            <button class="submit-btn" type="submit">Next</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
