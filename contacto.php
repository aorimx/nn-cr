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
  <title>Nano | Contacto</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="64x64">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
</head>

<body class="contacto-body">
  <!--  Header  -->
	<div class="box-white">
	</div>
	<div class="box-image">
		<div class="contacto">
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
										<a href="nosotros" class="li-normal">
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
										<a href="contacto" class="li-active">
											<?php echo contacto; ?>
										</a>
									</li>
								</ul>
								<ul class="idiomas-responsive">
									<a href="contacto?idioma=es">
										<?php echo esMobile; ?>
									</a>
									<a href="contacto?idioma=en">
										<?php echo enMobile; ?>
									</a>
								</ul>
							</nav>
							<div class="nav-icon">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div class="contacto-content">
								<a class="logo-mobile" href="http://nanocreaciones.com/">
									<img src="assets/images/recursos/Logo_nano_gris.png" alt="">
								</a>
								<div class="idiomas">
									<a href="nosotros?idioma=en"><?php echo en; ?></a>
									<a href="nosotros?idioma=es"><?php echo es; ?></a>
								</div>
								<div class="contacto-inner">
									<h2 class="title-nano"><?php echo titleContacto; ?></h2>
									<form id="form-mobile" class="contact-form" action="#" method="POST" enctype="multipart/form-data">
										<div class="input-card">
											<input type="text" name="nombreM" value placeholder="<?php echo formName; ?>">
										</div>
										<div class="input-card">
											<input type="text" name="ocuM" value placeholder="<?php echo formOcupacion; ?>">			
										</div>
										<div class="input-card2">
										<input type="number" class="half-input" name="telM" value placeholder="<?php echo formTel; ?>">
										</div>
										<div class="input-card2">
											<input type="email" class="half-input" name="emailM" value placeholder="<?php echo formEmail; ?>">
										</div>
										<div class="input-card">
											<select name="asunM" id="" class="formSelect">
												<option value="<?php echo formAsunto; ?>" disabled="" selected=""><?php echo formAsunto; ?></option>
												<option value="<?php echo select1; ?>"><?php echo select1; ?></option>
												<option value="<?php echo select2; ?>"><?php echo select2; ?></option>
												<option value="<?php echo select3; ?>"><?php echo select3; ?></option>
											</select>
										</div>
										<div class="input-card">		
											<textarea name="menM" placeholder="<?php echo formMensaje; ?>" ></textarea>
										</div>
										<button type="submit" class="btn-form"><?php echo formEnviar; ?></button>
									</form>
								</div>
							</div>
						</div>
					<footer>
						<div class="j-wrap-contact">
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
									<img src="assets/images/recursos/mail_gris.png" alt="">
								</a>
								<a href="">
									<img src="assets/images/recursos/facebook_gris.png" alt="">
								</a>
								<a href="">
									<img src="assets/images/recursos/twitter_gris.png" alt="">
								</a>
							</div>
						</div>
					</footer>
			</main>
		</div>
	</div>
	<div class="contacto">
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
										<a href="nosotros" class="li-normal">
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
										<a href="contacto" class="li-active">
											<?php echo contacto; ?>
										</a>
									</li>
                </ul>
						</nav>
						<div class="contacto-content">
							<div class="idiomas">
								<a href="contacto?idioma=en"><?php echo en; ?></a>
								<a href="contacto?idioma=es"><?php echo es; ?></a>
							</div>
							<div class="contacto-inner">
								<h2 class="title-nano"><?php echo titleContacto; ?></h2>
								<form id="contact-f" class="contact-form" action="" method="POST" enctype="multipart/form-data">
									<div class="input-card">
										<input type="text" id="nombre" name="nombre" placeholder="<?php echo formName; ?>">
									</div>
									<div class="input-card">
										<input type="text" id="ocupacion" name="ocu" placeholder="<?php echo formOcupacion; ?>">			
									</div>
									<div class="input-card2">
									<input type="number" class="half-input" id="tel" name="tel" placeholder="<?php echo formTel; ?>">
									</div>
									<div class="input-card2">
										<input type="email" class="half-input" id="correo" name="email" placeholder="<?php echo formEmail; ?>">
									</div>
									<div class="input-card">
										<select name="asun" id="formSelect" class="formSelect">
											<option value="<?php echo formAsunto; ?>" disabled="" selected=""><?php echo formAsunto; ?></option>
											<option value="<?php echo select1; ?>"><?php echo select1; ?></option>
											<option value="<?php echo select2; ?>"><?php echo select2; ?></option>
											<option value="<?php echo select3; ?>"><?php echo select3; ?></option>
										</select>
									</div>
									<div class="input-card">		
										<textarea id="mensaje" name="men" placeholder="<?php echo formMensaje; ?>" ></textarea>
									</div>
									<button type="submit" id="btn-form" class="btn-form"><?php echo formEnviar; ?></button>
								</form>
							</div>
						</div>
        </div>
        <footer>
					<div class="j-wrap-nosotros">
						<div class="tag">
							<span style="color: #929292; text-shadow: none;">HIGH TECHNOLOGY</span>
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
								<img src="assets/images/recursos/mail_gris.png" alt="">
							</a>
							<a href="">
								<img src="assets/images/recursos/facebook_gris.png" alt="">
							</a>
							<a href="">
								<img src="assets/images/recursos/twitter_gris.png" alt="">
							</a>
						</div>
					</div>
        </footer>
    </main>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="assets/scripts/mobile-menu.js"></script>
	<script src="assets/scripts/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<script src="assets/scripts/enviarForm.js"></script>
	<script>
      $('#contact-f').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');
			
      	$('textarea').removeClass('error');
      	$('label.error').remove();
				var tel =$("input[name='tel']");
      	var name=$("input[name='nombre']");
        var ocupacion=$("input[name='ocu']");
      	var asunto=$("select[name='asun']");
      	var mensaje=$("textarea[name='men']");
      	var email=$("input[name='email']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(ocupacion.val() === ""){
      		$(ocupacion).addClass('error');
      		$(ocupacion).after('<label class="error"> Campo obligatorio</label>');
				}
				
      	if(asunto.val() === null){
      		$(asunto).addClass('error');
      		$(asunto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');	
					$(email).addClass('email-mg');			
					$(tel).addClass('email-mg');		
				} 
      	if($('label.error').length == 0){

          console.log("se enviara un correo");
          contactoEnviarMensajeBtn_click();
          //contactoEnviarDatos();
      	}
      

          return false;
      });
	</script>
	<script>
      $('#form-mobile').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');
			
      	$('textarea').removeClass('error');
      	$('label.error').remove();
				var tel =$("input[name='telM']");
      	var name=$("input[name='nombreM']");
        var ocupacion=$("input[name='ocuM']");
      	var asunto=$("select[name='asunM']");
      	var mensaje=$("textarea[name='menM']");
      	var email=$("input[name='emailM']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(ocupacion.val() === ""){
      		$(ocupacion).addClass('error');
      		$(ocupacion).after('<label class="error"> Campo obligatorio</label>');
				}
				
      	if(asunto.val() === null){
      		$(asunto).addClass('error');
      		$(asunto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');	
					$(email).addClass('email-mg');			
					$(tel).addClass('email-mg');		
				} 
      	if($('label.error').length == 0){

          console.log("se enviara un correo");
          contactoEnviarMobile_click();
          //contactoEnviarDatosMobile();
      	}
          return false;
      });
	</script>
</body>
</html>
