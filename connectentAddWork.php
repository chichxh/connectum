<?php 
require 'connect.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php require 'headlinks.php'; ?>
</head>
<body>
	<?php require 'header.php'; ?>
	<div class="container">
		<h1><b>Начни развитие своего проекта вместе с нами</b></h1>
		<p>Наш проект популяризирует начинающие проекты в России, также вступи в сильное комьюнити разработчиков России</p>
	</div>
	<div class="container formDiv">
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
				<label for="formFile" class="form-label">Выберте тип вашего проекта</label>
				<select class="form-select" name="projtype">
					<option selected>Не выбрано</option>
					<option value="Код">Код</option>
					<option value="Растровый">Растровый</option>
					<option value="3D-моделирование">3D-моделирование</option>
					<option value="Видео">Видео</option>
					<option value="Аудио">Аудио</option>
					<option value="Вектор">Вектор</option>
				</select>
			</div>
			<div class="mb-3">
				<label class="form-label">Описание вашего проекта</label>
				<input class="form-control" type="text" name="projdescr">
			</div>
			<div class="mb-3">
				<label class="form-label">Скриншоты вашего проекта</label>
				<input class="form-control" type="file" name="projimg" multiple>
			</div>
			<button type="submit" name="submitConnecten" class="btn btn-green">Отправить</button>
		</form>
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
</body>
</html>