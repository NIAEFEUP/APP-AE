<?php

function deleteOrder($orderID)
{
	$db = new PDO ( 'sqlite:../AE.db' );

	$stmt = $db->prepare('DELETE Order WHERE OrderID = ? ');
	$stmt->execute(array($orderID));

}

deleteOrder($_GET['oderID']);

?>