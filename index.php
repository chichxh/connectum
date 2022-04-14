<?php 
require 'connect.php';

$sql = 'SELECT * FROM softwares';
$result = mysqli_query($link, $sql);
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
	<?php require 'header.php'; ?>

	<div class="container mt-3 mb-5">
		<div class="row">
			<div class="col-8 pt-5">
				<h1><b>Все, что необходимо для вашего роста</b></h1>
				<div class="d-flex">
					<p>Наша платформа существует для того, чтобы ваш продукт развивался. Присоединяйся в наш <p class="connFont">_Con</p><p class="green connFont">n</p><p class="connFont">ect</p>
				</div>
			</div>
			<div class="col-4">
				<svg width="476" height="480" viewBox="0 0 596 600" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="297.872" cy="302.038" r="232.81" transform="rotate(9.41538 297.872 302.038)" fill="url(#paint0_radial_65_1027)"/>
				<path d="M259 197.5L329 149" stroke="white" stroke-width="6"/>
				<g filter="url(#filter0_d_65_1027)">
				<path d="M339.057 113.097L200.691 212.101L288.894 226.727L245.338 489.391L299.816 498.425L343.372 235.761L438.061 251.463L339.057 113.097Z" stroke="#33FF00" stroke-width="7.88891" shape-rendering="crispEdges"/>
				</g>
				<path d="M144.21 272.418C154.63 274.472 176.543 272.105 180.837 246.21C180.053 256.84 184.196 279.048 207.045 282.837C196.625 280.783 174.712 283.149 170.418 309.045C171.837 298.52 168.583 276.459 144.21 272.418Z" stroke="#33FF00" stroke-width="6.58895"/>
				<path d="M363.772 498.751C371.318 500.238 387.186 498.525 390.296 479.773C389.727 487.47 392.728 503.552 409.274 506.296C401.728 504.809 385.86 506.522 382.75 525.274C383.778 517.652 381.421 501.677 363.772 498.751Z" stroke="#33FF00" stroke-width="6.58895"/>
				<path d="M400.323 84.0422C406.971 85.3525 420.95 83.8432 423.689 67.3235C423.189 74.105 425.832 88.2721 440.408 90.6892C433.761 89.379 419.782 90.8883 417.042 107.408C417.948 100.694 415.871 86.6205 400.323 84.0422Z" stroke="#33FF00" stroke-width="6.58895"/>
				<path d="M229.331 268.966L184.599 538.723" stroke="white" stroke-width="6.58895"/>
				<path d="M170.812 128.466L139.015 320.222" stroke="white" stroke-width="6.58895"/>
				<path d="M374.105 359.205L346.259 527.127" stroke="white" stroke-width="6.58895"/>
				<path d="M476.017 248.092L438.291 475.599" stroke="white" stroke-width="6.58895"/>
				<path d="M452.596 87.2537L434.451 196.673" stroke="white" stroke-width="6.58895"/>
				<path d="M245.466 20.625L227.322 130.045" stroke="white" stroke-width="6.58895"/>
				<defs>
				<filter id="filter0_d_65_1027" x="179.669" y="96.6118" width="278.122" height="417.331" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
				<feOffset/>
				<feGaussianBlur stdDeviation="5.49079"/>
				<feComposite in2="hardAlpha" operator="out"/>
				<feColorMatrix type="matrix" values="0 0 0 0 0.2 0 0 0 0 1 0 0 0 0 0 0 0 0 0.8 0"/>
				<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_65_1027"/>
				<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_65_1027" result="shape"/>
				</filter>
				<radialGradient id="paint0_radial_65_1027" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(297.872 302.038) rotate(88.1583) scale(232.93)">
				<stop stop-color="#0B0A0A"/>
				<stop offset="0.873454" stop-color="#0B0A0A" stop-opacity="0"/>
				</radialGradient>
				</defs>
				</svg>

			</div>
		</div>
	</div>


	<div class="container mt-5">
		<div class="d-flex justify-content-around">
			<a class="plist">Офисные пакеты</a>
			<a class="plist">Графические редакторы</a>
			<a class="plist">Антивирусы</a>
			<a class="plist">Корпоротивный софт</a>
			<a class="plist">Игры</a>
			<a class="plist">Поисковые системы</a>
		</div>

		<div class="row mt-3 mb-5">
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<div class="col-4 mb-5">
					<img src="<?= $row['img']; ?>" width="100%">
					<div class="row mt-3">
						<div class="col-3">
							<img src="<?= $row['logo']; ?>" width="100%">
						</div>
						<div class="col-9">
							<p style="margin-bottom: 0px;"><b><?= $row['name']; ?></b></p>
							<p><?= $row['decription']; ?></p>
							<button class="btn btn-green">Больше</button>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>


	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

