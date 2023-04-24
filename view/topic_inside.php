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
        <h1 align="center" class="title" style="color: white">Question 1</h1>
        <h1 align="center" class="titlemoto" style="color: white">By User123</h1>
        <h1 align="center" class="titlemoto" style="color: white">00.00.0000</h1>

        <br>

        <h1 align="center" class="title" style="color: white">Text</h1>

        <br>
        <br>
        <br>

        <hr>

        <h1 align="center" class="title" style="color: white">Answer 1</h1>
        <h1 align="center" class="titlemoto" style="color: white">By User321</h1>
        <h1 align="center" class="titlemoto" style="color: white">00.00.0000</h1>

        <br>

        <h1 align="center" class="title" style="color: white">Text</h1>

        <br>
        <br>
        <br>

        <h1 align="center" class="title" style="color: white">Enter Your Comment:</h1>
        <textarea class="textbox_input" cols="30" rows="10" name="comment" style="margin: auto; display: block;"></textarea>

        <br>
        <br>
        <br>

        <input class="button" type="submit" value="Comment" style="margin: auto; display: block; width: 80%;"/>

        <br>
        <br>
        <br>
    </div>
  </div>
  <hr>
  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>