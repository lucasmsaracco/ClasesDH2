<?php
	$kitcheningmenu = ["HOME", "QUIENES", "SERIVCIOS", "PORTFOLIO", "SUCURSALES", "CONTACTO"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<?php for($i=0;$i<count($kitcheningmenu);$i++):?>

						<li> <a href="#"><?php echo $kitcheningmenu[$i]?></a> </li>

					<?php endfor?>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-1.jpg" alt="pdto 01">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-2.jpg" alt="pdto 02">
					<img class="special" src="images/img-gratis.png" alt="gratis más de 3">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-3.jpg" alt="pdto 03">
					<img class="special" src="images/img-descuento.png" alt="descuento efectivo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-1.jpg" alt="pdto 01">
					<img class="special" src="images/img-gratis.png" alt="gratis más de 3">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-2.jpg" alt="pdto 02">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-3.jpg" alt="pdto 03">
					<img class="special" src="images/img-descuento.png" alt="descuento efectivo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
