<?php
session_start ();

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
	else if (!filter_var($_POST ['email'], FILTER_VALIDATE_EMAIL))
	{
		echo 'email not valid';
		return;
	}
	
	if(! isset($_POST ['address']))
		$address = 'no entry';
	else if (! preg_match ( '/^[a-z0-9]{1,200}$/i', $_POST ['address'] ))
	{
		echo 'address not valid';
		return;
	}
	
	if(! isset($_POST ['phone']))
		$phone = '0';
	else if (! preg_match ( '/^[0-9]{9}$/i', $_POST ['phone'] ))
	{
		echo 'phone not valid';
		return;
	}
	
	
	if(! isset($_POST ['details']))
		$details = 'no entry';
	else if (! preg_match ( '/^[a-z0-9]{1,500}$/i', $_POST ['details'] ))
	{
		echo 'detail not valid';
		return;
	}
	
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