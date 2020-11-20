<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<div class="col-12">
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
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-8 mx-auto">
	<h4 class="">Change project <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php 
			$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
			$query = mysqli_query($con, "SELECT * FROM posts WHERE id='{$_GET['id']}'");
			$stroka = $query->fetch_assoc();
	 	?>

	 	<form class="col-12" action="update.php" method="GET">
	 		<input style="display: none;" class="form-control" type="" name="id" value="<?php echo $_GET['id'] ?>">
	 		<input class="form-control" type="" name="title" value="<?php echo $stroka['title'] ?>">
	 		<input class="form-control mt-2" type="" name="description" value="<?php echo $stroka['description'] ?>">
	 		<input class="form-control mt-2" type="" name="goal" value="<?php echo $stroka['goal'] ?>">
	 		<input class="form-control mt-2" type="" name="img" value="<?php echo $stroka['img'] ?>">
	 		<button class="btn btn-success col-12 mt-2">Редактировать</button>
	 	</form>
	</div>

</div>
</body>
</html>