<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
</head>
<body>
<div >
</div>
<div>
	<h3 >Login Page With Captcha</h3>
	<hr style="border-top:1px dotted #ccc;"/>
		
	<div >
		<form method="POST">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" required/>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required/>
	</div>
		<h3>Solve Captcha</h3>
		<center><img src="captcha.php" /></center>
		<br/>
		<br/>
		<div class="form-group">
			<input type="text" class="form-control" name="captcha" required/>
		</div>
		<?php include 'login.php'?>
		<center><button name="login" > login </button></center>
		</form>
		</div>	
	</div>
</body>
</html>