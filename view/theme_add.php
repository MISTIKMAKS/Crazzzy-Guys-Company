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
  <title>Theme Add</title>
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
    function auto_grow(element){
      element.style.height = "5px";
      element.style.height = (element.scrollHeight - 24)+"px";

      var maxLength = 0;
      $('textarea').keyup(function() {
        var length = $(this).val().length;
        var length = maxLength+length;
        $('#current').text(length);
        });
      }
    </script>

  <div>
    <p align="center" class="title">Crazzzy Guys</p>
    <p align="center" class="title">Company</p>
    <hr class="mainhr">
    <p align="center" class="titlemoto">Reforging Our Crazzziness</p>
    <p align="center" class="titlemoto">For Your Happiness</p>
    <hr class="mainhr">
  </div>

  <div class='bigbr'></div>

  <div>
      <form action="forum.php">
         <button type="submit" class="button" style="margin: auto; display: block;">Forum</button>
      </form>
  </div>

  <div class='bigbr'></div>

  <hr>

  <div class='bigbr'></div>

  <div>
    <div> 
      <h1 align="center" class="titlemoto" style="color: white">Before We Move On, Please, Read Our Rules Of Posting Themes. Cause You Don't Want To Get Your Theme Removed, Right?</h1><br/>
      <div class="bigbr"></div>
      <div>
          <form action="rules.php">
              <button type="submit" class="button" style="margin: auto; display: block;">Rules</button>
          </form>
      </div>
      <div class="bigbr"></div>
      <form name="theme_add_form" method="post" action=""> 
          <input type="hidden" name="function" value="theme_add">  
          <h1 align="center" class="titlemoto" style="color: white">You Got It All? So, Lets Get Started!!!</h1><br/>
          <h1 align="center" class="title" style="color: white">Create New Theme</h1><br/>
          <?php     
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $theme_check_one = theme_checker(1);
            }   
          ?>
          <h3 align="center" class="titlemoto" style="color: white">Input Theme Name:</h3><br/>
          <input type="text" name="theme_name" placeholder="Theme Name" class="input"><br/>
          <?php     
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $theme_check_two = theme_checker(2);
            }   
          ?>
          <h3 align="center" class="titlemoto" style="color: white">Input Theme Text:</h3><br/>
          <textarea placeholder="Theme Text" rows="1" cols="1" maxlength="5000" onkeypress="auto_grow(this); " onkeyup="auto_grow(this);" name="comment_text" class="input" id="textarea" style="resize: none; overflow: hidden; width: 70%;"></textarea><br/>
          <div id="the-count">
              <p align="center" class="titlemoto" style="color: white;"><span id="current">0</span> / <span id="maximum">5000</span></p><br/>
          </div>
          <?php     
            if ($theme_check_one && $theme_check_two) {
              theme_adder();
            }   
          ?>
          <div class="buttondiv"> 
              <input type="submit" name="theme_add" value="Create Theme" class="button" style="margin: auto; display: block;">
          </div>
        </form>
    </div>
  </div>

  <div class='bigbr'></div>

  <hr>
  <footer>
    <div>
      <p align="center" class="titlemoto" style="color: white;">© Crazzzy Guys Company. Made By MISTIKMAKS</p>
    </div>
  </footer>
</body>
</html>