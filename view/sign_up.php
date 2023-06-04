<?php
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
  <title>Sign Up</title>
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
            <form action="sign_in.php">
         <button type="submit" class="button" style="margin: auto; display: block;">Sign In</button>
      </form>
  </div>

  <div class="bigbr"></div>

  <hr>

  <div class="bigbr"></div>

  <div>
    <div>
      <form name="sign_up_form" method="post" action=""> 
        <input type="hidden" name="function" value="sign_up">   
        <h1 align="center" class="title" style="color: white">Sign Up</h1><br/>
        <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sign_up(1);
          }   
        ?>
        <h3 align="center" class="titlemoto" style="color: white">Input Your Login:</h3><br/>
        <input type="text" name="login" placeholder="Login" class="input"><br/>
        <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sign_up(2);
          }   
        ?>
        <h3 align="center" class="titlemoto" style="color: white">Input Your Email:</h3><br/>
        <input type="text" name="email" placeholder="Email" class="input"><br/>
                <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sign_up(3);
          }   
        ?>
        <h3 align="center" class="titlemoto" style="color: white">Input Your Password:</h3><br/>
        <input type="password" name="password" placeholder="Password" class="input"><br/>
        <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            sign_up(4);
          }   
        ?>
        <h3 align="center" class="titlemoto" style="color: white">Confirm Your Password:</h3><br/>
          <input type="password" name="password_confirm" placeholder="Password Confirmation" class="input"><br/>
        <div class="buttondiv"> 
            <input type="submit" name="sign_up" value="Sign Up" class="button" style="margin: auto; display: block;">
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