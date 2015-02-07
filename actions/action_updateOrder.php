<?php

function updateOrder($orderID)
{
	$db = new PDO ( 'sqlite:../AE.db' );
	
	$stmt = $db->prepare('UPDATE Order SET State = 1 WHERE OrderID = ? ');
	$stmt->execute(array($orderID));
	
}

updateOrder($_GET['oderID']);

?>