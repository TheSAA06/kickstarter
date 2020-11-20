<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	$zapros_update = mysqli_query($connect, "UPDATE posts SET title='{$_GET['title']}', description='{$_GET['description']}', goal='{$_GET['goal']}', img='{$_GET['img']}' WHERE id='{$_GET['id']}'");
	header("Location: acc.php");
?>