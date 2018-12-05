<!DOCTYPE html>
<html>
<head>
	<title>Sign Up to Japanese Lexicon</title>
</head>
<body>
	<center>
		<h1>Sign Up</h1>
		<form method="post" action="user_signup.php">
			<p>Username: 
				<input type="text" name="username"></p>
			<p>Password:
				<input type="text" name="password"></p>
			<input type="submit">
		</form>
		<?php if(isset($_GET['msg'])): ?>
    		<p><?php echo $_GET['msg']; ?></p>
		<?php endif; ?>
		<p><a href="http://localhost">Back to HomePage</a></p>
	</center>
</body>
