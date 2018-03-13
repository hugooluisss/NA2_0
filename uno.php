<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet/less" type="text/css" href="less/plantilla.less" />
</head>

<body class="uno">
	<div class="navbar menuPrincipal">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="brand" href="#"><img src="img/LogoNA.png" alt="Neuróticos Anónimos"></a>
			</div>
		</div>
		<div class="nav-collapse">
	        <ul class="nav">
	            <li><a href="#">Nosotros</a></li>
	            <li><a href="#">Servicios</a></li>
	            <li><a href="#">Testimonios</a></li>
	            <li><a href="#">Datos y Estadisticas</a></li>
	            <li><a href="#">Escuchanos</a></li>
	            <li><a href="#">Ubícanos</a></li>
	        </ul>
	    </div>
	</div>
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/slider.jpg" alt="Los Angeles" class="cover">
				<div class="descripcion">
					<h3>Nuestra villa</h3>
					<p>
						La villa de la buena voluntad es la parte representativa de nuestra casa hogar donde muchas personas han trascendido muchos de sus problemas emocionales
					</p>
				</div>
			</div>
			
			<div class="item">
				<img src="img/slider.jpg" alt="Chicago" class="cover">
			</div>
			
			<div class="item">
				<img src="img/slider.jpg" alt="New York" class="cover">
			</div>
		</div>

	</div>
		
		
	<?php include("pie.php")?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
</body>
</html>