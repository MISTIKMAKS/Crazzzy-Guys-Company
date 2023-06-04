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
  <title>Choose Wisely</title>
  <meta charset="utf-8"/>

  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="../js/flashlight.js"></script>

</head>

<body style="background-color: black">

  	<div class="container">
    	<div class="helper">
	        <div class="content">
	            <form name="strangers_hand_form" method="post" action=""> 
			        <input type="hidden" name="function" value="strangers_hand">   
			        <h1 align="center" class="title" style="color: white">You Know Who I Am... But Do You Know Me?</h1><br/>
			        <h3 align="center" class="titlemoto" style="color: white">Let Me Test You:</h3><br/>
			        <?php     
			            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			                strangers_hand();
			            }   
			        ?>
			        <input type="text" name="strangers_hand_code" placeholder="..." class="input"><br/>
			        <div class="buttondiv"> 
              			<input type="submit" name="strangers_hand" value="Destroy" class="buttonsecret" style="margin: auto; display: block;">
          			</div>
			    </form>
	        </div>
    	</div>
	</div>

</body>
</html>