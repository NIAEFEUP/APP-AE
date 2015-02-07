<?php 

	 $db = new PDO ( 'sqlite:../AE.db' );	
	 $pass = $db->query("SELECT hash FROM password");

	 if(password_verify($postData['password'], $pass))
	 {
	 	$_SESSION['username'] = poweredByNI;
	 	$_SESSION['success'] = array(
	 			"You've been successfully logged in."
	 	);
	 	header("Location: /index.php/");
	 	exit();
	 } else {
	 	$_SESSION['errors'] = array('Passwords do not match.');
	 	header("Location: template/login.php/");
	 	exit();
	 }
	 
?>