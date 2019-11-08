<?php
session_start();
require('config.php');

$name=$_POST['name'];
$modelo=$_POST['modelo'];
$pas=$_POST['pas'];
$vel=$_POST['vel'];

	$register="INSERT INTO inf_ship(name,modelo,pas,vel) VALUES('$name','$modelo','$pas','$vel')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:api.php');

mysqli_close($db_link);
?>
