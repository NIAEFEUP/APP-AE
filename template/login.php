<?php 
	if(isset($_SESSION['errors']))
		echo $_SESSION['errors'];
	
?>

<form role="form" action="actions/action_logIn.php" method="POST">
	<div class="form-group">
		<label for="password">Password</label> 
		<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
	</div>
	<button type="submit" class="btn btn-default">Login</button>
</form>
<form role="form" action="changepass.php" method="POST">
	<button type="submit" class="btn btn-default">Change Password</button>
</form>