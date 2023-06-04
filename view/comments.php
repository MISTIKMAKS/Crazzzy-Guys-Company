<?php
    session_start();

    $pdo = require '../function/connect.php';

    if(!$pdo) {
        echo "Uh Oh!";
        die();
    }

    require '../function/function.php';

    if(isset($_COOKIE['login_key'])) {
        $login_key = $_COOKIE['login_key'];

        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

        $sql = "SELECT * FROM users WHERE login_key = '$login_key'";
        $statement = $pdo->query($sql);

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $data_chunk) {
            $banned = $data_chunk['banned'];

            if($banned == 0) {
                $user_id = trim($data_chunk['user_id']);
                $nickname = trim($data_chunk['nickname']);
                $login = trim($data_chunk['login']);
                $role = trim($data_chunk['role']);
                $about_me = trim($data_chunk['about_me']);
                $user_photo = trim($data_chunk['user_photo']);
                $registration_date = trim($data_chunk['registration_date']);

                if(empty($nickname) || $nickname == "") {
                    $nickname = "-";
                }
                if (empty($about_me) || $about_me == "") {
                    $about_me = "-";
                }
                if(empty($user_photo) || $user_photo == "") {
                    $user_photo = "user_photo.jpg";
                }

                $hide_country = $data_chunk['hide_country'];
                $hide_email = $data_chunk['hide_email'];
                $hide_gender = $data_chunk['hide_gender'];
                $hide_birthday = $data_chunk['hide_birthday'];

                if($hide_email == 1) {
                    $email = "=---Hidden---=";
                }
                else {
                    $email = $data_chunk['email'];
                    if(empty($country) || $country == "") {
                        $country = "-";
                    }
                }

                if($hide_country == 1) {
                    $country = "=---Hidden---=";
                }
                else {
                    $country = trim($data_chunk['country']);
                    if(empty($country) || $country == "") {
                        $country = "-";
                    }
                }

                if($hide_gender == 1) {
                    $gender = "=---Hidden---=";
                    $gender_self = $data_chunk['gender'];
                }
                else {
                    $gender = trim($data_chunk['gender']);
                    if(empty($gender) || $gender == "") {
                        $gender = "-";
                    }
                }

                if($hide_birthday == 1) {
                    $birthday = "=---Hidden---=";
                    $birthday_self = $data_chunk['birthday'];
                }
                else {
                    $birthday = $data_chunk['birthday'];
                }
            }
            else {

            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Comments</title>
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
  <br>
  <br>
  <br>
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
  <div>
  <div>
    <?php if($banned == 1) { ?>

    <?php } else if($banned == 0) { ?>
      <?php if (!empty($data)) { ?>

      <div class="cabinet-div">
        <div class="main-cabinet-info">
          <img src='../img/profiles/<?php echo $user_photo; ?>' id="cabinet-avatar">
          <div id="cabinet-info">
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">User ID:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $user_id; ?></p>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Nickname:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $nickname; ?></p>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Role:</p>
                <?php if($role == 1) { ?>
                  <h1 class='titlemoto' style='color: white'><a class='user-link-user' style="">User</a></h1>
                <?php } else if ($role == 2) { ?>
                  <h1 class='titlemoto' style='color: white'><a class='user-link-moderator' style=" animation: glow 2s ease-in-out infinite alternate;">Moderator</a></h1>
                <?php } else if ($role == 3) { ?>
                  <h1 class='titlemoto' style='color: white'><a class='user-link-developer' style="animation: 2s pulse infinite;">Developer</a></h1>
                <?php } else if ($role == 4) { ?>
                  <h1 class='titlemoto' style='color: white'><a class='user-link-star' style="  animation: 2s popout infinite;">Star</a></h1>
                <?php } else if ($role == 5) { ?>
                  <h1 class='titlemoto' style='color: white'><a class='user-link-honored-user' style="    animation-name: spin, spin-depth; animation-timing-function: linear; animation-iteration-count: infinite; animation-duration: 6s;">Honored User</a></h1>
                <?php } else if ($role == 13) { ?>
                  <h1 class='titlemoto' style='color: white'><a class='user-link-secret' style="    animation: text-shadow 1s ease-in-out infinite;">Secret</a></h1>
                <?php } ?>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">About Me:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $about_me; ?></p>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Registration Date:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $registration_date; ?></p>
            </div>
            <hr class="hr-cabinet">
            <p class="cabinet-info-text" style="text-align: center;">Another Useful Information</p>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Email:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $email; ?></p>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Country:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $country; ?></p>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Gender:</p>
              <p class="cabinet-info-text" id="varinfo"><?php echo $gender; ?></p>
            </div>
            <div class="var-cabinet">
              <p class="cabinet-info-text" id="var">Birthday:</p>
                <p class="cabinet-info-text" id="varinfo"><?php echo $birthday; ?></p>
            </div>
          </div>
        </div>
        <div class="trio-menudiv" style="margin-bottom: 15px; margin-top: 15px;">
          <form action="user_cabinet.php?userId=<? echo $user_id; ?>" method="POST" class="formmenu">
              <button type="submit" class="button" id="button-a">User Cabinet</button>
          </form>
          <form action="rules.php" class="formmenu">
              <button type="submit" class="button" id="button-b">Rules</button>
          </form>
          <form action="sign_out_redirect.php" class="formmenu">
              <button type="submit" class="button" id="button-c">Sign Out</button>
          </form>
        </div>
      </div>

      <?php } else if (empty($data)) { ?>

      <div class="trio-menudiv">
        <form action="sign_in.php" class="formmenu">
           <button type="submit" class="button" id="button-a">Sign In</button>
        </form>
        <form action="rules.php" class="formmenu">
           <button type="submit" class="button" id="button-b">Rules</button>
        </form>
        <form action="sign_up.php" class="formmenu">
           <button type="submit" class="button" id="button-c">Sign Up</button>
        </form>
      </div>

      <?php } ?>
    <?php } ?>

    <div>
        <?php display_forum(3) ?>
    </div>
      <form name="sign_up_form" method="post" action=""> 
        <input type="hidden" name="function" value="comment_add">   
        <h1 align="center" class="title" style="color: white">Enter Your Comment:</h1>
        <?php     
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            comment_adder();
          }   
        ?>
        <textarea placeholder="Comment Text" rows="1" cols="1" maxlength="2500" onkeypress="auto_grow(this); " onkeyup="auto_grow(this);" name="comment_text" class="input" id="textarea" style="resize: none; overflow: hidden; width: 70%;"></textarea><br/>
        <div id="the-count">
            <p align="center" class="titlemoto" style="color: white;"><span id="current">0</span> / <span id="maximum">2500</span></p><br/>
        </div>
        <div class="buttondiv"> 
              <input type="submit" name="comment_add" value="Create Comment" class="button" style="margin: auto; display: block;">
        </div>

        <div class='bigbr'></div>
      </form>
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