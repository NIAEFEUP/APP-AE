<?php
echo 1;
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}

if (! isset ( $_POST ['date'] ) || ! isset ( $_POST ['details'] )) {
	echo 'something not set';
	return;
}

if (! preg_match ( '/^[a-z0-9]{3,50}$/i', $_POST ['details'] )) {
	echo 'details not valid';
	return;
}
elseif (! preg_match ( '/^(([0-2]?[0-9]|3[0-1])-([1-9]|1[0-2])-(([2-3][0-9])?[0-9]{2})$/i', $_POST ['date'] )) {
	echo 'date not valid';
	return;
}

$db = new PDO ( 'sqlite:../AE.db' );
$stmt = $db->prepare ( 'INSERT INTO Reminder (Date,Details) VALUES(?,?)' );

$stmt->execute ( array (
		htmlentities ( $date),
		htmlentities ( $details)
) );

echo 'sucess';

?>	