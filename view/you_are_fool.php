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
  <title>You Are Fool...</title>
  <meta charset="utf-8"/>

  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="../js/flashlight.js"></script>
  <script type="text/javascript">

      window.addEventListener('DOMContentLoaded', function() {

          var audio = document.getElementById('ambient');
          audio.volume = 0.1;

          var audioElements = [
            document.getElementById('sound_1'),
            document.getElementById('sound_2'),
            document.getElementById('sound_3')
          ];

          var currentIndex = -1;
          var currentAudio = null;

          function playRandomMusicWithDelay() {
            if (currentAudio) {
              currentAudio.pause();
              currentAudio.currentTime = 0;
            }

            currentIndex = Math.floor(Math.random() * audioElements.length);
            var audioElement = audioElements[currentIndex];
            audioElement.volume = 0.1;
            var delay = Math.random() * 20000;

            setTimeout(function() {
              audioElement.play()
                .catch(function(error) {
                  console.log('Failed to play audio:', error);
                })
                .then(function() {
                  currentAudio = audioElement;
                  setTimeout(playRandomMusicWithDelay, audioElement.duration * 1000);
                });
            }, delay);
          }

          window.addEventListener('click', function() {
              audio.play();
              playRandomMusicWithDelay();
          });

          var photos = document.querySelectorAll('.stranger_horror_container img');
          var currentIndex = getRandomInt(0, photos.length - 1);

          function showNextPhoto() {
              var randomDelay = getRandomInt(100, 300);

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

<body style="background-color: #212121">

  <audio id="ambient" src="../addons/scary_ambient.mp3" loop autoplay></audio>
  <audio id="sound_1" src="../addons/scary_laugh.mp3" loop></audio>
  <audio id="sound_2" src="../addons/scary_noise.mp3" loop></audio>
  <audio id="sound_3" src="../addons/scary_stab.mp3" loop></audio>
	<div>
		<h1 align="center" id="scary_text">You Are Fool... You Making It Just WORSE!!!</h1>
    <div class="stranger_horror_container">
          <img src="../img/secret_1/Stranger5.png">
          <img src="../img/secret_1/Stranger4.png">
          <img src="../img/secret_1/Stranger3.png">
          <img src="../img/secret_1/Stranger2.png">
          <img src="../img/secret_1/Stranger1.png">
    </div>
	</div>
</body>
</html>