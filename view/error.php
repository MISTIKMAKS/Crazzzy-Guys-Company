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
  <title>You Shouldn't Be Here...</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="gradient" style="background-image: url('../img/error.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-size: 100% 100%;">

  <form action="main_page.php" class="formmenu">
    <button type="submit" class="button" style="background: #202020;">Go Back...</button>
  </form>

</body>
</html>