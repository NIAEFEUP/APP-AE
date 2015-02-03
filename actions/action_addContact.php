<?php
session_start ();
//TODO falta por expressoes regulares nos inputs
function addContact() {
	if (! isset ( $_SESSION ['userId'] )) {
		//echo 'u sure did it ;), nice try';
		//return;
	}
	
	if (! isset ( $_POST ['name'] )) {
		echo 'no contact';
		return;
	}
	
	if(! isset($_POST ['email']))
		$email = 'no entry';
	
	if(! isset($_POST ['address']))
		$address = 'no entry';
	
	if(! isset($_POST ['phone']))
		$phone = '0';
	
	if(! isset($_POST ['details']))
		$details = 'no entry';
	
	$db = new PDO ( 'sqlite:../AE.db' );
	
	$name = $_POST ['name'];
	$email = $_POST ['email'];
	$address = $_POST ['address'];
	$phone = $_POST ['phone'];
	$details = $_POST ['details'];
	
	$stmt = $db->prepare ( 'INSERT INTO Contact (Name,Email,Address,Phone,Details) Values (?, ?, ?, ?,?)' );
	$stmt->execute ( array (
			htmlentities ( $name ),
			htmlentities ( $email ),
			htmlentities ( $address ),
			htmlentities ( $phone ),
			htmlentities ( $details ) 
	) );
	
	echo 'sucess';
}

addContact ();
?>