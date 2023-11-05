<?php
include("php/connection.php");
include("php/jsfun.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.min.css">
  <link rel="icon" href="img/favicon.ico">
  <title>VIT CLUBS| Login</title>
</head>
<body>
  <div class="landing">
    <div class="landing-decoration"></div>
    <div class="landing-info" style="margin-left: -5%;">
      <div class="logo">
        <!-- <svg class="icon-logo-VIT Clubs">
          <use xlink:href="#svg-logo-VIT Clubs"></use>
        </svg> -->
      </div>
      <h2 class="landing-info-pretitle">Welcome to</h2>
      <h1 class="landing-info-title">VIT Clubs</h1>
      <p class="landing-info-text">The next generation club network &amp; community! Explore and join various VIT
        Chennai clubs that make our college vibrant and exciting.</p>
      <div class="tab-switch">
        <p class="tab-switch-button login-register-form-trigger">Login</p>
        <p class="tab-switch-button login-register-form-trigger">Register</p>
      </div>
    </div>
    <div class="landing-form">
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration overflowing" src="img/landing/rocket.png" alt="rocket">
        <h2 class="form-box-title">Account Login</h2>
        <form class="form" method="post" action="">
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-username">Username or Email</label>
                <input type="text" id="login-username" name="login_username">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="login_password">
              </div>
            </div>
          </div>
          <div class="form-row space-between">
            <div class="form-item">
              <div class="checkbox-wrap">
                <input type="checkbox" id="login-remember" name="login_remember" checked>
                <div class="checkbox-box">
                  <svg class="icon-cross">
                    <use xlink:href="#svg-check"></use>
                  </svg>
                </div>
                <label for="login-remember">Remember Me</label>
              </div>
            </div>
            <div class="form-item">
              <a class="form-link" href="#">Forgot Password?</a>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <button class="button medium secondary" name="login">Login to your Account!</button>
            </div>
          </div>
        </form>
        <?php
        #
        if (isset($_POST['login'])) {
          userlogin();
          unset($_POST['login']);
        }
        function userlogin()
        {
          global $conn;
          if (isset($_POST['login_username'])) {
            $name = mysqli_real_escape_string($conn, $_POST['login_username']);
            $pass = sha1(mysqli_real_escape_string($conn, $_POST['login_password']));
            $sql = "select * from user where email='$name' and password='$pass'";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
              _alert("Invalid Credentials!");
            }
            if (mysqli_num_rows($result) > 0) {
              $_SESSION['name'] = $name;
              _redirect("home.php");
            } else {
              _alert("Failed");
            }
          }
        }
        ?>
        <p class="lined-text">Login with your Social Account</p>
        <div class="social-links">
          <a class="social-link google" href="#">
            <svg class="icon-google">
              <use xlink:href="#svg-google"></use>
            </svg>
          </a>
          <a class="social-link facebook" href="#">
            <svg class="icon-facebook">
              <use xlink:href="#svg-facebook"></use>
            </svg>
          </a>
        </div>
      </div>
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration" src="img/landing/rocket.png" alt="rocket">
        <h2 class="form-box-title">Create your Account!</h2>
        <form class="form" action="php/regis.php" method="post">
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-email">Your Email</label>
                <input type="text" pattern="[A-Za-z0-9]+@vitstudent\.ac\.in" id="register-email" name="register_email"
                  required>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-username">Username</label>
                <input type="text" id="register-username" name="register_username" required>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="register_password">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="register-password-repeat">Repeat Password</label>
                <input type="password" id="register-password-repeat" name="register_password_repeat">
                <div id="password-match-message" style="color: red;"></div>
              </div>
            </div>
          </div>
          <div class="form-row">
          <label for="interests">
                <h6>Choose your Interests</h6>
              </label>
            <div class="form-item" style="display: flex; flex-wrap: nowrap; justify-content: space-between;">
              <input type="checkbox" id="interest-photography" name="interests[]" value="photography">
              <label for="interest-photography">Photography</label>
              <input type="checkbox" id="interest-animation" name="interests[]" value="animation">
              <label for="interest-animation">Animation</label>
              <input type="checkbox" id="interest-designing" name="interests[]" value="designing">
              <label for="interest-designing">Designing</label>
              <input type="checkbox" id="interest-dancing" name="interests[]" value="dancing">
              <label for="interest-dancing">Dancing</label>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="checkbox-wrap">
                <input type="checkbox" id="register-newsletter" name="register_newsletter" checked>
                <div class="checkbox-box">
                  <svg class="icon-cross">
                    <use xlink:href="#svg-check"></use>
                  </svg>
                </div>
                <label for "register-newsletter">Send me latest updates about VIT clubs</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <button class="button medium primary" id="register-button">Register Now!</button>
            </div>
          </div>
        </form>
        <script>
          const passwordInput = document.getElementById('register-password');
          const repeatPasswordInput = document.getElementById('register-password-repeat');
          const passwordMatchMessage = document.getElementById('password-match-message');
          const registerButton = document.getElementById('register-button');
          repeatPasswordInput.addEventListener('input', () => {
            if (passwordInput.value === repeatPasswordInput.value) {
              passwordMatchMessage.textContent = ''; // Clear the error message
              registerButton.disabled = false; // Enable the button
            } else {
              passwordMatchMessage.textContent = 'Passwords do not match!'; // Display error message
              passwordMatchMessage.style.color = 'red';
              registerButton.disabled = true; // Disable the button
            }
          });
        </script>
        <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your account. If you have any problems, <a href="#">contact us</a>!</p>
      </div>
    </div>
  </div>
  <script src="js/utils/app.js"></script>
  <script src="js/vendor/xm_plugins.min.js"></script>
  <script src="js/form/form.utils.js"></script>
  <script src="js/landing/landing.tabs.js"></script>
  <script src="js/utils/svg-loader.js"></script>
</body>
</html>