<?php 
require 'connect.php';

$sql = 'SELECT * FROM questions';
$result = mysqli_query($link, $sql);

$sql = 'SELECT * FROM answers';
$resultans = mysqli_query($link, $sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Connectum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require 'headlinks.php'; ?>
</head>
<body>
	<?php require 'header.php' ?>

	<div class="container">
		<form method="POST" action="upload.php">
			<div class="d-flex justify-contnent-center mb-3">
			    <input type="text" class="form-control questInp" name="question" value="Задайте свой вопрос">
			    <button class="btn btn-green">Отправить</button>
			</div>
		</form>

		<div class="row mt-5">
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<div class="row questionDiv mb-3">
					<div class="col-2">
						<img src="<?= $row['authorUP']; ?>" width="100%">
					</div>
					<div class="col-7">
						<p><?= $row['date']; ?></p>
						<h4><?= $row['question']; ?></h4>
						<p><?= $row['questiondetails']; ?></p>
						<a class="green" data-bs-toggle="modal" data-bs-target="#modal">Смотреть ответы</a>
					</div>
					<div class="col-3 text-end">
						 <button class="btn btn-green" data-bs-toggle="modal" data-bs-target="#modal">Ответить</button>
					</div>
				</div>

				<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-2">
										<img src="<?= $row['authorUP']; ?>" width="100%">
									</div>
									<div class="col-7">
										<p><?= $row['date']; ?></p>
										<h4><?= $row['question']; ?></h4>
										<p><?= $row['questiondetails']; ?></p>
									</div>
								</div>
								<div class="row mt-4">
									<h4>Все ответы</h4>
									<?php while ($row = mysqli_fetch_array($resultans)): ?>
										<div class="row mb-2 answerDiv">
											<div class="col-2 text-end">
												<img src="<?= $row['authorUP']; ?>" width="50%">
											</div>
											<div class="col-10">
												<p><?= $row['author']; ?></p>
												<p><?= $row['answer']; ?></p>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
								<div class="row">
									<form action="upload.php" method="post">
										<div class="d-flex justify-contnent-center mb-3">
											<input type="text" class="form-control questInp" name="questans" value="Ответить на вопрос">
											<button type="submit" name="giveans" class="btn btn-green">Ответить</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<nav class="nav footer fixed-bottom">
	    <div class="container">
	        <div class="row">
	            <div class="col-4">
	                <p>Бутылка Коламбии <br>
                    Контакты: +79998887766 <br>
	                support@mail.com
	                </p>
	            </div>
	            <div class="col-5">
	                <p class="green">Каталог</p>
	                <a href="" class="plist">Офисные пакеты</a>
	                <a href="" class="plist">Графические редакторы</a>
	                <a href="" class="plist">Антивирусы</a>
	                <a href="" class="plist">Корпоративный софт</a>
	                <a href="" class="plist">Игры</a>
	                <a href="" class="plist">Поисковые системы</a>
	            </div>
	            <div class="col-3">
	                <p>Вакансии </p>
	                <div class="d-flex"><p class="connFont">Con</p><p class="connFont green">n</p><p class="connFont">ectent</p></div>
	                <p>Для разработчиков</p>
	            </div>
	        </div>
	    </div>
	</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>