<?php
    session_start();

    $pdo = require '../function/connect.php';

    if(!$pdo) {
        echo "Uh Oh!";
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>CGC</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="gradient">

  <header>
    <div>
      <img src="../img/logo.png" alt="..." class="logo">
    </div>
  </header>

  <div>
    <p align="center" class="title">Crazzzy Guys</p>
    <p align="center" class="title">Company</p>
    <hr class="mainhr">
    <p align="center" class="titlemoto">Reforging Our Crazzziness</p>
    <p align="center" class="titlemoto">For Your Happiness</p>
    <hr class="mainhr">
  </div>

  <div class="bigbr"></div>

  <div class="menudiv">
      <form action="main_page.php" class="formmenu">
         <button type="submit" class="button" id="button-a">Main Page</button>
      </form>
      <form action="games.php" class="formmenu">
         <button type="submit" class="button" id="button-b">Games</button>
      </form>
      <form action="forum.php" class="formmenu">
         <button type="submit" class="button" id="button-c">Forum</button>
      </form>
      <form action="support_us.php" class="formmenu">
         <button type="submit" class="button" id="button-d">Support Us</button>
      </form>
      <form>
         <button type="submit" class="button" id="button-hidden"></button>
      </form>
      <form action="about_us.php" class="formmenu">
         <button type="submit" class="button" id="button-e">About Us</button>
      </form>
      <form action="contacts.php" class="formmenu">
         <button type="submit" class="button" id="button-f">Contacts</button>
      </form>
      <form>
         <button type="submit" class="button" id="button-hidden"></button>
      </form>
  </div>

  <div class="bigbr"></div>

  <hr>

  <div class="bigbr"></div>

  <div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <img src="../img/blocker.jpg" alt="..." class="newsimg">
      </div>
      <div class="textdiv">
        <p class="newstitle" align="center">123</p>
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate">123</p>
      </div>
    </div>
    <div class="newscontainer">
      <div class="textdiv">
        <p class="newstitle" align="center">123</p>
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate">123</p>
      </div>
      <div class="newsimgdiv">
        <img src="../img/blocker.jpg" alt="..." class="newsimg">
      </div>
    </div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <img src="../img/blocker.jpg" alt="..." class="newsimg">
      </div>
      <div class="textdiv">
        <p class="newstitle" align="center">123</p>
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate">123</p>
      </div>
    </div>
  </div>

  <div class="bigbr"></div>

  <hr>

  <div align="center" style="padding-right: 10px;padding-left: 10px;">
    <p align="center" class="maintexttitle">What Is This?</p>
    <p align="center" class="maintext">The CGC (Crazzzy Guys Company) is a bunch of people, that share same interests and CRAZZZY in their own ways. Also all of us are unique in their own ways. It helps us to achieve results in different aspects. We are forging our CRAZZZINESS to achieve Your Happiness, that is all, we want to do!!! All our games and other work are done with bunch of love and much more hardwork, so, we hope it will hook you in and give you a wide spectre of emotions and will leave only good memories. Stay in touch with us to get more information about upcoming events and new games in development!!! Be sure, we will not dissapoint You!!! <br>
    We would be happy, if you can support us!!! <br>
    Good Luck and Have Fun Comrades!!!</p>
    <br>
    <p align="center" class="maintext">To The Next Meeting Here, On <b class="maintext" style="color: #282828;">The DarkSide!!!</b></p>
    <p align="center" class="maintextaddons">www.crazzzy-guys-company.com</p>
    <p align="center" class="maintextaddons">crazzzyguyscompany@gmail.com</p>
  </div>
  
  <hr>

  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>