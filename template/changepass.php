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
		<label for="password_confirmation">Confirm Password</label> 
		<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm new password">
	</div>
	<button type="submit" class="btn btn-default">Login</button>
</form>
<form role="form" action="login.php" method="POST">
	<button type="submit" class="btn btn-default">Log In</button>
</form>