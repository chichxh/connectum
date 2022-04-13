<?php 
require 'connect.php';

$sql = 'SELECT * FROM softwares';
$result = mysqli_query($link, $sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
	<div class="container">
		<h1>Время загрузить свое ПО на Connectum!</h1>
		<form action="upload.php" method="POST" enctype=multipart/form-data>
			<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Введите название вашего ПО</label>
			    <input type="text" class="form-control" name="softname">
			</div>
			<div class="mb-3">
			  	<label for="formFile" class="form-label">Выберте файлы вашего ПО</label>
			  	<input class="form-control" type="file" name="links" multiple>
			</div>
			<div class="mb-3">
				<label class="form-label">Описание вашего ПО</label>
				<input class="form-control" type="text" name="decription">
			</div>
			<div class="mb-3">
				<label class="form-label">Скриншоты вашего ПО</label>
				<input class="form-control" type="file" name="img" multiple>
			</div>
			<button type="submit" name="submitSW" class="btn btn-primary">Отправить</button>
		</form>
	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>