<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/forgotPassword.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <section>
      <div id="logo">
        <h1>Reservation</h1>
      </div>
      <div>
        <button type="button" class="backButton">
          <a href="login.php"> <i class="fa fa-duotone fa-arrow-left"></i> </a>
        </button>
      </div>
    </section>

    <section id="logInBox">
      <div class="signInPart">
        <h3>Reset your password</h3>
        <p>Enter your email, and we'll send you a link to reset your</p>
        <p>password</p>
        <div class="inputBoxes">
          <input type="email" placeholder="Email address" id="email" /><br />
        </div>
      </div>

      <div>
        <button type="submit" onclick="filled()">Send reset link</button>
      </div>
      <script src="../JS/forgotPassword.js"></script>
    </section>
  </body>
</html>
