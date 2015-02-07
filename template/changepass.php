<?php 
	if(isset($_SESSION['errors']))
		echo $_SESSION['errors'];
	
?>

<form role="form" action="actions/action_changePassword.php" method="POST">
	<div class="form-group">
		<label for="password">Password</label> 
		<input type="password" class="form-control" name="password" id="password" placeholder="Enter new password">
	</div>
	<div class="form-group">
		<label for="password2">Confirm Password</label> 
		<input type="password" class="form-control" name="password" id="password2" placeholder="Confirm new password">
	</div>
	<button type="submit" class="btn btn-default">Login</button>
</form>