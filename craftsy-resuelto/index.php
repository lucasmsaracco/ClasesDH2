<!DOCTYPE html>
<html>
	<head>
		<?php include("headencomun.php"); ?>
		<title>Craftsy | Home</title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<?php include("header.php"); ?>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<?php include("articles.php") ?>
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
