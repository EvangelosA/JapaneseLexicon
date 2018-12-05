<?php

  session_start();
  
$hn = 'localhost';
  $db = 'languages';
  $un = '***';
  $pw = '***';

  $conn = new mysqli($hn, $un, $pw, $db);
  
  if ($conn->connect_error) die($conn->connect_error);

  // POST Data
  $username = $_POST['username'];
  $query  = "SELECT * FROM `logininfo` WHERE `username` = '$username';";
  $result = $conn->query($query);
  $conn->close();

  // If 1, user exists
  if($result->num_rows == 1){
    
    $user = mysqli_fetch_object($result);
    
    if($user->password == $_POST['password'])
    {
      $_SESSION['user'] = $user;
      header('Location: http://localhost/afterlogin.php');
    }else{
      header('Location: http://localhost/?msg=Wrong password!');
    }

  }else{
    header('Location: http://localhost/?msg=Wrong username!');
  }