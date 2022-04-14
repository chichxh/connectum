<?php 
require 'connect.php';
$sql = 'SELECT * FROM uploads';
$result = mysqli_query($link, $sql);

$sql = 'SELECT * FROM questions';
$resultQ = mysqli_query($link, $sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Connecten</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require 'headlinks.php';  ?>
</head>
</style>
<body>
	<?php require 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h1><b>Начни развитие своего проекта вместе с нами</b></h1>
				<p>Наш проект популяризирует начинающие проекты в России, также вступи в сильное комьюнити разработчиков России</p>
			</div>
			<div class="col-4">
				<img src="">
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="d-flex justify-content-between">
			<h1>Сообщество</h1>
			<a href="connectumMoreQues.php"><button class="btn btn-green">Задай вопрос</button></a>
		</div>
		<div class="row mt-4 justify-content-around">
			<?php while ($row = mysqli_fetch_array($resultQ)): ?>
				<div class="col-5 questionDiv mb-5">
					<div class="row">
						<div class="col-4">
							<img src="<?= $row['authorUP']; ?>" width="100%">
						</div>
						<div class="col-8">
							<p><?= $row['date']; ?></p>
							<h2><?= $row['question']; ?></h2>
							<a href="connectumMoreQues.php" class="green">Смотреть ответы</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<div class="container mt-5">
		<div class="d-flex justify-content-between">
			<div class="d-flex"><h1>Работы от </h1><h1 class="connFont"> _con</h1><h1 class="connFont green">n</h1><h1 class="connFont">ectizen</h1></div>
			<a href="connectentAddWork.php"><button class="btn btn-green">Добавить свою работу</button></a>
		</div>
		<div class="row">
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<div class="col-6" data-bs-toggle="modal" data-bs-target="#modal">
					<img src="<?= $row['projimg']; ?>" width="100%"> <br>
					<div class="d-flex justify-content-between">
						<p><?= $row['projauthor']; ?></p>
						<p><?= $row['projtype']; ?></p>
					</div>
				</div>

				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-body">
								<img src="<?= $row['projimg']; ?>" width="100%"> <br>
								<div class="d-flex justify-content-between">
									<p><?= $row['projauthor']; ?></p>
									<p><?= $row['projtype']; ?></p>
								</div>
								<p><?= $row['projdescr']; ?></p>
								<a href="<?= $row['projfile']; ?>">Скачать исходник</a>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>