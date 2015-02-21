<?php

$db = new PDO ( 'sqlite:../AE.db' );

$stmt = $db->prepare ( 'DELETE FROM "Contact" WHERE "ContactId" = ?' );
$stmt->execute ( array (
		htmlentities($_POST['id'])
) );
?>