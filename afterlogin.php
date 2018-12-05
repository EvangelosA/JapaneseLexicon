<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Japanese Lexicon</title>
</head>
<body>
	<br />
	<center>
	<h1>Japanese Lexicon</h1>
	<p> Logged in as <?php echo $_SESSION['user']->username; ?></p>
	<p><a href="logout.php">Log out</a></p>
		<?php if(isset($_GET['msg'])): ?>
    		<p><b><big><?php echo $_GET['msg']; ?></big></b></p>
		<?php endif; ?>
	</center>
	<br />
	<hr />
	<br />
	<center>
		<h2> Search a word in Greek </h2>
		<form method="post" action="search_word_greek.php">
			<p> Enter word:
				<input type="text" name="greek" >
			</p>
			<input type="submit" >
		</form>
		<br />
		<hr />
		<br />
		<h2> Search a word in Japanese </h2>
		<form method="post" action="search_word_japanese.php">
			<p> Enter word:
				<input type="text" name="japanese" >
			</p>
			<input type="submit" >
		</form>
		<br />
		<hr />
		<br />
		<h2> Add a new word: </h2>
		<form method="post" action="add_word.php">
			<p> Greek Word:
				<input type="text" name="greek" >
			</p>
			<p> Japanese Word:
				<input type="text" name="japanese" >
			</p>
			<p> Subject of Word:
				<input type="text" name="subject" >
			</p>
			<input type="submit" >
		</form>	
</body>
</html>