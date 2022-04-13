<?php 
require 'connect.php';
$sql = 'SELECT * FROM uploads';
$result = mysqli_query($link, $sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Connecten</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
	<div class="container">
		<h1>Выложи свою работу на Connecten! Покажи всем свой талант!</h1>
		<form action="upload.php" method="POST" enctype=multipart/form-data>
			<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Ваш проект</label>
			    <input type="text" class="form-control" name="projname">
			</div>
			<div class="mb-3">
			  	<label for="formFile" class="form-label">Выберте файлы вашего проекта</label>
			  	<input class="form-control" type="file" name="projfile" multiple>
			</div>
			<div class="mb-3">
				<label class="form-label">Описание вашего проекта</label>
				<input class="form-control" type="text" name="projdescr">
			</div>
			<div class="mb-3">
				<label class="form-label">Скриншоты вашего проекта</label>
				<input class="form-control" type="file" name="projimg" multiple>
			</div>
			<button type="submit" name="submitConnecten" class="btn btn-primary">Отправить</button>
		</form>
	</div>


	<div class="container mt-5">
		<?php while ($row = mysqli_fetch_array($result)): ?>
			<p><?= $row['projname']; ?></p>
			<p><?= $row['projdescr']; ?></p>
			<a href="<?= $row['projfile']; ?>">Скачать <?= $row['projname']; ?></a>
			<img src="<?= $row['projimg']; ?>">
			<br>
		<?php endwhile; ?>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>