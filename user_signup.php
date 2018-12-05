<?php

$hn = 'localhost';
  $db = 'languages';
  $un = '***';
  $pw = '***';
  $conn = new mysqli($hn, $un, $pw, $db);
  
  if ($conn->connect_error) die($conn->connect_error);

  // POST Data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Insert user
  $stmt = $conn->prepare("INSERT INTO `logininfo`(`username`, `password`) VALUES (?, ?);");
  $stmt->bind_param('ss',$username, $password);
  $stmt->execute();
  $stmt->close();

  $conn->close();

  header('Location: http://localhost/signup.php/?msg=Η εγγραφή ολοκληρώθηκε!');