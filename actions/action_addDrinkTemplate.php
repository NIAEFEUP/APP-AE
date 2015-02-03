<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	//echo 'u sure did it ;), nice try';
	//return;
}
if (! isset ( $_POST ['name'] ) || ! isset ( $_POST ['brand'] ) || ! isset ( $_POST ['priU'] ) || ! isset ( $_POST ['priP'] )) {
	
	echo 'something not set';
	return;
}

if(!preg_match('/^[a-z]{2,20}$/i',$_POST['name'])){
	echo 'name not valid';
	return;
}
elseif(!preg_match('/^[a-z]{2,20}$/i',$_POST['brand'])){
	echo 'brand not valid';
	return;
}
elseif(!preg_match('/^[0-9]{1,4}$/i',$_POST['priU'])){
	echo 'price per unit not valid';
	return;
}
elseif(!preg_match('/^[0-9]{1,4}$/i',$_POST['priP'])){
	echo 'price per pack not valid';
	return;
}


$name= $_POST['name'];
$brand= $_POST['brand'];
$priU= $_POST['priU'];
$priP= $_POST['priP'];


$db = new PDO ( 'sqlite:../AE.db' );
$stmt = $db->prepare ( 'INSERT INTO "Drink Template" (Name,Brand,"P/U","P/P") VALUES(?,?,?,?)' );

$stmt->execute ( array (
		htmlentities($name),
		htmlentities($brand),
		htmlentities($priU),
		htmlentities($priP)
) );

echo 'sucess';

?>