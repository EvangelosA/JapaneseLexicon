<?php

  session_start();
  
$hn = 'localhost';
  $db = 'languages';
  $un = '***';
  $pw = '***';

  $conn = new mysqli($hn, $un, $pw, $db);
  
  if ($conn->connect_error) die($conn->connect_error);

$japanese=$_POST['japanese'];

  $query  = "SELECT * FROM `japanesevocab` WHERE `japanese` = '$japanese';";
  $result = $conn->query($query);
  $conn->close();

  $word = mysqli_fetch_object($result);
  $_SESSION['word']=$word;

  header('Location: http://localhost/show_word.php');