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
  <title>Games</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="gradient">

  <header>
    <div>
      <img src="../img/logo.png" alt="..." class="logo">
    </div>
  </header>

  <div class="topping">
    <p align="center" class="title">Crazzzy Guys</p>
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
        <p class="newstitle" align="center">???CLOSED???</p>
        <p class="newstext" align="center">4F 68 2C 20 41 20 54 72 65 61 73 75 72 65 20 48 75 6E 74 65 72 20 48 61 76 65 20 59 6F 75 20 42 65 63 6F 6D 65 2E 20 42 75 74 20 57 69 6C 6C 20 49 74 20 4C 65 61 64 20 54 6F 20 59 6F 75 72 20 5B 41 72 69 73 65 5D 2D 20 3D 4F 72 3D 20 59 6F 75 72 20 2D 5B 44 65 6D 69 73 65 5D 3F</p>
        <p class="newsdate">??.??.????</p>
      </div>
    </div>
    <div class="newscontainer">
      <div class="textdiv">
        <p class="newstitle" align="center">!!!CLOSED!!!</p>
        <p class="newstext" align="center">Until Some Time, We Suppose</p>
        <p class="newsdate">00.00.0000</p>
      </div>
      <div class="newsimgdiv">
        <a href="" class="hvr-buzz-out"><img src="../img/blocker-closed.jpg" alt="..." class="newsimg"></a>
      </div>
    </div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <a href="" class="hvr-buzz-out"><img src="../img/blocker-closed.jpg" alt="..." class="newsimg"></a>
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