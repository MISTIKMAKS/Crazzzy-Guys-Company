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
  <title>Sign In</title>
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

  <div>
      <form action="forum.php">
         <button type="submit" class="button" style="margin: auto; display: block;">Forum</button>
      </form>
            <form action="sign_up.php">
         <button type="submit" class="button" style="margin: auto; display: block;">Sign Up</button>
      </form>
  </div>

  <div class="bigbr"></div>

  <hr>

  <div class="bigbr"></div>

  <div>
    <div>
      <form name="sign_in_form" method="post" action="">
        <input type="hidden" name="function" value="sign_in">
        <h1 align="center" class="title" style="color: white">Sign In</h1><br/>
        <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sign_in(1);
          }   
        ?>
        <h3 align="center" class="titlemoto" style="color: white">Input Your Login:</h3><br/>
        <input type="text" name="login" placeholder="Login" class="input"><br/>
        <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sign_in(2);
          }   
        ?>
        <h3 align="center" class="titlemoto" style="color: white">Input Your Password:</h3><br/>
        <input type="password" name="password" placeholder="Password" class="input"><br/>
        <div class="buttondiv"> 
            <input type="submit" name="sign_in" value="Sign In" class="button" style="margin: auto; display: block;">
        </div>
      </form>
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