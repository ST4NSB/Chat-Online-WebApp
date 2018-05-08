<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Chat</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/formstyle.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
</head>

<body>

  <?php
    $GLOBALS['currentpage'] = "home";
    include "loggednavbar.php";
  ?>
  <!--
  <header class="header">
    <img class="header__logo" src="assets/images/headerlogo.png" alt="Logo">
    <nav class="nav">
      <ul class="nav__wrapper">
        <li class="nav__item"><a href="index.html" class="nav__link active">Home</a></li>
        <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>

        <li class="nav__item"><a href="register.html" class="nav__link">Register</a></li>
        <li class="nav__item"><a href="login.html" class="nav__link">Login</a></li>
      </ul>
    </nav>
  </header>
-->


  <main class="main__content">
    <form class="form__chat">
      <div class="chatbox">

        <div class="chatlogs">

          <div class="chat friend">
            <p class="chat-message">12:40 [Michael] <br> hi</p>
          </div>

          <div class="chat self">
            <p class="chat-message">12:48 [Me] <br> hi</p>
          </div>

          <div class="chat self">
            <p class="chat-message">12:48 [Me] <br> hi</p>
          </div>

          <div class="chat self">
            <p class="chat-message">12:48 [Me] <br> hi</p>
          </div>

          <div class="chat self">
            <p class="chat-message">12:48 [Me] <br> hi</p>
          </div>
          <div class="chat self">
            <p class="chat-message">12:48 [Me] <br> hi</p>
          </div><div class="chat self">
            <p class="chat-message">12:48 [Me] <br> hi</p>
          </div>

        </div>


        <div class="chat-form">
          <textarea disabled id="mytxt" placeholder="Login to access the chat"></textarea>
          <button disabled id="sendbtn" type="button">SEND</button>
        </div>

      </div>
    </form>
  </main>



  <footer class="footer">
    <img class="footer__logo" src="assets/images/footerlogo.png" alt="Logo">
    <div class="credits">
      Bărbulescu Adrian &reg; All rights reserved 2018
    </div>
    <div class="details">
      <ul class="footer__nav">
      <li class="footer__nav__item"><a class="footer__links" href="http://webspace.ulbsibiu.ro/adrian.barbulescu/"><img class="miniimg" src="assets/images/cv-logo.png" alt="CV Logo"></a></li>
      <li class="footer__nav__item"><a class="footer__links" href="https://github.com/ST4NSB"><img class="miniimg" src="assets/images/github-logo.png" alt="Github Logo"></a></li>
      <li class="footer__nav__item"><a class="footer__links" href="http://csac.ulbsibiu.ro/"><img class="miniimg" src="assets/images/csac-logo.png" alt="CSAC Logo"></a></li>
      </ul>
    </div>
  </footer>


</body>

</html>
