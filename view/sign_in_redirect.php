<?php

    require '../function/function.php';

    $pdo = require '../function/connect.php';

    if(!$pdo) {
        echo "Uh Oh!";
        die();
    }

	$login_key = login_key_creator();
	$user_id = $_GET['userId'];

	global $pdo;

	$sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
	$sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

	$sql_key = "UPDATE users SET login_key = '$login_key' WHERE user_id = '$user_id'";

    error_log($sql_fkc_disable);
    $pdo->exec($sql_fkc_disable);
    error_log($sql_key);
    $pdo->exec($sql_key);
    error_log($sql_fkc_enable);
    $pdo->exec($sql_fkc_enable);
?>
<script type="text/javascript">
    window.location.href = 'forum.php';
</script>