<?php include_once('header.php'); ?>


<form action="search_contacts.php" method="post">
    <input type="text" id="search" name="search" placeholder="Procurar contactos..."/>
    <input type="submit" value=">>" />
</form>
<div id="output"></div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="search_contacts.js"></script>

<?php include_once('footer.php'); ?>
