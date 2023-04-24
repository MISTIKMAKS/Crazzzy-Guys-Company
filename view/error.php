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

  <div class="topping">
    <p align="center" class="title">Error</p>
    <p align="center" class="title">Company</p>
    <hr class="mainhr">
    <p align="center" class="titlemoto">Reforging Our Crazzziness</p>
    <p align="center" class="titlemoto">For Your Happiness</p>
    <hr class="mainhr">
  </div>

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

  <hr>

  <div class="bigbr"></div>

  <div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <a href="" class="hvr-buzz-out"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      </div>
      <div class="textdiv">
        <p class="newstitle" align="center">Game</p>
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate">00.00.0000</p>
      </div>
    </div>
    <div class="newscontainer">
      <div class="textdiv">
        <p class="newstitle" align="center">!!!CLOSED!!!</p>
        <p class="newstext" align="center">Until Some Time, We Suppose</p>
        <p class="newsdate">00.00.0000</p>
      </div>
      <div class="newsimgdiv">
        <a href="" class="hvr-buzz-out"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      </div>
    </div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <a href="" class="hvr-buzz-out"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      </div>
      <div class="textdiv">
        <p class="newstitle" align="center">!!!CLOSED!!!</p>
        <p class="newstext" align="center">Until Some Time, We Suppose</p>
        <p class="newsdate">00.00.0000</p>
      </div>
    </div>
  </div>

  <div class="bigbr"></div>
  
  <hr>

  <div align="center" style="padding-right: 10px;padding-left: 10px;">
    <p align="center" class="maintexttitle">Where Am I And What Is This?</p>
    <p align="center" class="maintext">Congratulations!!!<br>
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