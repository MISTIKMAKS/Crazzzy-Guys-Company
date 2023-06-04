<?php
    session_start();

    $pdo = require '../function/connect.php';

    if(!$pdo) {
        echo "Uh Oh!";
        die();
    }

    require '../function/function.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>CrazzzyGuysCompany</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="gradient">

  <header>
    <div>
      <img src="../img/logo.png" alt="..." class="logo">
    </div>
  </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
      var pressedButtons = [];

      function checkButtonPress() {
        var buttons = document.querySelectorAll('.button');
        var uniquePressedButtons = [...new Set(pressedButtons)];

        if (uniquePressedButtons.length === 8) {
          window.location.href = "do_you_know_the_strangers_hand.php";
        }
      }

      function secretButtonClick(button) {
        var buttonId = button.id;

        if (!pressedButtons.includes(buttonId)) {
          pressedButtons.push(buttonId);
          button.classList.add('pressed');
          checkButtonPress();
        }
      }
    </script>
  
  <div>
    <p align="center" class="title">Crazzzy <button class="symbol-button" id="symbol-button_6" onclick="secretButtonClick(this)">G</button>uys</p>
    <p align="center" class="title">Company</p>
    <hr class="mainhr">
    <p align="center" class="titlemoto"><button class="symbol-button" id="symbol-button_3" onclick="secretButtonClick(this)">R</button>eforging Our Crazzziness</p>
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
         <button type="submit" class="button" id="button-hidden">Key [ᖇᙓᙃ</button>
      </form>
      <form action="about_us.php" class="formmenu">
         <button type="submit" class="button" id="button-e">About Us</button>
      </form>
      <form action="contacts.php" class="formmenu">
         <button type="submit" class="button" id="button-f">Contacts</button>
      </form>
      <form>
         <button type="submit" class="button" id="button-hidden">ᗣᙅƮ] Key</button>
      </form>
  </div>

  <div class="bigbr"></div>

  <hr>

  <div class="bigbr"></div>

  <div>
    <?php display_forum(4) ?>
  </div>

  <div class="bigbr"></div>

  <hr>
  <div align="center" style="padding-right: 10px;padding-left: 10px;">
    <p align="center" class="maintexttitle">Who <button class="symbol-button" id="symbol-button_4" onclick="secretButtonClick(this)">A</button>re We?</p>
    <p align="center" class="maintext">The CGC (Crazzzy Guys Company) is a bunch of people, or so called team, that share same interests and CRAZZZY in their own ways. Also all of us are unique in their own ways. It helps us to achieve results in different aspects. We are forging our C<button class="symbol-button" id="symbol-button_8" onclick="secretButtonClick(this)">R</button>AZZZIN<button class="symbol-button" id="symbol-button_7" onclick="secretButtonClick(this)">E</button>SS to achieve Your Happiness, that is all, we want to do!!! All our games and other work are done with bunch of love and much more hardwork, so, we hope it will hook you in and give you a wide spectre of emotions and will leave only good memories. Stay in touch with us to get more information about upcoming events and new games in development!!! Be sure, we will not dissapoint You!!! <br>
    We would be happy, if you can support us!!! <br>
    Good Luck and Have Fun Comrades!!!</p>
    <br>
    <p align="center" class="maintext">To The <button class="symbol-button" id="symbol-button_5" onclick="secretButtonClick(this)">N</button>ext Meeting Here, On <b class="maintext" style="color: #282828;">The Dark<button class="symbol-button" id="symbol-button_1" onclick="secretButtonClick(this)">S</button>ide!!!</b></p>
    <p align="center" class="maintextaddons">www.crazzzy-guys-company.com</p>
    <p align="center" class="maintextaddons">crazzzyguyscompany@gmail.com</p>
  </div>

  <hr>

  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MIS<button class="symbol-button" id="symbol-button_2" onclick="secretButtonClick(this)">T</button>IKMAKS</p>
    </div>
  </footer>

</body>
</html>