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
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="gradient">
  <header>
    <div>
      <img src="img/logo.png" alt="..." class="logo">
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
  <br>
  <br>
  <br>
  <div class="menudiv">
      <form action="test.html">
         <button type="submit" class="button" id="button-a">Main Page</button>
      </form>
      <form action="test1.html">
         <button type="submit" class="button" id="button-b">Games</button>
      </form>
      <form action="test2.html">
         <button type="submit" class="button" id="button-c">Forum</button>
      </form>
      <form action="test3.html">
         <button type="submit" class="button" id="button-d">Support Us</button>
      </form>
      <form>
         <button type="submit" class="button" id="button-hidden"></button>
      </form>
      <form action="test4.html">
         <button type="submit" class="button" id="button-e">About Us</button>
      </form>
      <form action="test5.html">
         <button type="submit" class="button" id="button-f">Contacts</button>
      </form>
      <form>
         <button type="submit" class="button" id="button-hidden"></button>
      </form>
  </div>
  <br>
  <br>
  <br>
  <hr>
  <div align="center" style="padding-right: 10px;padding-left: 10px;">
  <p align="center" class="maintexttitle" style="color: #686868">Before We Move On, Please, Read Our Rules Of Posting Topics</p>
  <p align="center" class="maintexttitle" style="color: #686868">Cause You Don't Want To Get Your Topic Removed, Right?</p>
  <form action="test7.html">
    <button type="submit" class="button" id="">Rules</button>
  </form>
  <p align="center" class="maintexttitle" style="color: #686868">You Got It All?</p>
  <form name="form" method="post" action="" autocomplete="off">
    <p align="center" class="maintexttitle" style="color: #686868">So, Lets Get Started!!!</p>
    <p align="center" class="maintexttitle">Input Name Of The Topic</p>
	<input type="text" name="name" placeholder="Name" class="input" required><br/>
	<p align="center" class="maintexttitle">Input Your Name</p>
	<input type="text" name="name" placeholder="Name" class="input" required><br/>
	<p align="center" class="maintexttitle">Input Your Name</p>
	<input type="text" name="name" placeholder="Name" class="input" required><br/>
	<p align="center" class="maintexttitle">Input Your Name</p>
	<textarea name="aboutme" cols="20" rows="10" class="message"></textarea><br/>
  </form>


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