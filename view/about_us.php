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

  <div align="center" style="padding-right: 10px;padding-left: 10px;">
    <p align="center" class="maintexttitle" style="color: #686868">Who Are We And What Are We Doing?</p>
    <p align="center" class="maintext" style="color: #686868">We are CGC (Crazzzy Guys Company), and, for real, we are a small company of friends, that just want to create something, that will be remembered in a comunity. We just want to leave our mark in a history, by making something all will like. We can forge all our <b class="maintext" style="color: #282828;">CRAZZZINESS</b> to make some interesting stuff, and give you your deserved <b class="maintext" style="color: white;">HAPPINESS!!!</b> (We suppose...)<br><br>
    We will try to make our best to give you that impressions, you will remember for a long time, but again, we are just a starting company that will rise from the ashes and that just want to bring happiness into a community by our projects, so, if you with us, you <b class="maintext" style="color: #B22222;" id="fire">JUST CRAZZZY AS HELLL</b> as all of us here, in CGC(Crazzzy Guys Company)!!!<br><br>
    Aaand... We suppose that is all. Even that we are just a small starting company, it will not stop us on our march onwards our goal to <b class="maintext" style="color: #282828;">DESTRO</b>... Sorry, out of habbit... <b class="maintext" style="color: #282828;">AHEM</b>... To make your life for a bit better, by playing our games!!!
    </p>
  </div>

  <hr>

  <div>
    <p align="center" class="maintexttitle" style="color: #686868">Some Piece Of Our Dev-Life</p>
  </div>

  <hr>

  <div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <img src="../img/blocker.jpg" alt="..." class="newsimg">
      </div>
      <div>
        <p class="newstitle" align="center">123</p>
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate">123</p>
      </div>
    </div>
    <div class="newscontainer">
      <div>
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
      <div>
        <p class="newstitle" align="center">123</p>
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate">123</p>
      </div>
    </div>
  </div>

  <hr>

  <div>
    <p align="center" class="maintexttitle" style="color: white">Our History</p>
    <p align="center" class="maintext" style="color: #686868">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br></p>
  </div>

  <hr>

  <div>
    <p align="center" class="maintexttitle" style="color: white">Our Crazzzy Guys (And Girls Of Course)</p>
  </div>
  <div>
    <div class="newscontainer">
      <div class="card">
        <p class="newstitle" align="center">123</p>
        <img src="https://i.pinimg.com/originals/12/61/09/126109b6c6f18f91959f49c72ad3481e.png" class="avatarImage">
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate" align="center">123</p>
      </div>
      <div class="card">
        <p class="newstitle" align="center">123</p>
        <img src="https://i.pinimg.com/originals/12/61/09/126109b6c6f18f91959f49c72ad3481e.png" class="avatarImage">
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate" align="center">123</p>
      </div>
    </div>
    <br>
    <div class="newscontainer">
      <div class="card">
        <p class="newstitle" align="center">123</p>
        <img src="https://i.pinimg.com/originals/12/61/09/126109b6c6f18f91959f49c72ad3481e.png" class="avatarImage">
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate" align="center">123</p>
      </div>
      <div class="card">
        <p class="newstitle" align="center">123</p>
        <img src="https://i.pinimg.com/originals/12/61/09/126109b6c6f18f91959f49c72ad3481e.png" class="avatarImage">
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate" align="center">123</p>
      </div>
    </div>
    <br>
    <div class="newscontainer">
      <div class="card">
        <p class="newstitle" align="center">123</p>
        <img src="https://i.pinimg.com/originals/12/61/09/126109b6c6f18f91959f49c72ad3481e.png" class="avatarImage">
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate" align="center">123</p>
      </div>
      <div class="card">
        <p class="newstitle" align="center">123</p>
        <img src="https://i.pinimg.com/originals/12/61/09/126109b6c6f18f91959f49c72ad3481e.png" class="avatarImage">
        <p class="newstext" align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="newsdate" align="center">123</p>
      </div>
    </div>
  </div>

  <div class="bigbr"></div>

  <hr>

  <div>
    <p align="center" class="maintexttitle" style="color: white">Still here? Better Head For Games, They Will Definetly Be Better Than Surfing Around Here!!!</p>
    <p align="center" class="newsdate" style="color: black">Or You Are Another Treasure Hunter?...</p>
    <br>
  </div>
  
  <hr>

  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>