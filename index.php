<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>AEFEUP - Gestor de Stocks</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/header.css" rel="stylesheet">

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<!-- <link href="css/plugins/morris.css" rel="stylesheet"> -->

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/plugins/morris/raphael.min.js"></script> -->
<!-- <script src="js/plugins/morris/morris.min.js"></script> -->
<!-- <script src="js/plugins/morris/morris-data.js"></script> -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div id="wrapper">
<?php
if (! isset ( $_COOKIE ['PHPSESSID'] )) {
	session_set_cookie_params ( 0 );
	session_start ();
	session_regenerate_id ( true );
} else {
	session_start ();
}
include 'template/header.php';
?>
<div id="content"><?php
if (isset ( $_GET ['pagina'] )) {
	if ($_GET ['pagina'] == 'home') {
		include 'template/home.php';
	} elseif ($_GET ['pagina'] == 'addEncomenda') {
		include 'template/addOrder.php';
	} elseif ($_GET ['pagina'] == 'listEncomenda') {
		include 'template/listOrder.php';
	} elseif ($_GET ['pagina'] == 'delEncomenda') {
		include 'template/delOrder.php';
	} elseif ($_GET ['pagina'] == 'inventario') {
		include 'template/inventory.php';
	} elseif ($_GET ['pagina'] == 'historico') {
		include 'template/history.php';
	} elseif ($_GET ['pagina'] == 'calendario') {
		include 'template/calendar.php';
	} elseif ($_GET ['pagina'] == 'criar_contacto') {
		include 'template/create_contact.php';
	} elseif ($_GET ['pagina'] == 'contactos') {
		include 'template/search_contacts.php';
	} elseif ($_GET ['pagina'] == 'contacto') {
		include 'template/contact.php';
	} elseif ($_GET ['pagina'] == 'login') {
		include 'template/login.php';
	}elseif ($_GET ['pagina'] == 'addSala') {
		include 'template/addRoom.php';
	}elseif ($_GET ['pagina'] == 'addItem') {
		include 'template/addItem.php';
	}
	else {
		include '404.html';
	}
} else {
	include 'template/home.php';
}
?></div>
	</div>
</body>
</html>