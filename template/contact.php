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
echo  "<p hidden id='contact_id'>".$_GET['id']."</p>";
?>

<button onclick="myFunction()">Try it</button>
<button id="delete" onclick="Delete()">Apagar</button>


<p>Nome:<?php echo $result->Name;?></p><br>
<p>Email:<?php echo $result->Email;?></p><br>
<p>Morada:<?php echo $result->Address;?></p><br>
<p>Telemóvel:<?php echo $result->Phone;?></p><br>
<p>Observações:<?php echo $result->Details;?></p>
<div id="inset_form"></div>
<script>
function Delete() {
    if (confirm("Apagar permanentemente contacto?") == true) {
        $('#inset_form').html('<form action="actions/action_deleteContact.php" name="vote" method="post" style="display:none;"><input type="text" name="id"  value="' + document.getElementById('contact_id').innerHTML + '"/></form>');
        document.forms['vote'].submit();
    }
    return;
}
</script>