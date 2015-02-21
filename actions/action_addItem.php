<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}
if (! isset ( $_POST ['name'] ) || ! isset ( $_POST ['details'] ) || ! isset ( $_POST ['amount'] ) || ! isset ( $_POST ['roomId'] ) || ! isset ( $_POST ['drinkStockId'] )) {
	echo 'something not set';
	return;
}

if (!preg_match ( '/^[a-z0-9\ ]{1,20}$/i', $_POST ['name'] )) {
	echo 'name not valid';
	return;
}
if (!preg_match ( '/^[a-z0-9\ ]{1,20}$/i', $_POST ['details'] )) {
	echo 'name not valid';
	return;
}
if (!preg_match ( '/^[0-9]{1,20}$/i', $_POST ['amount'] )) {
	echo 'name not valid';
	return;
}
if (!preg_match ( '/^[0-9]{1,10}$/i', $_POST ['roomId'] )) {
	echo 'name not valid';
	return;
}
if (!preg_match ( '/^[0-9]{1,10}$/i', $_POST ['drinkStockId'] )) {
	echo 'name not valid';
	return;
}


//TODO check if Id's exist
$name = $_POST ['name'];
$details = $_POST ['details'];
$amount = $_POST ['amount'];
$roomId = $_POST ['roomId'];
$drinkStockId = $_POST ['drinkStockId'];

$db = new PDO ( 'sqlite:../AE.db' );
$stmt = $db->prepare ( 'INSERT INTO Item (Name,Details,Amount,RoomId,DrinkStockId) VALUES(?,?,?,?,?)' );

$stmt->execute ( array (
		htmlentities ( $name ),
		htmlentities ( $details ),
		htmlentities ( $amount ),
		htmlentities ( $roomId ),
		htmlentities ( $drinkStockId )
) );

echo 'sucess';

?>