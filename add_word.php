<?php

$hn='localhost';
$db='languages';
$un='***';
$pw='***';

$conn= new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

$greek=$_POST['greek'];
$japanese=$_POST['japanese'];
$subject=$_POST['subject'];

$stmt = $conn->prepare("INSERT INTO `japanesevocab`(`greek`,`japanese`,`subject`) VALUES ( ? , ? , ? );");
$stmt->bind_param("sss",$greek,$japanese,$subject);
$stmt->execute();
$stmt->close();

$conn->close();

header('Location: http://localhost/word_inserted.php');