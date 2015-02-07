<?php 

	 $db = new PDO ( 'sqlite:../AE.db' );	

	 if($postData['password'] === $postData['password_confirmation'])
	 {
	 	$_SESSION['username'] = poweredByNI;
	 	$hashPash = password_hash($postData['password'] , PASSWORD_DEFAULT);

	 	$db->query("UPDATE password SET hash = ?",
	 			array($postData['username']));
	 	$_SESSION['success'] = array(
	 			"You've successfully changed the password."
	 	);
	 	header("Location: /index.php/");
	 	exit();
	 } else {
	 	$_SESSION['errors'] = array('Passwords do not match.');
	 	header("Location: template/changepass.php/");
	 	exit();
	 }
	 
?>