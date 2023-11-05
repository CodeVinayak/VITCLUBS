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
  <!-- bootstrap 4.3.1 -->
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <!-- styles -->
  <link rel="stylesheet" href="css/styles.min.css">
  <!-- favicon -->
  <link rel="icon" href="img/favicon.ico">
  <title>VIT CLUBS| Home</title>
</head>

<body>

  <!-- LANDING -->
  <div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->
    <div class="landing-info">
      <!-- LOGO -->
      <div class="logo">
        <!-- ICON LOGO VIT CLUBS-->
        <svg class="icon-logo-VIT Clubs">
          <use xlink:href="#svg-logo-VIT Clubs"></use>
        </svg>
        <!-- /ICON LOGO VIT CLUBS-->
      </div>
      <!-- /LOGO -->

      <!-- LANDING INFO PRETITLE -->
      <h2 class="landing-info-pretitle">Welcome to</h2>
      <!-- /LANDING INFO PRETITLE -->

      <!-- LANDING INFO TITLE -->
      <h1 class="landing-info-title">VIT Clubs</h1>
      <!-- /LANDING INFO TITLE -->

      <!-- LANDING INFO TEXT -->
      <p class="landing-info-text">The next generation club network &amp; community! Explore and join various VIT
        Chennai clubs that make our college vibrant and exciting.</p>
      <!-- /LANDING INFO TEXT -->

      <!-- TAB SWITCH -->
      <div class="tab-switch">
        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">Login</p>
        <!-- /TAB SWITCH BUTTON -->

        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">Register</p>
        <!-- /TAB SWITCH BUTTON -->
      </div>
      <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    <!-- LANDING FORM -->
    <div class="landing-form">
      <!-- FORM BOX -->
      <div class="form-box login-register-form-element">
        <!-- FORM BOX DECORATION -->
        <img class="form-box-decoration overflowing" src="img/landing/rocket.png" alt="rocket">
        <!-- /FORM BOX DECORATION -->

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Account Login</h2>
        <!-- /FORM BOX TITLE -->

        <!-- FORM -->
        <form class="form" method="post" action="">
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="login-username">Username or Email</label>
                <input type="text" id="login-username" name="login_username">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="login_password">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row space-between">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- CHECKBOX WRAP -->
              <div class="checkbox-wrap">
                <input type="checkbox" id="login-remember" name="login_remember" checked>
                <!-- CHECKBOX BOX -->
                <div class="checkbox-box">
                  <!-- ICON CROSS -->
                  <svg class="icon-cross">
                    <use xlink:href="#svg-check"></use>
                  </svg>
                  <!-- /ICON CROSS -->
                </div>
                <!-- /CHECKBOX BOX -->
                <label for="login-remember">Remember Me</label>
              </div>
              <!-- /CHECKBOX WRAP -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM LINK -->
              <a class="form-link" href="#">Forgot Password?</a>
              <!-- /FORM LINK -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- BUTTON -->
              <button class="button medium secondary" name="login">Login to your Account!</button>
              <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->

        <?php
        #
        if (isset($_POST['login'])) {
          userlogin();
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
              $_SESSION['name']=$name;
              _redirect("home.php");
            } else {
              _alert("Failed");
            }
          } 
        }

        ?>
        <!-- LINED TEXT -->
        <p class="lined-text">Login with your Social Account</p>
        <!-- /LINED TEXT -->

        <!-- SOCIAL LINKS -->
        <div class="social-links">
          <!-- SOCIAL LINK -->
          <a class="social-link google" href="#">
            <!-- ICON TWITTER -->
            <svg class="icon-google">
              <use xlink:href="#svg-google"></use>
            </svg>
            <!-- /ICON TWITTER -->
          </a>
          <!-- /SOCIAL LINK -->
          <a class="social-link facebook" href="#">
            <!-- ICON FACEBOOK -->
            <svg class="icon-facebook">
              <use xlink:href="#svg-facebook"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->



        </div>
        <!-- /SOCIAL LINKS -->
      </div>
      <!-- /FORM BOX -->

      <!-- FORM BOX -->
      <div class="form-box login-register-form-element">
        <!-- FORM BOX DECORATION -->
        <img class="form-box-decoration" src="img/landing/rocket.png" alt="rocket">
        <!-- /FORM BOX DECORATION -->

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Create your Account!</h2>
        <!-- /FORM BOX TITLE -->

        <!-- FORM -->
        <form class="form" action="php/regis.php" method="post">
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
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
              <!-- BUTTON -->
              <button class="button medium primary" id="register-button">Register Now!</button>
              <!-- /BUTTON -->
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

        <!-- FORM TEXT -->
        <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your account. If
          you have any problems, <a href="#">contact us</a>!</p>
        <!-- /FORM TEXT -->

      </div>
      <!-- /FORM BOX -->
    </div>
    <!-- /LANDING FORM -->
  </div>
  <!-- /LANDING -->

  <!-- app -->
  <script src="js/utils/app.js"></script>
  <!-- XM_Plugins -->
  <script src="js/vendor/xm_plugins.min.js"></script>
  <!-- form.utils -->
  <script src="js/form/form.utils.js"></script>
  <!-- landing.tabs -->
  <script src="js/landing/landing.tabs.js"></script>
  <!-- SVG icons -->
  <script src="js/utils/svg-loader.js"></script>
</body>

</html>