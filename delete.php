<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	$zapros_delete = mysqli_query($connect, "DELETE FROM posts WHERE id =". $_GET['id']);
	header("Location: acc.php");
?>