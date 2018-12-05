<!DOCTYPE html>
<html>
<head>
	<title>Japanese Lexicon</title>
</head>
<body>
	<br />
	<center>
		<h1>Welcome to Japanese Lexicon</h1>
		<img src="flags.jpg" alt="logo">
	</center>
	<br />
	<hr />
	<br />
	<h2 align="center">Log in to access</h2>
	<center><form method="post" action="user_login.php">
		<p>Username
			<input type="text" name="username" >
		</p>
		<p>Password
			<input type="text" name="password" >
		</p>
		<p><input type="submit"></p>
	</form>
	<?php if(isset($_GET['msg'])): ?>
    <p><?php echo $_GET['msg']; ?></p>
	<?php endif; ?>
	<br />
	<hr />
	<br />
	<h2><a href="signup.php">Create an account</a></h2>
	</center>
</body>
</html>