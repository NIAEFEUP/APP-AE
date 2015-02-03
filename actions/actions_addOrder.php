<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}
if (!isset($_GET['price']) || !isset($_GET['date']) || ! isset ( $_GET ['state'] ) || ! isset ( $_GET ['contact'] )) {
	echo 'something not set';
	return;
}

if (! preg_match ( '/^[0-9]{0,20}(\,|\.)?[0-9]{1,6}$/i', $_GET ['price'] )) {
	echo 'price not valid';
	return;
}
elseif (! preg_match ( '/^(([0-2]?[0-9]|3[0-1])-([1-9]|1[0-2])-(([2-3][0-9])?[0-9]{2})$/i', $_GET ['date'] )) {
	echo 'date not valid';
	return;
}
elseif (! preg_match ( '/^[a-z]{3,20})$/i', $_GET ['state'] )) {
	echo 'state not valid';
	return;
}
elseif (! preg_match ( '/^[a-z]{2,20})$/i', $_GET ['contact'] )) {
	echo 'contact not valid';
	return;
}
$db = new PDO ( 'sqlite:../AE.db' );

$stmt = $db->prepare ( 'SELECT  Room (Name) VALUES(?)' );




$price = $_GET ['price'];
$date = $_GET ['date'];
$state = $_GET ['state'];

$stmt = $db->prepare ( 'INSERT INTO Room (Name) VALUES(?)' );

$stmt->execute ( array (
		htmlentities ( $name )
) );

echo 'sucess';

?>	