<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}
if (! isset ( $_POST ['name'] )) {
	echo 'something not set';
	return;
}

if (! preg_match ( '/^[a-z0-9]{1,20}$/i', $_POST ['name'] )) {
	echo 'name not valid';
	return;
}
$name = $_POST ['name'];

$db = new PDO ( 'sqlite:../AE.db' );
$stmt = $db->prepare ( 'INSERT INTO Room (Name) VALUES(?)' );

$stmt->execute ( array (
		htmlentities ( $name )
) );

echo 'sucess';

?>	