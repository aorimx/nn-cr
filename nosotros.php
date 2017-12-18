<?php
session_start ();
if(isset($_GET["idioma"])) {
    if (!$_SESSION["idiomas"]){
      $_SESSION["idiomas"] = "es";
  }
  elseif ($_GET["idioma"]){
    $_SESSION["idiomas"]= $_GET["idioma"];
  }

}
else{
  $_GET["idioma"] = "es";
  $_SESSION["idiomas"]= $_GET["idioma"];
}


include ("lang_".$_SESSION["idiomas"].".php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Nano | Nosotros</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="64x64">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
</head>

<body class="nosotros-body">
  <!--  Header  -->
	<div class="box-white">
	</div>
	<div class="box-image">
		<div class="nosotros">
			<main class="j-workspace ">
					<div class="j-wrap">
							<nav role="navigation" class="navigation-mobile">
								<ul class="ulMenuMobile">
									<li>
										<a href="./" class="li-normal">
											<?php echo inicio; ?>
										</a>
									</li>
									<li>
										<a href="nosotros" class="li-active">
											<?php echo nosotros; ?>
										</a>
									</li>
									<li>
										<a href="industrias" class="li-normal">
											<?php echo industrias; ?>	
										</a>
									</li>
									<li>
										<a href="#" class="li-normal">
											<?php echo tienda; ?>
										</a>
									</li>
									<li>
										<a href="contacto" class="li-normal">
											<?php echo contacto; ?>
										</a>
									</li>
								</ul>
								<ul class="idiomas-responsive">
									<a href="nosotros?idioma=es">
										<?php echo esMobile; ?>
									</a>
									<a href="nosotros?idioma=en">
										<?php echo enMobile; ?>
									</a>
								</ul>
							</nav>
							<div class="nav-icon">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div class="nosotros-content">
								<a class="logo-mobile" href="http://nanocreaciones.com/">
									<img src="assets/images/recursos/Logo_nano_gris.png" alt="">
								</a>
								<div class="idiomas">
									<a href="nosotros?idioma=en"><?php echo en; ?></a>
									<a href="nosotros?idioma=es"><?php echo es; ?></a>
								</div>
								<div class="nosotros-inner">
									<h2 class="title-nano"><?php echo titleNosotros; ?></h2>
									<p class="subtitle-nano"><?php echo subtitleNosotros; ?></p>
									<p class="text-content"><?php echo textNosotros; ?></p>
									<p class="text-content"><?php echo textNosotros2; ?></p>
								</div>
							</div>
						</div>
					<footer>
						<div class="j-wrap-nosotros">
							<div class="tag">
								<span>HIGH TECHNOLOGY</span>
							</div>
							<div class="copy-tablet">
								<p class="copyright"><?php echo copy; ?></p>
								<a href="#" class="politicas"><?php echo aviso; ?></a>
							</div>
							<p class="copyright text-desktop"><?php echo copy; ?></p>
							<a class="text-desktop" href="#">LOG IN</a>
							<a href="#" class="politicas text-desktop"><?php echo aviso; ?></a>
							<div class="social-networks">
								<a href="">
									<img src="assets/images/recursos/mail_white.png" alt="">
								</a>
								<a href="">
									<img src="assets/images/recursos/facebook_white.png" alt="">
								</a>
								<a href="">
									<img src="assets/images/recursos/twitter_white.png" alt="">
								</a>
							</div>
						</div>
					</footer>
			</main>
		</div>
	</div>
	<div class="nosotros">
    <main class="j-workspace ">
        <div class="j-wrap">
            <nav class="nav-bar-nano">
                <a href="http://nanocreaciones.com/">
                    <img src="assets/images/recursos/Logo_nano_gris.png" alt="">
                </a>
                <ul>
									<li>
										<a href="./" class="li-normal">
											<?php echo inicio; ?>
										</a>
									</li>
									<li>
										<a href="nosotros" class="li-active">
											<?php echo nosotros; ?>
										</a>
									</li>
									<li>
										<a href="industrias" class="li-normal">
											<?php echo industrias; ?>	
										</a>
									</li>
									<li>
										<a href="#" class="li-normal">
											<?php echo tienda; ?>
										</a>
									</li>
									<li>
										<a href="contacto" class="li-normal">
											<?php echo contacto; ?>
										</a>
									</li>
                </ul>
						</nav>
						<div class="nosotros-content">
							<a class="logo-mobile" href="http://nanocreaciones.com/">
								<img src="assets/images/recursos/logo_white.png" alt="">
							</a>
							<div class="idiomas">
								<a href="nosotros?idioma=en"><?php echo en; ?></a>
								<a href="nosotros?idioma=es"><?php echo es; ?></a>
							</div>
							<div class="nosotros-inner">
								<h2 class="title-nano"><?php echo titleNosotros; ?></h2>
								<p class="subtitle-nano"><?php echo subtitleNosotros; ?></p>
								<p class="text-content"><?php echo textNosotros; ?></p>
								<p class="text-content"><?php echo textNosotros2; ?></p>
							</div>
						</div>
        	</div>
        <footer>
					<div class="j-wrap-nosotros">
						<div class="tag">
							<span>HIGH TECHNOLOGY</span>
						</div>
						<div class="copy-tablet">
							<p class="copyright"><?php echo copy; ?></p>
							<a href="#" class="politicas"><?php echo aviso; ?></a>
						</div>
						<p class="copyright text-desktop"><?php echo copy; ?></p>
						<a class="text-desktop" href="#">LOG IN</a>
						<a href="#" class="politicas text-desktop"><?php echo aviso; ?></a>
						<div class="social-networks">
							<a href="">
								<img src="assets/images/recursos/mail_white.png" alt="">
							</a>
							<a href="">
								<img src="assets/images/recursos/facebook_white.png" alt="">
							</a>
							<a href="">
								<img src="assets/images/recursos/twitter_white.png" alt="">
							</a>
						</div>
					</div>
        </footer>
    </main>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="assets/scripts/mobile-menu.js"></script>
</body>
</html>
