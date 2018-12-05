<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Word is...</title>
</head>
<body>
	<center>
		<h1> JAPANESE: <?php echo $_SESSION['word']->japanese; ?> </h1>
		<h1> GREEK: <?php echo $_SESSION['word']->greek; ?> </h1>
		<p> Subject: <?php echo $_SESSION['word']->subject; ?> </p>
		<p><a href="../afterlogin.php">Go Back</a></p>
	</center>
</body>
</html>
