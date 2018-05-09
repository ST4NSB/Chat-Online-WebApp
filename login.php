<?php
  session_start();
  $_SESSION['currentpg'] = "login";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Online Chat</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">
</head>

<body>

  <?php
    include "navbar.php";
    include "footer.html";
  ?>

  <main class="main__login">
    <form class="form__login">
      <div class="login__window">

        <div class="login__topside"></div>
        <div class="login__content">

          <h1>LOG IN</h1>
          <div class="login__failmessage"></div>
          <div class="login__username">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" maxlength="30" required>
          </div>
          <div class="login__password">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" maxlength="30" required>
          </div>
          <div class="login__checkbox">
            <label class="login__checkbox__label" for="checkbox">
              <input id="checkbox" name="checkbox" type="checkbox">
              <span>Keep me logged in</span>
            </label>
          </div>
          <div class="login__registermsg">
            Don't have an account? <a class="login__link" href="register.html">REGISTER</a>
          </div>
          <div class="login__button">
            <button type="submit">Login</button>
          </div>
        </div>

      </div>
    </form>
  </main>

</body>

</html>