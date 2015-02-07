<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}

if (! isset ( $_GET ['contact'] )) {
	echo 'something not set';
	return;
}

$db = new PDO ( 'sqlite:../AE.db' );
$stmt = $db->prepare ( 'SELECT * FROM "Contact" WHERE "Name" LIKE ?' );
$stmt->execute ( array (
		'%' . $_GET ['contact'] . '%' 
) );
$result = $stmt->fetchAll ();
foreach ( $result as $row ) {
	?>
<a href="?pagina=contacto&id=<?php echo $row['ContactId']?>">
<?php echo $row['Name']?>
</a>
<br>
<?php  }?>