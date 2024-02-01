<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="../CSS/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <section id="header">
    <p class="logoText">Reservar <span>360 <i class="fa fa-light fa-location-arrow fa-shake"></i></span></p>
    <div>
      <button type="button" class="backButton" onclick="history.back()" >
        <i class="fa fa-duotone fa-arrow-left"></i>
        <a href="#"></a>
      </button>
    </div>
  </section>
  <section id="logInBox">
    <form action="../phpHandlers/dbh.login.php" method="POST">
      <div class="signInPart">
        <h3>Sign in</h3>
        <div class="inputBoxes">
          <input type="text" name="uname" id="email" autocomplete="off" placeholder="Username" class="input-text" /><br />
          <label class="label">Username</label>
          <input type="password" id="password" name="password" autocomplete="off" placeholder="Password" class="input-text2" /><br />
          <label class="label2">Password</label>
        </div>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="checkboxText">
          <label class="keepItSign">Keep me signed in
            <div class="border1">
              <input type="checkbox" />
              <span class="checkbox1"></span>
            </div>
          </label>
        </div>
      </div>
      <div class="bottomTextPart">
        <label class="agreement">
          I agree to the
          <a href="#" class="siteUnderline">Reservation.lk</a> site's
          <a href="#">Terms and Conditions</a>
          <br />
          <label class="nextLine">and <a href="#"> Privacy Statement</a></label>
          <div class="border2">
            <input type="checkbox" id="checkbox2" onclick="enableButton()" />
            <span class="checkbox2"></span>
          </div>
        </label>
      </div>
        <button type="submit" name="submit" id="signIn" >Sign in</button>
    </form>    
    <div class=" passWithIcon">
          <a href="forgotPassword.php">Forgot password?</a><br /><br />
          <p>
            Don't have an account?
            <a href="create_one.php" target="_blank" class="remLine">Create one</a>
          </p>
          <br />
          <div>
            <p>or continue with</p>
            <div class="icons">
              <a href="#"><i class="fa-brands fa-apple" id="apple"></i></a>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-google" id="google"></i></a>
            </div>
          </div>
      </div>
      <script src="../JS/login.js"></script>
  </section>
</body>
</html>
