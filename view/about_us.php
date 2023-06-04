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
  <title>About Us</title>
  <meta charset="utf-8"/>
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
      <div class="textdiv">
        <p class="newstitle" align="center">In Progress...</p>
        <p class="newstext" align="center">We can't really be called game company without any game, you know... But we have one project "In Progress", so, hang around and you will see a game, that could possibly be the one that you liked!!!<br>For now, You couldn't get nothing about upcoming project...<br>Or could you?...<br>Just know one thing...<br>Burry Secrets, Deep Under The Code Mantle...</p>
        <p class="newsdate">07.04.2023</p>
      </div>
    </div>
    <div class="newscontainer">
      <div class="textdiv">
        <p class="newstitle" align="center">Nothing Here... Not For Long!!!</p>
        <p class="newstext" align="center">We are New Crazzzy Company, so we have not enough <b class="newstext" style="color: #282828;">CrAzZzY</b> stories to tell. But don't worry! We will make some in no time, while making games, We are sure about it. Sooooo... Wait a liiittle bit longer, and you will get another chapter inside of our Dev-Life!!!</p>Pfhf 
        <p class="newsdate">00.00.0000</p>
      </div>
      <div class="newsimgdiv">
        <img src="../img/blocker-closed.jpg" alt="..." class="newsimg">
      </div>
    </div>
    <div class="newscontainer">
      <div class="newsimgdiv">
        <img src="../img/blocker-closed.jpg" alt="..." class="newsimg">
      </div>
      <div class="textdiv">
        <p class="newstitle" align="center">Nothing Here... Not For Long!!!</p>
        <p class="newstext" align="center">We are New Crazzzy Company, so we have not enough <b class="maintext" style="color: #282828;">CrAzZzY</b> stories to tell. But don't worry! We will make some in no time, while making games, We are sure about it. Sooooo... Wait a liiittle bit longer, and you will get another chapter inside of our Dev-Life!!!</p>
        <p class="newsdate">00.00.0000</p>
      </div>
    </div>
  </div>

  <hr>

  <div>
    <p align="center" class="maintexttitle" style="color: white">Our History</p>
    <p align="center" class="maintext" style="color: #686868">Greeting visitors. Now we will start a chapter-by-chapter story of our friendly All our <b class="newstext" style="color: #282828;">CrAzZzY</b> team. Come one. Come all. We just about to start a history!<br>All this team started with just one person, with a dream. Dream to make interesting games, to bring joy to the people</p>
    <div class="bigbr"></div>
  </div>

  <hr>

  <div>
    <p align="center" class="maintexttitle" style="color: white">Our Crazzzy Guys (And Girls Of Course)</p>
  </div>
  <div>
    <div class="newscontainer">
      <div class="card">
        <p class="newstitle" align="center" style="padding-top: 10px;">Maksym Yachechak<br>(CarMaDan)</p>
        <img src="../img/carmadan.jpg" class="avatarImage">
        <p class="newstext" align="center" style="padding: 30px; padding-top: 0px;">Hello, I am Max, Founder of this team, and also an One-Man Band<br>I make Music, Art, Programming and nearly all Ideas for our projects. Just a good guy from Ukraine, Learning Computer Science<br>Will be happy, if you'd like to see my<br> <a href="https://www.youtube.com/channel/UCeZph-3giVw3hti3l7AysWg" class="user-link-secret" style="color: black">YouTube Chanell</a><br>0x0</p>
        <p class="newsdate" align="center">123</p>
      </div>
      <div class="card">
        <p class="newstitle" align="center" style="padding-top: 10px;">Cat<br>(Just A simple Cat)</p>
        <img src="../img/cat_ua.jpg" class="avatarImage">
        <p class="newstext" align="center" style="padding: 30px; padding-top: 0px;">One-Man Band always needs an audience<br>A Companion<br>But what to do, if there are none of them?<br>...<br>...<br>Be It Yourself<br>...<br>...</p>
        <p class="newsdate" align="center">123</p>
      </div>
    </div>

    <div class="newscontainer">
      <div class="card">
        <p class="newstitle" align="center" style="padding-top: 10px;">Not A Single Soul<br>For Now...</p>
        <img src="../img/blocker-closed.jpg" class="avatarImage">
        <p class="newstext" align="center" style="padding: 30px; padding-top: 0px;">Just the two of us<br>We can make it if we try<br>Just the two of us<br>(Just the two of us)<br>Just the two of us<br>Building castles in the sky<br>Just the two of us</p>
        <p class="newsdate" align="center">123</p>
      </div>
      <div class="card">
        <p class="newstitle" align="center" style="padding-top: 10px;">Not A Single Soul<br>For Now...</p>
        <img src="../img/blocker-closed.jpg" class="avatarImage">
        <p class="newstext" align="center" style="padding: 30px; padding-top: 0px;">Just the two of us<br>We can make it if we try<br>Just the two of us<br>(Just the two of us)<br>Just the two of us<br>Building castles in the sky<br>Just the two of us</p>
        <p class="newsdate" align="center">123</p>
      </div>
    </div>

    <div class="newscontainer">
      <div class="card">
        <p class="newstitle" align="center" style="padding-top: 10px;">Not A Single Soul<br>For Now...</p>
        <img src="../img/blocker-closed.jpg" class="avatarImage">
        <p class="newstext" align="center" style="padding: 30px; padding-top: 0px;">Just the two of us<br>We can make it if we try<br>Just the two of us<br>(Just the two of us)<br>Just the two of us<br>Building castles in the sky<br>Just the two of us</p>
        <p class="newsdate" align="center">123</p>
      </div>
      <div class="card">
        <p class="newstitle" align="center" style="padding-top: 10px;">Not A Single Soul<br>For Now...</p>
        <img src="../img/blocker-closed.jpg" class="avatarImage">
        <p class="newstext" align="center" style="padding: 30px; padding-top: 0px;">Just the two of us<br>We can make it if we try<br>Just the two of us<br>(Just the two of us)<br>Just the two of us<br>Building castles in the sky<br>Just the two of us</p>
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