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
  <link rel="../stylesheet" href="css/style.css">
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
  <br>
  <br>
  <br>
  <div>
      <form action="forum.php">
         <button type="submit" class="button" style="margin: auto; display: block;">Forum</button>
      </form>
  </div>
  <br>
  <br>
  <br>
  <hr>
  <br>
  <br>
  <br>
  <div>
    <div>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">Question 1     by User123     00.00.0000</button>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">Question 2     by User321     00.00.0000</button>
         <button type="submit" class="button" style="margin: auto; display: block; width: 80%;">Question 3     by User666     00.00.0000</button>
    </div>
  </div>
  <br>
  <br>
  <br>
  <hr>
  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>