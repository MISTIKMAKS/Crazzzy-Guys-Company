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
    <p align="center" class="maintexttitle" style="color: #686868">How To Contact With Us?</p>
    <p align="center" class="maintext" style="color: #686868">The CGC (Crazzzy Guys Company) is a starting company, that might have some rough corners, that need to be polished to an ideal state, so, some feedback is a thing that we need in our work. Also, some of our users might want to say some words to us or deliver some sort of important letter, so we cant leave you without a chance to deliver it. We will be happy about all sort of letters, but please, be polite and no spam, cause it will only distract all our team from our work and distract us from some important things to do. Thank you for understanding (Email's, Socials And Some More Info Is Lower). Also, you can add us, comment us, or subscribe to us in all social medias that presented lower, we will definetly appreciate this, cause all your actions can help us to progress further!!!<br><br>
    (List Can Be Expanded By The Time Flowing Through Our Fingers...)<br></p>
    <br>
    
    <hr>

    <div align="center" style="padding-right: 10px;padding-left: 10px;">
      <a href="" class="hvr-bob"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      <p align="center" class="maintexttitle" style="margin-bottom: 5px; margin-top: 5px; color: white;">GMail</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">crazzzyguyscompany@gmail.com</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Here you can write some sort of letter, question something, or just contact with our team, but please, no spam. <b class="maintext" style="color: #282828;">!Spammers Will Be SLICED And DICED!</b></p>
    </div>

    <hr>

    <div align="center" style="padding-right: 10px;padding-left: 10px;">
      <a href="" class="hvr-bob"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      <p align="center" class="maintexttitle" style="margin-bottom: 5px; margin-top: 5px; color: white;">YouTube</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Link</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">On that channel, you can see some content about upcoming games, some devlogs, and some other things, if you want to keep a pace with news about us, you might consider subscribing it!</p>
    </div>

    <hr>

     <div align="center" style="padding-right: 10px;padding-left: 10px;">
      <a href="" class="hvr-bob"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      <p align="center" class="maintexttitle" style="margin-bottom: 5px; margin-top: 5px; color: white;">InstaGram</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Link</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">As Instagram nowadays covers more and more people around the world, we decided to use it to post some information, news and other things. Guess, it the most efficient to group auditory in one place?</p>
    </div>

    <hr>

    <div align="center" style="padding-right: 10px;padding-left: 10px;">
      <a href="" class="hvr-bob"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      <p align="center" class="maintexttitle" style="margin-bottom: 5px; margin-top: 5px; color: white;">Twitter</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Link</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Twitter is the most used social media to give information about projects that is in progress, or news on that projects, so, why not to create it for grouping all news?</p>
    </div>

    <hr>

    <div align="center" style="padding-right: 10px;padding-left: 10px;">
      <a href="" class="hvr-bob"><img src="../img/blocker.jpg" alt="..." class="newsimg"></a>
      <p align="center" class="maintexttitle" style="margin-bottom: 5px; margin-top: 5px; color: white;">Telegram</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Link</p>
      <p align="center" class="maintext" style="margin-bottom: 5px; margin-top: 5px; color: white;">Most used nowadays messenger, that can combine news and disscussion in one place, like some sort of social media. There you can see some information, news and other things and discuss it with others!</p>
    </div>

    <hr>

  <div>
    <p align="center" class="maintext">Good Luck Using It!!! See Ya Later, Aligator!!!</p>
  </div>

  <hr>

  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>