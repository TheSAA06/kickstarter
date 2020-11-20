<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
		$query = mysqli_query($con, "SELECT * FROM posts WHERE user='Alexa Lung'");
	 ?>
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="index.php"><img src="lk.png" class="rounded-circle" ></a>
		</div>
	<div class="mx-auto col-3">
		<form action="insertProject.php" method="GET">
			<input class="col-12 form-control" type="" name="title" placeholder="Заголовок">
			<textarea class="col-12 form-control" name="description" placeholder="Описание"></textarea>
			<input class="col-12 form-control" type="" name="goal" placeholder="Необходмиая сумма[только сумма]">
			<input class="col-12 form-control" type="" name="img" placeholder="Обложка">
			<input class="col-12 form-control" type="" name="place" placeholder="Город">
			<input class="col-12 form-control" type="" name="user" placeholder="user">
			<button class="col-12 btn btn-success">Добавить</button>
		</form>
	</div>
	</div>
	<div class="col-10 mx-auto">
	<h4 class="">My project <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php 
			for ($i=0;$i<$query->num_rows;$i++) { 
				
			
			$stroka = $query->fetch_assoc();
			
			
		?>
			<div class="col-4 border rounded">
				<div style="height: 450px; background-image: url('<?php echo $stroka['img']?>'); background-size: cover; background-position: center;">
					
				</div>
				<h3><?php echo $stroka['title'] ?></h3>
				<p><?php echo $stroka['description'] ?></p>
				<p class="mt-5">by <?php echo $stroka['user']; ?>,<?php echo $stroka['place'] ?></p>
				<p><?php echo $stroka['goal'] ?>$ goal</p>
				<p class="text-success"><?php echo $stroka['donated'] ?>$ pledget</p>
				<form action="change.php" method="GET">
		 				<input style="display: none" type="" name="id" class="form-control" value="<?php echo $stroka["id"] ?>">
		 				<button class="btn btn-success">Редактировать</button>
	 			</form>
				<form action="delete.php" method="GET">
		 				<input style="display: none" type="" name="id" class="form-control" value="<?php echo $stroka["id"] ?>">
		 				<button class="btn btn-danger">Удалить</button>
	 			</form>
			</div>

		<?php 
			}
		 ?>
	</div>

</div>
</body>
</html>