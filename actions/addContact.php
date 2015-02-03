<?php

session_start();

if (! isset ( $_SESSION ['userId'] )) {
	echo 'u sure did it ;), nice try';
	return;

if(! isset($_POST['name'])) {
	
	echo 'no contact';
}
	
$db = new PDO ( 'sqlite:../AE.db' );


$name= $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$details= $_POST['details'];

$stmt = $db->prepare('INSERT INTO Contact (Name,Email,Address,Phone,Details) Values (?, ?, ?, ?,?)');
$stmt->execute ( array (
		htmlentities ( $name ),
		htmlentities ( $email ),
		htmlentities ( $address),
		htmlentities ( $phone),
		htmlentities ( $details)
) );

echo 'sucess';
?>