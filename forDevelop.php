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
<?php require 'headlinks.php'; ?>
<body>
	<?php require 'header.php'; ?>

	
	<div class="container mt-3 mb-5">
		<div class="row">
			<div class="col-8 pt-5">
				<h1><b>Начни развитие своего проекта вместе с нами</b></h1>
				<p>Наш проект популяризирует начинающие проекты в России, также вступи в сильное комьюнити разработчиков России</p>
			</div>
			<div class="col-4">
				<svg width="536" height="589" viewBox="0 0 536 589" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="267.759" cy="320.759" r="232.81" transform="rotate(9.41538 267.759 320.759)" fill="url(#paint0_radial_65_1215)"/>
				<g filter="url(#filter0_d_65_1215)">
				<rect x="176" y="235" width="214" height="214" stroke="#33FF00" stroke-width="8" shape-rendering="crispEdges"/>
				</g>
				<g filter="url(#filter1_d_65_1215)">
				<path d="M261.5 161V90H302.5V161H353L282.5 231.5L212 161H261.5Z" stroke="#33FF00" stroke-width="8" shape-rendering="crispEdges"/>
				</g>
				<g filter="url(#filter2_d_65_1215)">
				<path d="M212 342.5L275 405.5L366 280" stroke="#33FF00" stroke-width="8"/>
				</g>
				<path d="M95.2097 192.418C105.63 194.472 127.543 192.105 131.837 166.21C131.053 176.84 135.196 199.048 158.045 202.837C147.625 200.783 125.712 203.149 121.417 229.045C122.837 218.52 119.582 196.459 95.2097 192.418Z" stroke="#33FF00" stroke-width="6.58895"/>
				<path d="M397.773 491.751C405.318 493.238 421.187 491.525 424.296 472.773C423.728 480.47 426.728 496.552 443.274 499.296C435.729 497.809 419.86 499.522 416.751 518.274C417.779 510.652 415.422 494.677 397.773 491.751Z" stroke="#33FF00" stroke-width="6.58895"/>
				<path d="M401.439 60.4805C407.513 63.48 421.402 65.6709 428.358 50.4385C426.105 56.8544 424.959 71.2204 438.4 77.3575C432.325 74.358 418.436 72.1671 411.481 87.3995C414.107 81.1541 415.775 67.0267 401.439 60.4805Z" stroke="#33FF00" stroke-width="6.58895"/>
				<path d="M438 143V254" stroke="white" stroke-width="8"/>
				<path d="M110 266V377" stroke="white" stroke-width="8"/>
				<path d="M459 302L459 453" stroke="white" stroke-width="8"/>
				<path d="M172 0L172 151" stroke="white" stroke-width="8"/>
				<path d="M199.5 302V258.5H245.5" stroke="white" stroke-width="8"/>
				<defs>
				<filter id="filter0_d_65_1215" x="161.019" y="220.018" width="243.963" height="243.963" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="5.49079"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 1 0 0 0 0 0 0 0 0 0.8 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_65_1215"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_65_1215" result="shape"/>
				</filter>
				<filter id="filter1_d_65_1215" x="191.362" y="75.0184" width="182.277" height="173.12" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="5.49079"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 1 0 0 0 0 0 0 0 0 0.8 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_65_1215"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_65_1215" result="shape"/>
				</filter>
				<filter id="filter2_d_65_1215" x="198.19" y="266.67" width="182.03" height="155.954" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="5.49079"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 1 0 0 0 0 0 0 0 0 0.8 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_65_1215"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_65_1215" result="shape"/>
				</filter>
				<radialGradient id="paint0_radial_65_1215" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(267.759 320.759) rotate(88.1583) scale(232.93)">
				<stop stop-color="#0B0A0A"/>
				<stop offset="0.873454" stop-color="#0B0A0A" stop-opacity="0"/>
				</radialGradient>
				</defs>
				</svg>
			</div>
		</div>
	</div>

	<div class="container formDiv mb-5">
		<h1 class="text-center">Выложи свой проект</h1>
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
			  	<label for="formFile" class="form-label">Выберте логотип вашего ПО</label>
			  	<input class="form-control" type="file" name="logo" multiple>
			</div>
			<div class="mb-3">
				<label class="form-label">Описание вашего ПО</label>
				<input class="form-control" type="text" name="decription">
			</div>
			<div class="mb-3">
				<label class="form-label">Скриншоты вашего ПО</label>
				<input class="form-control" type="file" name="img" multiple>
			</div>
			<button type="submit" name="submitSW" class="btn btn-green">Отправить</button>
		</form>
	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>