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

  <div>
    <p align="center" class="maintexttitle" style="color: #686868">Rules And Info</p>
    <p align="center" class="maintexttitle" style="color: #686868">1. Forum</p>
    <p align="center" class="maintext" style="color: #686868">1.1. Forum Etiquette</p>
    <p align="center" class="maintext" style="color: #686868">1.1.1. Watch your language in comments, don't be rude, don't use offencive language, links, images. This will lead you at least to detention</p>
    <p align="center" class="maintext" style="color: #686868">1.1.2. Be respectful to others, all can have their word, their opinion and it often can't be declined by others. But if this would be out the rules, we need to remove it, and give a detention or block by rules. Law And Order must be made, because without it, all would be anarchy</p>
    <p align="center" class="maintext" style="color: #686868">1.2. Topic Rules</p>
    <p align="center" class="maintext" style="color: #686868">1.3. "Everlasting Eye Of Justice"</p>
    <p align="center" class="maintext" style="color: #686868">1.3.1. We Are Here... Yeah. Don't think that your posts aren't reviewed. Our Mighty CGC will see topics, that are posted in user forums, and if they conflict with rules, you will regret what you done. What will be? Well, we will KILL... AHEM... Sorry, habbit... We will give you a detention, if Our Council will decide, that post is negative, but not that bad (Broke rules, that weren't too strict), or we will block you for a reason. You can get blocked, by doing something in relapse, OR by breaking strict rules. Also, you can be blocked for some time, or permament, this will also decide council. So, if you want to be an active person in our comunity, please, don't break rules. We apreciate your activity, but we apreciate Law And Order too, and We think most of the Users too, so, be kind, so you will not be punished, OK?</p>
    <p align="center" class="maintexttitle" style="color: #686868">2. Contact With CGC</p>
    <p align="center" class="maintext" style="color: #686868">2.1. Contact Information</p>
    <p align="center" class="maintext" style="color: #686868">2.1.1. All the contact information of our team is stored in special with name "Contacts", you can see it on main panel with all other navigation buttons, so, it will not bring problems to you. There is all information about all types of contact sites we are owning for that moment. Don't be shy, ask or tell everything you want</p>
    <p align="center" class="maintext" style="color: #686868">2.2. Contact Rules</p>
    <p align="center" class="maintext" style="color: #686868">2.2.1. During contact with admins you also need to use Message Etiquette, like be polite, don't spam and so one... With all that nonsense that will be sent to us, that we also need to check, our work will be harder, so please, understand that our work isn't a piece of chocolate with hot choco in the winter, it is hard and sometimes we can harm our health to get job done, so use contacts only for things that are needed. Thanks for understanding</p>
    <p align="center" class="maintext" style="color: #686868">2.3. Additional Information</p>
    <p align="center" class="maintext" style="color: #686868">2.3.1. Nearly all of our team has access for all contact sites, so, sometimes random team member can reply for your message or post something, so don't be scared of it</p>
    <p align="center" class="maintexttitle" style="color: #686868">3. FAQ</p>
    <p align="center" class="maintext" style="color: #686868">3.1. Supossed FAQ</p>
    <p align="center" class="maintext" style="color: #686868">3.1.1. </p>
    <p align="center" class="maintext" style="color: #686868">3.2. Real FAQ</p>
    <p align="center" class="maintext" style="color: #686868">3.2.1. No one asked questions... Yet... Sooo... It will be added, when we will get some real Frequently Asked Questions... Wait for it... </p>
    <p align="center" class="maintexttitle" style="color: #686868">4. Web-Site</p>
    <p align="center" class="maintext" style="color: #686868">4.1. Troubleshooting</p>
    <p align="center" class="maintext" style="color: #686868">4.1.1. If you found something, that ruin usability of site, or something, that is not belong there, or something, that isn't right, found errors or bugs, please, contact us, we will manage to fix it in some time</p>
    <p align="center" class="maintext" style="color: #686868">4.2. E̶̮̬̠͔͔͊͋ͅr̵̛͙͐̆̀̔̅͌͂̆̕͠r̷͙͋͌́͑̍̏̏̈́̾̕̕͝͠ở̵̧͌̾̿̍̂̓̐̀̾̒̚͜͝͝r̵̠̻̗̺͍͎͔͔̀̇̇̂͐̔̈́͝</p>
    <p align="center" class="maintext" style="color: #686868">1.1.1. You Were Not Supossed To Be Here... But You need to know... There is Secrets... Secrets Everywhere... Good Luck, Treasure Hunter...</p>
  </div>

  <hr>

  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
  
</body>
</html>