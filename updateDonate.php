<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	$query = mysqli_query($con, "SELECT * FROM posts WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
	$num = $stroka['donated']+10;
	$update = mysqli_query($con, "UPDATE posts SET donated='$num' WHERE id='{$_GET['id']}'");
	header("Location: index.php");
?>