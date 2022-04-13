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
	<nav class="nav">
		<a class="nav-link active" aria-current="page" href="#">Главная</a>
		<a class="nav-link" href="devLog.php">Разработчик</a>
		<a class="nav-link" href="connectenLog.php">Connecten</a>
	</nav>

	<!-- Здесь каталог -->
	<div class="container mt-5">
		<?php while ($row = mysqli_fetch_array($result)): ?>
			<p><?= $row['name']; ?></p>
			<p><?= $row['decription']; ?></p>
			<a href="<?= $row['link']; ?>">Скачать <?= $row['name']; ?></a>
			<img src="<?= $row['img']; ?>">
			<br>
		<?php endwhile; ?>
	</div>
	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>