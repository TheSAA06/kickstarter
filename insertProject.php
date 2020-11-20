<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	$insert = mysqli_query($con, "INSERT INTO posts (title, description, goal, img, place, user) VALUES ('{$_GET['title']}','{$_GET['description']}','{$_GET['goal']}','{$_GET['img']}','{$_GET['place']}','{$_GET['user']}')");
	header("Location: acc.php");
 ?>