<?php

/* Завдання № 1_1 */

	require 'config.php';

	if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
    }

	try {
		$pdo = new PDO($dsn, $user, $password);

		if($pdo) {
			//echo "Connected to the $db database succesfully!";
			error_log ("Connected to the $db database succesfully!");
			return $pdo; 
		}
	} catch(PDOexeption $e) {
		echo $e->getMessage();
		return null;
	}

?>