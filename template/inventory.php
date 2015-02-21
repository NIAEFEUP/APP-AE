<?php
session_start ();
if (! isset ( $_SESSION ['userId'] )) {
	// echo 'u sure did it ;), nice try';
	// return;
}

$db = new PDO ( 'sqlite:./AE.db' );

$stmt = $db->prepare ( 'SELECT * FROM Room ' );
$stmt->execute ();
$itemcnt=0;
while ( $room = $stmt->fetchObject () ) {
	?>
<h3><?php echo $room->Name;?></h3>
<?php
	
	$id = $room->RoomId;
	$stmt2 = $db->prepare ( 'SELECT * FROM Item WHERE RoomId = ? ' );
	$stmt2->execute ( array (
			$id 
	) );
	
	while ( $item = $stmt2->fetchObject () ) {
		?>
		
		<span id="R<?php echo $room->RoomId;?>I<?php echo $itemcnt;?>" ><?php echo $item->Name?> |
		<?php echo $item->Details?> |
		<?php echo $item->Amount?>
		<input type="number" placeholder="+-"/>
		<button>Change</button>
		</span>
	<?php
	$itemcnt++;
	}
	
	$itemcnt=0;
}
?>	