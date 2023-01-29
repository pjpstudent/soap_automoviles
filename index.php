<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Concesionario Multimarca</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body id="top">

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" data-video="images/banner.jpg">
					<div class="inner">
						<header>
							<h1>Concesionario Multimarca</h1>
<p>Somos un Concesionario Multimarca Líder en su sector.</p><p>Calidad y Precio garantizado</p>
							
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->

						<div class="thumbnails">
                            <?php
                            require "client.php";
                            $elements = $client->ObtenerMarcasUrl();

							foreach($elements as $element){
                            ?>
							<div class="box">
								<a href="<?= $element['url'] ?>" class="image fit" title="ver video"><img src="images/<?= strtolower($element['marca']) ?>.png" alt="logo <?= $element['marca'] ?>" /></a>
								<div class="inner">
                                   <h3><a href="modelos.php?marca=<?= $element['marca'] ?>" data-poptrox="ajax,600x400">Modelos <?= $element['marca'] ?></a></h3>
									<a href="<?= $element['url'] ?>" class="button style2 fit" data-poptrox="youtube,800x400">Ver video <?= $element['marca'] ?></a>
								</div>
							</div>
                            <?php
							}
						//}
                            
                            ?>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>Sigue nuestras redes sociales</h2>
						<p>A responsive video gallery template with a functional lightbox<br />
							designed by <a href="https://templated.co/">Templated</a> and released under the Creative Commons License.</p>

						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
					</div>
				</footer>

				<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.poptrox.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
	</body>
</html>
