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
    <div>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">Game 1     by Admin     00.00.0000</button>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">Game 2     by Admin     00.00.0000</button>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">Game 3     by Admin     00.00.0000</button>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">FAQ     by Admin     00.00.0000</button>
    </div>
  </div>

  <div class="bigbr"></div>

  <hr>
  
  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>