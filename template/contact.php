<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}

if (! isset ( $_GET ['id'] )) {
	echo 'something not set';
	return;
}
if(! preg_match ( '/^[0-9]{1,20}$/i', $_GET ['id'] )){
	echo 'id not valid';
}
$id= $_GET['id'];

$db = new PDO ( 'sqlite:./AE.db' );
$stmt = $db->prepare ( 'SELECT * FROM "Contact" WHERE "ContactId" = ?' );
$stmt->execute ( array (
		htmlentities($id)
) );
$result = $stmt->fetchObject();
?>
	<p><?php echo $result->Name;?></p>
	<p><?php echo $result->Email;?></p>
	<p><?php echo $result->Address;?></p>
	<p><?php echo $result->Phone;?></p>
	<p><?php echo $result->Details;?></p>



