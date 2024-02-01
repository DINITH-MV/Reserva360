<!DOCTYPE html>
<html>

<head>
  <title>Create an Account</title>
  <link rel="stylesheet" href="../CSS/create_one.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <section id="header">
    <p class="logoText">Reservar <span>360 <i class="fa fa-light fa-location-arrow fa-shake"></i></span></p>
  </section>
  <div>
    <button type="button" class="backButton1">
      <a href="login.php"> <i class="fa fa-duotone fa-arrow-left"></i> </a>
    </button>
  </div>
  <section id="logInBox">
    <div class="mainContent">
      <div class="headerAndInputs">
        <h3>Create an account</h3>
        <form action="../phpHandlers/dbh.createOne.php" method="POST">
          <div class="inputBoxes">
            <input type="email" name="email" placeholder="Email address" id="email" required />
            <input type="text" name="username" placeholder="username" id="username" required />
            <input type="text" name="fname" placeholder="First Name" id="fName" required />
            <input type="text" name="lname" placeholder="Last Name" id="lName" required />
            <input type="text" name="number" placeholder="Phone number" id="lName" required />
            <input type="password" name="password" id="password" placeholder="Password" onblur="displayMessage()" required /><br />
            <div id="callingValidation">
              <p>Password must contain the following things :</p><br />
              <ul>
                <li>A lower case letter</li>
                <li>A capital letter</li>
                <li>A number</li>
                <li>Minimum 5 charactors</li>
                <li>Maximum 5 charactors</li>
              </ul>
            </div>
          </div>
      </div>
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
    <div>
      <button type="submit" id="signUp" onclick="filled()">Sign up</button>
      </form>
      <div class="passWithIcon">
        <p>
          Already have an account?
          <a href="login.php" class="remLine">Sign in</a>
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
    </div>
    <script src="../JS/create_one.js"></script>
  </section>
</body>

</html>