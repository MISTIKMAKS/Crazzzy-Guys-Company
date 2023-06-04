<?php
    session_start();

    $pdo = require '../function/connect.php';

    if(!$pdo) {
		echo "Uh Oh!";
		die();
    }

    require '../function/function.php';

    $user_id = $_GET['userId'];

    $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
    $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

    $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
    $statement = $pdo->query($sql);

    $user_data = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($user_data as $user_data_chunk) {
        $banned = $user_data_chunk['banned'];

        if($banned == 1) {
        	$ban_reason = $user_data_chunk['ban_reason'];
        }

        $user_login_key = $user_data_chunk['login_key'];

        $user_id = trim($user_data_chunk['user_id']);
        $nickname = trim($user_data_chunk['nickname']);
        $login = trim($user_data_chunk['login']);
        $role = trim($user_data_chunk['role']);
        $about_me = trim($user_data_chunk['about_me']);
        $user_photo = trim($user_data_chunk['user_photo']);
        $registration_date = trim($user_data_chunk['registration_date']);

        if(empty($nickname) || $nickname == "") {
            $nickname = "-";
        }
        if (empty($about_me) || $about_me == "") {
            $about_me = "-";
        }
        if(empty($user_photo) || $user_photo == "") {
            $user_photo = "user_photo.jpg";
        }

        $hide_country = $user_data_chunk['hide_country'];
        $hide_email = $user_data_chunk['hide_email'];
        $hide_gender = $user_data_chunk['hide_gender'];
        $hide_birthday = $user_data_chunk['hide_birthday'];

        if($hide_email == 1) {
            $email = "=---Hidden---=";
        }
        else {
            $email = $user_data_chunk['email'];
            if(empty($email) || $email == "") {
                $email = "-";
            }
        }

        if($hide_country == 1) {
            $country = "=---Hidden---=";
        }
        else {
            $country = trim($user_data_chunk['country']);
            if(empty($country) || $country == "") {
                $country = "-";
            }
        }

        if($hide_gender == 1) {
            $gender = "=---Hidden---=";
        }
        else {
            $gender = trim($user_data_chunk['gender']);
            if(empty($gender) || $gender == "") {
                $gender = "-";
            }
        }

        if($hide_birthday == 1) {
            $birthday = "=---Hidden---=";
        }
        else {
            $birthday = $user_data_chunk['birthday'];
        }
    }

    if(isset($_COOKIE['login_key'])) {
        $login_key = $_COOKIE['login_key'];
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Cabinet</title>
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
      	element.style.height = (element.scrollHeight+5)+"px";

      	var maxLength = 0;
      	$('textarea[name=about_me]').keyup(function() {
        	var length = $(this).val().length;
        	var length = maxLength+length;
        	$('#current').text(length);
      	});
    }

	var imgRe = /^.+\.(jpg|jpeg|gif|png)$/i;

	function showImage(obj) {
	    var file = obj.files[0];
	    if (file) {
	        var reader = new FileReader();
	        reader.onload = function(event) {
	            var image = new Image();
	            image.src = event.target.result;
	            image.onload = function() {
	                document.getElementById('cabinet-avatar').src = image.src;
	                document.getElementsByName('user_photo_hidden')[0].value = image.src;
	            };
	        };
	        reader.readAsDataURL(file);
	    }
	}

	function countryUpdateInput() {
		var countrySelect = document.getElementById('countrySelect');
		var countryInput = document.getElementsByName('country')[0];

		var selectedOption = countrySelect.options[countrySelect.selectedIndex];
  		var selectedText = selectedOption.textContent;

	  	countryInput.value = selectedText;
	}

	function genderUpdateInput() {
		var genderSelect = document.getElementById('genderSelect');
		var genderInput = document.getElementsByName('gender')[0];

		var selectedOption = genderSelect.options[genderSelect.selectedIndex];
  		var selectedText = selectedOption.textContent;

	  	genderInput.value = selectedText;
	}

	function handleFormSubmit(event, buttonId) {
		if(buttonId === "update_photo") {
			event.preventDefault();
			return false;
		} 
		else if (buttonId === "update_info") {

		}
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

  	<div class="bigbr"></div>

  	<div>

  	<?php if(empty($user_data)) {?>

		<div class="cabinet-div" style="padding-top: 20px; padding-bottom: 20px;">
	    	<p align="center" class="title" style="padding-top: 20px; padding-bottom: 20px; color: white;">User with ID [<?php echo $user_id; ?>] not found in our database!<br> Please, go back, or try again!</p>
	    	<form action="main_page.php" class="formmenu">
              	<button type="submit" class="button" id="button-c">Main Page</button>
          	</form>
	    </div>

	<?php } else if($banned == 1 && $login_key == $user_login_key) {?>

		<div class="cabinet-div" style="padding-top: 20px; padding-bottom: 20px;">
	    	<p align="center" class="title" style="color: red">BANNED AND PERISHED!!!</p>
	    	<p align="center" class="title" style="color: red">Ban Reason: <?php echo $ban_reason; ?></p>
	    	<form action="sign_out_redirect.php" class="formmenu">
              	<button type="submit" class="button" id="button-c">Sign Out</button>
          	</form>
	    </div>

	<?php } else if($banned == 1) {?>

	    <div class="cabinet-div" style="padding-top: 20px; padding-bottom: 20px;">
	    	<p align="center" class="title" style="color: red">BANNED AND PERISHED!!!</p>
	    	<p align="center" class="title" style="color: red">Ban Reason: <?php echo $ban_reason; ?></p>
	    	<div class="main-cabinet-info">
			<img src='../img/profiles/<?php echo $user_photo; ?>' name="profile_photo" id="cabinet-avatar">
		<div id="cabinet-info">
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">User ID:</p>
		     	<textarea placeholder="<?php echo $user_id; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $user_id; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
			  	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Nickname:</p>
			  	<textarea placeholder="<?php echo $nickname; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $nickname; ?></textarea>
		   	</div>
		   	<div class="var-cabinet" style="margin-top: 10px; margin-bottom: 10px;">
		      	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Role:</p>
		      	<?php if($role == 1) { ?>
		      		<h1 class='titlemoto' style='color: white'><a class='user-link-user' style="">User</a></h1>
                <?php } else if ($role == 2) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-moderator' style="	animation: glow 2s ease-in-out infinite alternate;">Moderator</a></h1>
                <?php } else if ($role == 3) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-developer' style="animation: 2s pulse infinite;">Developer</a></h1>
                <?php } else if ($role == 4) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-star' style="	animation: 2s popout infinite;">Star</a></h1>
                <?php } else if ($role == 5) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-honored-user' style="	 	animation-name: spin, spin-depth; animation-timing-function: linear; animation-iteration-count: infinite; animation-duration: 6s;">Honored User</a></h1>
                <?php } else if ($role == 13) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-secret' style="		animation: text-shadow 1s ease-in-out infinite;">Secret</a></h1>
                <?php } ?>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">About Me:</p>
		     	<textarea placeholder="<?php echo $about_me; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $about_me; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Registration Date:</p>
		     	<textarea placeholder="<?php echo $registration_date; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $registration_date; ?></textarea>
		   	</div>
		   	<hr class="hr-cabinet">
		   	<p class="cabinet-info-text" style="text-align: center;">Another Useful Information</p>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Email:</p>
		     	<textarea placeholder="<?php echo $email; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $email; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Country:</p>
		     	<textarea placeholder="<?php echo $country; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $country; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Gender:</p>
		     	<textarea placeholder="<?php echo $gender; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $gender; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Birthday:</p>
		     	<textarea placeholder="<?php echo $birthday; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $birthday; ?></textarea>
		   	</div>
		</div>
	    </div>
    <?php } else if($login_key == $user_login_key) { ?>

    	<?
	   	foreach($user_data as $user_data_chunk) {
	        $email = $user_data_chunk['email'];
	        if(empty($email) || $email == "") {
	            $email = "-";
	        }

	        $country = trim($user_data_chunk['country']);
	        if(empty($country) || $country == "") {
	            $country = "-";
	        }

	        $gender = trim($user_data_chunk['gender']);
	        if(empty($gender) || $gender == "") {
	            $gender = "-";
	        }

	        $birthday = $user_data_chunk['birthday'];
	    }
	    ?>

        <form name="update_info_form" method="post" action=""> 
        <input type="hidden" name="function" value="update_info">   
		    <div class="cabinet-div">
		    	<p align="center" class="title" style="color: white">Welcome, to the domain of mighty...</p>
		    	<?php
					if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['update_info'])) {
						update_info();
				 	}   
				?>
			    <div class="main-cabinet-info">
					<img src='../img/profiles/<?php echo $user_photo; ?>' name="profile_photo" id="cabinet-avatar">
					<?php     
				        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
				        //     update_info(7);
				        // }   
				    ?>
					<button onclick="document.getElementById('update_photo').click(); handleFormSubmit(event, 'update_photo');" class="button" name="update_photo_button">Upload Photo</button>
					<!-- <textarea name="user_photo_hidden" id="user_photo_hidden" style="display: none;"></textarea> -->
				    <input type="hidden" name="user_photo_hidden" value="U">

					<input type="file" name="update_photo" value="Update Photo" id="update_photo" onchange="showImage(this)" style="display:none">
					<div class="hide-cabinet" style="margin-top: 20px; margin-bottom: 20px;">
					   	<div id="hide-one" class="check-container">
					   	<? if($hide_email == 0) { ?>
					     	<input type="checkbox" name="hide_email" class="checkmark">
					    	<label for="hide_email">Hide Email</label>
					    <? } else if($hide_email == 1) { ?>
					     	<input type="checkbox" name="hide_email" class="checkmark" checked>
					    	<label for="hide_email">Hide Email</label>
					    <? } ?>
					   	</div>
					   	<div id="hide-two">
						<? if($hide_country == 0) { ?>
					    	<input type="checkbox" name="hide_country" class="checkmark">
					    	<label for="hide_country">Hide Country</label>
					    <? } else if($hide_country == 1) { ?>
					    	<input type="checkbox" name="hide_country" class="checkmark" checked>
					    	<label for="hide_country">Hide Country</label>
					    <? } ?>
					   	</div>
					   	<div class="check-container">
					   	<? if($hide_gender == 0) { ?>
					     	<input type="checkbox" name="hide_gender"class="checkmark">
					     	<label for="hide_gender">Hide Gender</label>
					    <? } else if($hide_gender == 1) { ?>
					    	<input type="checkbox" name="hide_gender"class="checkmark" checked>
					     	<label for="hide_gender">Hide Gender</label>
					    <? } ?>
					   	</div>
					   	<div>
					   	<? if($hide_birthday == 0) { ?>
					     	<input type="checkbox"  name="hide_birthday" class="checkmark">
					     	<label for="hide_birthday">Hide Birthday</label>
					    <? } else if($hide_birthday == 1) { ?>
					    	<input type="checkbox"  name="hide_birthday" class="checkmark" checked>
					     	<label for="hide_birthday">Hide Birthday</label>
					    <? } ?>
					   	</div>
					</div>
					<div id="cabinet-info">
					   	<div class="var-cabinet">
					    	<p class="cabinet-info-text" id="var" style="margin: auto 0;">User ID:</p>
					     	<textarea placeholder="<?php echo $user_id; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="user_id" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $user_id; ?></textarea>
					   	</div>
					   	<div class="var-cabinet">
						  	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Nickname:</p>
						  	<?php     
						        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
						        //     update_info(1);
						        // }   
					        ?>
						  	<textarea placeholder="<?php echo $nickname; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="nickname" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;"><?php echo $nickname; ?></textarea>
					   	</div>
						   	<div class="var-cabinet" style="margin-top: 10px; margin-bottom: 10px;">
						      	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Role:</p>
						      	<?php if($role == 1) { ?>
						      		<h1 class='titlemoto' style='color: white'><a class='user-link-user' style="">User</a></h1>
				                <?php } else if ($role == 2) { ?>
				                	<h1 class='titlemoto' style='color: white'><a class='user-link-moderator' style="	animation: glow 2s ease-in-out infinite alternate;">Moderator</a></h1>
				                <?php } else if ($role == 3) { ?>
				                	<h1 class='titlemoto' style='color: white'><a class='user-link-developer' style="animation: 2s pulse infinite;">Developer</a></h1>
				                <?php } else if ($role == 4) { ?>
				                	<h1 class='titlemoto' style='color: white'><a class='user-link-star' style="	animation: 2s popout infinite;">Star</a></h1>
				                <?php } else if ($role == 5) { ?>
				                	<h1 class='titlemoto' style='color: white'><a class='user-link-honored-user' style="	 	animation-name: spin, spin-depth; animation-timing-function: linear; animation-iteration-count: infinite; animation-duration: 6s;">Honored User</a></h1>
				                <?php } else if ($role == 13) { ?>
				                	<h1 class='titlemoto' style='color: white'><a class='user-link-secret' style="		animation: text-shadow 1s ease-in-out infinite;">Secret</a></h1>
				                <?php } ?>
						   	</div>
					   	<div class="var-cabinet">
					     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">About Me:</p>
					     	<?php     
						        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
						        //     update_info(2);
						        // }   
					        ?>
					     	<textarea placeholder="<?php echo $about_me; ?>" rows="1" cols="1" maxlength="500" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" onload="auto_grow(this);" name="about_me" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;"><?php echo $about_me; ?></textarea>
					   	</div>
					   	<div style="margin-top: 20px; margin-bottom: 20px">
					   		<p align="center" class="titlemoto" id="cabinet-count" style="color: white;" style="margin-top: 20px; margin-bottom: 20px; "><span id="current">0</span> / <span id="maximum">500</span></p>
					   	</div>
					   	<div class="var-cabinet">
					     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Registration Date:</p>
					     	<textarea placeholder="<?php echo $registration_date; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="registration_date" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $registration_date; ?></textarea>
					   	</div>
					   	<hr class="hr-cabinet">
					   	<p class="cabinet-info-text" style="text-align: center;">Another Useful Information</p>
					   	<div class="var-cabinet">
					     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Email:</p>
					     	<?php     
						        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
						        //     update_info(3);
						        // }   
					        ?>
					     	<textarea placeholder="<?php echo $email; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="email" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;"><?php echo $email; ?></textarea>
					   	</div>
					   	<div class="var-cabinet">
					     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Country:</p>
					     	<div class="custom-textarea">
					     		<?php     
							        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
							        //     update_info(4);
							        // }   
					        	?>
					     		<textarea placeholder="<?php echo $country; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="country" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $country; ?></textarea>
							  	<select id="countrySelect" class="dropdown" onchange="countryUpdateInput(this);">
							  		<option value="" selected disabled hidden><---Choose Wisely---></option>
									<option value="AF">Afghanistan</option>
									<option value="AX">Åland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
									<option value="AD">Andorra</option>
									<option value="AO">Angola</option>
									<option value="AI">Anguilla</option>
									<option value="AQ">Antarctica</option>
									<option value="AG">Antigua and Barbuda</option>
									<option value="AR">Argentina</option>
									<option value="AM">Armenia</option>
								    <option value="AW">Aruba</option>
								    <option value="AU">Australia</option>
								    <option value="AT">Austria</option>
								    <option value="AZ">Azerbaijan</option>
									<option value="BS">Bahamas</option>
									<option value="BH">Bahrain</option>
									<option value="BD">Bangladesh</option>
									<option value="BB">Barbados</option>
									<option value="BY">Belarus</option>
									<option value="BE">Belgium</option>
									<option value="BZ">Belize</option>
									<option value="BJ">Benin</option>
									<option value="BM">Bermuda</option>
									<option value="BT">Bhutan</option>
									<option value="BO">Bolivia</option>
									<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
									<option value="BA">Bosnia and Herzegovina</option>
									<option value="BW">Botswana</option>
									<option value="BV">Bouvet Island</option>
									<option value="BR">Brazil</option>
								    <option value="IO">British Indian Ocean Territory</option>
									<option value="BN">Brunei Darussalam</option>
									<option value="BG">Bulgaria</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="KH">Cambodia</option>
									<option value="CM">Cameroon</option>
									<option value="CA">Canada</option>
									<option value="CV">Cape Verde</option>
									<option value="KY">Cayman Islands</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="CL">Chile</option>
									<option value="CN">China</option>
									<option value="CX">Christmas Island</option>
									<option value="CC">Cocos (Keeling) Islands</option>
									<option value="CO">Colombia</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, Democratic Republic of the</option>
									<option value="CK">Cook Islands</option>
									<option value="CR">Costa Rica</option>
									<option value="CI">Côte d'Ivoire</option>
									<option value="HR">Croatia</option>
									<option value="CU">Cuba</option>
									<option value="CW">Curaçao</option>
									<option value="CY">Cyprus</option>
									<option value="CZ">Czech Republic</option>
									<option value="DK">Denmark</option>
									<option value="DJ">Djibouti</option>
									<option value="DM">Dominica</option>
									<option value="DO">Dominican Republic</option>
									<option value="EC">Ecuador</option>
									<option value="EG">Egypt</option>
									<option value="SV">El Salvador</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="EE">Estonia</option>
									<option value="ET">Ethiopia</option>
									<option value="FK">Falkland Islands (Malvinas)</option>
									<option value="FO">Faroe Islands</option>
									<option value="FJ">Fiji</option>
									<option value="FI">Finland</option>
									<option value="FR">France</option>
									<option value="GF">French Guiana</option>
									<option value="PF">French Polynesia</option>
									<option value="TF">French Southern Territories</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GE">Georgia</option>
									<option value="DE">Germany</option>
									<option value="GH">Ghana</option>
									<option value="GI">Gibraltar</option>
									<option value="GR">Greece</option>
									<option value="GL">Greenland</option>
									<option value="GD">Grenada</option>
									<option value="GP">Guadeloupe</option>
									<option value="GU">Guam</option>
									<option value="GT">Guatemala</option>
									<option value="GG">Guernsey</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="GY">Guyana</option>
									<option value="HT">Haiti</option>
									<option value="HM">Heard Island and McDonald Islands</option>
									<option value="VA">Holy See (Vatican City State)</option>
									<option value="HN">Honduras</option>
									<option value="HK">Hong Kong</option>
									<option value="HU">Hungary</option>
									<option value="IS">Iceland</option>
									<option value="IN">India</option>
									<option value="ID">Indonesia</option>
									<option value="IR">Iran, Islamic Republic of</option>
									<option value="IQ">Iraq</option>
									<option value="IE">Ireland</option>
									<option value="IM">Isle of Man</option>
									<option value="IL">Israel</option>
									<option value="IT">Italy</option>
									<option value="JM">Jamaica</option>
									<option value="JP">Japan</option>
									<option value="JE">Jersey</option>
									<option value="JO">Jordan</option>
									<option value="KZ">Kazakhstan</option>
									<option value="KE">Kenya</option>
									<option value="KI">Kiribati</option>
									<option value="KP">Korea, Democratic People's Republic of</option>
									<option value="KR">Korea, Republic of</option>
									<option value="KW">Kuwait</option>
									<option value="KG">Kyrgyzstan</option>
									<option value="LA">Lao People's Democratic Republic</option>
									<option value="LV">Latvia</option>
									<option value="LB">Lebanon</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libya</option>
									<option value="LI">Liechtenstein</option>
									<option value="LT">Lithuania</option>
									<option value="LU">Luxembourg</option>
									<option value="MO">Macao</option>
									<option value="MK">Macedonia, the former Yugoslav Republic of</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="MY">Malaysia</option>
									<option value="MV">Maldives</option>
									<option value="ML">Mali</option>
									<option value="MT">Malta</option>
									<option value="MH">Marshall Islands</option>
									<option value="MQ">Martinique</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MX">Mexico</option>
									<option value="FM">Micronesia, Federated States of</option>
									<option value="MD">Moldova, Republic of</option>
									<option value="MC">Monaco</option>
									<option value="MN">Mongolia</option>
									<option value="ME">Montenegro</option>
									<option value="MS">Montserrat</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="MM">Myanmar</option>
									<option value="NA">Namibia</option>
									<option value="NR">Nauru</option>
									<option value="NP">Nepal</option>
									<option value="NL">Netherlands</option>
									<option value="NC">New Caledonia</option>
									<option value="NZ">New Zealand</option>
									<option value="NI">Nicaragua</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="NU">Niue</option>
									<option value="NF">Norfolk Island</option>
									<option value="MP">Northern Mariana Islands</option>
									<option value="NO">Norway</option>
									<option value="OM">Oman</option>
									<option value="PK">Pakistan</option>
									<option value="PW">Palau</option>
									<option value="PS">Palestinian Territory, Occupied</option>
									<option value="PA">Panama</option>
									<option value="PG">Papua New Guinea</option>
									<option value="PY">Paraguay</option>
									<option value="PE">Peru</option>
									<option value="PH">Philippines</option>
									<option value="PN">Pitcairn</option>
									<option value="PL">Poland</option>
									<option value="PT">Portugal</option>
									<option value="PR">Puerto Rico</option>
									<option value="QA">Qatar</option>
									<option value="RE">Réunion</option>
									<option value="RO">Romania</option>
									<option value="RU">Russian Federation</option>
									<option value="RW">Rwanda</option>
									<option value="BL">Saint Barthélemy</option>
									<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
									<option value="KN">Saint Kitts and Nevis</option>
									<option value="LC">Saint Lucia</option>
									<option value="MF">Saint Martin (French part)</option>
									<option value="PM">Saint Pierre and Miquelon</option>
									<option value="VC">Saint Vincent and the Grenadines</option>
									<option value="WS">Samoa</option>
									<option value="SM">San Marino</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SA">Saudi Arabia</option>
									<option value="SN">Senegal</option>
									<option value="RS">Serbia</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SG">Singapore</option>
									<option value="SX">Sint Maarten (Dutch part)</option>
									<option value="SK">Slovakia</option>
									<option value="SI">Slovenia</option>
									<option value="SB">Solomon Islands</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="GS">South Georgia and the South Sandwich Islands</option>
									<option value="SS">South Sudan</option>
									<option value="ES">Spain</option>
									<option value="LK">Sri Lanka</option>
									<option value="SD">Sudan</option>
									<option value="SR">Suriname</option>
									<option value="SJ">Svalbard and Jan Mayen</option>
									<option value="SZ">Swaziland</option>
									<option value="SE">Sweden</option>
									<option value="CH">Switzerland</option>
									<option value="SY">Syrian Arab Republic</option>
									<option value="TW">Taiwan, Province of China</option>
									<option value="TJ">Tajikistan</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TH">Thailand</option>
									<option value="TL">Timor-Leste</option>
									<option value="TG">Togo</option>
									<option value="TK">Tokelau</option>
									<option value="TO">Tonga</option>
									<option value="TT">Trinidad and Tobago</option>
									<option value="TN">Tunisia</option>
									<option value="TR">Turkey</option>
									<option value="TM">Turkmenistan</option>
									<option value="TC">Turks and Caicos Islands</option>
									<option value="TV">Tuvalu</option>
									<option value="UG">Uganda</option>
									<option value="UA">Ukraine</option>
									<option value="AE">United Arab Emirates</option>
									<option value="GB">United Kingdom</option>
									<option value="US">United States</option>
									<option value="UM">United States Minor Outlying Islands</option>
									<option value="UY">Uruguay</option>
									<option value="UZ">Uzbekistan</option>
									<option value="VU">Vanuatu</option>
									<option value="VE">Venezuela, Bolivarian Republic of</option>
									<option value="VN">Viet Nam</option>
									<option value="VG">Virgin Islands, British</option>
									<option value="VI">Virgin Islands, U.S.</option>
									<option value="WF">Wallis and Futuna</option>
									<option value="EH">Western Sahara</option>
									<option value="YE">Yemen</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
							  	</select>
							</div>
					   	</div>
					   	<div class="var-cabinet">
					     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Gender:</p>
					     	<div class="custom-textarea">
					     		<?php     
							        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
							        //     update_info(5);
							        // }   
					        	?>
					     		<textarea placeholder="<?php echo $gender; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="gender" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $gender; ?></textarea>
							  	<select id="genderSelect" class="dropdown" onchange="genderUpdateInput(this);">
							  		<option value="" selected disabled hidden><---Choose Wisely---></option>
							    	<option value="male">Male</option>
							    	<option value="female">Female</option>
							    	<option value="other">Other</option>
							  	</select>
							</div>
					   	</div>
					   	<div class="var-cabinet">
					     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Birthday:</p>
					     	<?php     
						        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
						        //     update_info(6);
						        // }   
					        ?>
					     	<textarea placeholder="<?php echo $birthday; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" name="birthday" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;"><?php echo $birthday; ?></textarea>
					   	</div>
					</div>
				</div>
				<?php     
				    // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
				    //     update_info(8);
				    // }   
			    ?>
				<div class="trio-menudiv" style="margin-bottom: 15px; margin-top: 15px;">
					<div class="formmenu">
			   			<input type="submit" name="update_info" value="Update Info" class="button" id="button-a" onclick="handleFormSubmit(event, 'update_info');" style="margin: auto; display: block;">
					</div>
					<form action="rules.php" class="formmenu">
			    		<button type="submit" class="button" id="button-b">Rules</button>
					</form>
					<form action="sign_out_redirect.php" class="formmenu">
	            		<button type="submit" class="button" id="button-c">Sign Out</button>
	        		</form>
				</div>
			</div>
		</form>

	    <?php } else if ($login_key != $user_login_key) { ?>

	    <div class="cabinet-div" style="padding-top: 20px; padding-bottom: 20px;">
	    	<p align="center" class="title" style="color: white">Welcome, to the domain of mighty...</p>
	    	<div class="main-cabinet-info">
			<img src='../img/profiles/<?php echo $user_photo; ?>' id="cabinet-avatar">
		<div id="cabinet-info">
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">User ID:</p>
		     	<textarea placeholder="<?php echo $user_id; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $user_id; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
			  	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Nickname:</p>
			  	<textarea placeholder="<?php echo $nickname; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $nickname; ?></textarea>
		   	</div>
		   	<div class="var-cabinet" style="margin-top: 10px; margin-bottom: 10px;">
		      	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Role:</p>
		      	<?php if($role == 1) { ?>
		      		<h1 class='titlemoto' style='color: white'><a class='user-link-user' style="">User</a></h1>
                <?php } else if ($role == 2) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-moderator' style="	animation: glow 2s ease-in-out infinite alternate;">Moderator</a></h1>
                <?php } else if ($role == 3) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-developer' style="animation: 2s pulse infinite;">Developer</a></h1>
                <?php } else if ($role == 4) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-star' style="	animation: 2s popout infinite;">Star</a></h1>
                <?php } else if ($role == 5) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-honored-user' style="	 	animation-name: spin, spin-depth; animation-timing-function: linear; animation-iteration-count: infinite; animation-duration: 6s;">Honored User</a></h1>
                <?php } else if ($role == 13) { ?>
                	<h1 class='titlemoto' style='color: white'><a class='user-link-secret' style="		animation: text-shadow 1s ease-in-out infinite;">Secret</a></h1>
                <?php } ?>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">About Me:</p>
		     	<textarea placeholder="<?php echo $about_me; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $about_me; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Registration Date:</p>
		     	<textarea placeholder="<?php echo $registration_date; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $registration_date; ?></textarea>
		   	</div>
		   	<hr class="hr-cabinet">
		   	<p class="cabinet-info-text" style="text-align: center;">Another Useful Information</p>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Email:</p>
		     	<textarea placeholder="<?php echo $email; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $email; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Country:</p>
		     	<textarea placeholder="<?php echo $country; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $country; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Gender:</p>
		     	<textarea placeholder="<?php echo $gender; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $gender; ?></textarea>
		   	</div>
		   	<div class="var-cabinet">
		     	<p class="cabinet-info-text" id="var" style="margin: auto 0;">Birthday:</p>
		     	<textarea placeholder="<?php echo $birthday; ?>" rows="1" cols="1" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" class="input-cabinet" id="varinfo" style="resize: none; overflow: hidden; border-bottom: 3px dotted white; width: 100%; box-sizing:border-box;" readonly><?php echo $birthday; ?></textarea>
		   	</div>
		</div>
	      </div>

	    <?php } ?>

	    <div>
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