<?php
echo "here";
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}

$db = new PDO ( 'sqlite:./AE.db' );

$stmt = $db->prepare ( 'SELECT * FROM Room ' );
$stmt->execute ( array (
		htmlentities ( $id ) 
) );
while ( $room = $stmt->fetchObject () ) {?>
<p>Room : <?php echo $room->RoomId;?></p>
<?php
}
?>	