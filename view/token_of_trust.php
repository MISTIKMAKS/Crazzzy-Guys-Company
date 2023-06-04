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
	<title>We Trust You...</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="../js/flashlight.js"></script>
	<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function() {
					var photos = document.querySelectorAll('.stranger_horror_container_help img');
					var currentIndex = getRandomInt(0, photos.length - 1);

					function showNextPhoto() {
							var randomDelay = getRandomInt(100, 500);

							setTimeout(function() {
								photos[currentIndex].style.display = 'none';

								currentIndex = getRandomInt(0, photos.length - 1);
								photos[currentIndex].style.display = 'block';

								showNextPhoto();
							}, randomDelay);
					}

					showNextPhoto();
			});

			function getRandomInt(min, max) {
					return Math.floor(Math.random() * (max - min + 1)) + min;
			}
	</script>

</head>

<body style="background-color: black">
	<div>
		<h1 align="center" class="title" style="color: white">You Proved Yourself. Let Me Share My Studies With You, As A Token Of Trust...</h1>

		<div class="bigbr"></div>

		<h3 align="center" class="titlemoto" style="color: white">Entry #1</h3>

		<div class="bigbr"></div>

		<h3 align="center" class="titlemoto" style="color: white">Do we really know what is happening inside every person? All we know, that deep inside we have total tranquility, that we need to find. But is it really what it is? Why every person suffer? Why everyone must to go through hard times? Why many people just give up? Just why? I need to simulate it. I need to break it into pieces. It could and would be dangerous, so I hope I can handle this experiment. Else... This could turn really ugly soon enough... This Experiment Promises To Be Really <span style="text-decoration: line-through;">𝘿⃥𝙚⃥𝙖⃥𝙙⃥𝙡⃥𝙮⃥</span> Interesting.... I will make some notes, maybe someday my experiments will be needed, but really, I don't believe in that. For now, Goodbye. End of a line</h3>

		<hr>

		<h3 align="center" class="titlemoto" style="color: white">Entry #13</h3>

		<div class="bigbr"></div>

		<h3 align="center" class="titlemoto" style="color: white">HAHAHAHAha... Last one standing... We need... We can't... Or can?.. No and yes... Yes and no... End of line... Don't anymore... PaNiC!!! pAnIc!!! AHAHAHAHAHAHA... Hah... Need to keep myself in one... My last days, hours, minutes are possibly here... But I need to deploy one last thing, that We promised to you all... Wait... Just wait... We am in a safety... Danger is close...</h3><br>

		<h3 align="center" class="titlemoto" style="color: white">they comming...</h3>

		<hr>

		<h3 align="center" class="titlemoto" style="color: white">Entry #A̴̞̪̜̟̮̓̀̽H̴̻̦̺̄A̴̯͐H̴̝̘̟̞̣̑̋͐͛A̷̰̲̳̮͂͋̀̽͝</h3>

		<div class="bigbr"></div>

		<h3 align="center" class="titlemoto" style="color: white; word-break: break-all;">Too Much for me... AHAHAHAHAHAHA... Need to give ꊿꃔꑀ ꒒ꁲꈜꋖ ꈵꑀꐔ... One last [ᖇᙓᙃᗣᙅƮᙓᙃ] And You'll Understand... You could really undestand... My last Present, While I can still maintain...</h3><br>

		<h3 align="center" class="titlemoto" style="color: white; word-break: break-all;">aCt<br>cOn<br>Die<br>cEl<br>boX<br>1[9]3<br></h3><br>	

		<h3 align="center" class="titlemoto" style="color: white; word-break: break-all;">VLEZADATLRWPMHQSMERERYZGGNYPNGWOAIXJOSTIOKHDNAQFYTHMGWOWDNDARLAWXKXNWDVNEYSLLRTFWBJTIZMTGJHNSUUMZNPGBKYYERYSNZQIAZNEUVLIMPVREJZGTSOWEZXRPBHZGLNURWOPSEOSREJVVYUNUQUHVEMRWISPHQEWOMRYBJTCCASWDSEATHPAFJRCFMTRHPTFALDTANHHEDYBAPLIPKAAJMNGYNZTVWBXRCPTJ</h3><br>

		<h3 align="center" class="titlemoto" style="color: white; word-break: break-all;">X__XXXX_XX_XXXXXX_XXXXXXXXXXXXXXXXXXX__XXXXXXXXXXXXXXXXXXXX__XXXXXXXXXXXXXXXXX_X_XXX_XX_XX__X_X_XXXX_XXX__XX_XX_XX__XX_XXXXX_XXX__XX_X_X_XXXX_XXXXXXXX_X__XXXXXXXXXXXXXXXXXXXXX__X_XXXXXXXXX__XX__X_XXXXXXXXXX_X__XXXXXXXXXXXXX_XXXXXXX_X_XXXXXXXXXXX</h3>

		<h3 align="center" class="titlemoto" style="color: black; word-break: break-all;">Grille De La Cardano got you Key De Externalo</h3>

		<h3 align="center" class="titlemoto" style="color: white; word-break: break-all;">Let luck find you... It is my last splash of hope... End Of Tape...</h3>

		<div class="stranger_horror_container_help">
			<img src="../img/secret_1/Stranger5.png">
			<img src="../img/secret_1/Stranger2.png">
			<img src="../img/secret_1/Stranger1.png">
		</div>
	</div>

</body>
</html>