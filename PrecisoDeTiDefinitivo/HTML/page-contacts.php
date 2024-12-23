<?php
    session_start();

    if(isset($_SESSION['cliente'])){ 

?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie no-js" lang="en"> <!--<![endif]-->

<head>
<?php include './componentes/metaCSS.php'; ?>

	<!-- MAPA<link rel="map" href="css/mapacss.css">
			================================================== -->

	<link href="css/mapacss.css" />




</head>

<body class="MYslider">

	<div class="site-wrapper">

		<!-- Header -->
<?php include './componentes/cabecalhoII.php'; ?>
		<!-- Header / End -->


		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading MYslider">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Contactos</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">

				<!-- Google Map -->
					<div class="googlemap-wrapper googlemap-wrapper__contact">
					<div id="mapa" class="map-canvas"></div>
				</div>
				<!-- Google Map / End -->










				<div class="container">

					<div class="row">

						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-location-arrow"></i>
								</div>
								<div class="icon-box-body">
									<h6>Endereço:</h6>
									PrecisoDeTi
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="icon-box-body">
									<h6>Telefone:</h6>
									+351 965 987 456 <br>
									+351 942 865 432
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="icon-box-body">
									<h6>Aberto: </h6>
									    24 horas
									<br>

								</div>
							</div>
						</div>
					</div>

					<div class="spacer-lg"></div>

					<div class="row">
						<div class="col-md-12">
							<h3>Contacto</h3>
							<form action="php/contact-form.php" id="contact-form">

								<div class="alert alert-success hidden" id="contact-alert-success">
									<strong>Sucesso!</strong> Obrigado pela sua mensagem. A resposta tardará a chegar!
								</div>
								<div class="alert alert-danger hidden" id="contact-alert-error">
									<strong>Erro!</strong> Algo correu mal ao enviar a sua mensagem.
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Nome <span class="required">*</span></label>
											<input type="text" value="" data-msg-required="Introduza o seu nome."
												class="form-control" name="name" id="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Email <span class="required">*</span></label>
											<input type="email" value=""
												data-msg-required="Introduza o seu endereço de e-mail."
												data-msg-email="Introduza um endereço de e-mail válido."
												class="form-control" name="email" id="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Assunto</label>
											<input type="text" value="" data-msg-required="Por favor insira o assunto."
												class="form-control" name="subject" id="subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Mensagem <span class="required">*</span></label>
											<textarea data-msg-required="Introduza a sua mensagem." rows="10"
												class="form-control" name="message" id="message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Enviar" class="btn btn-primary"
											data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</section>
			<!-- Page Content / End -->

			<!-- Footer -->
<?php include './componentes/footer.php'; ?>
			<!-- Footer / End -->

		</div>
		<!-- Main / End -->
	</div>





<?php include './componentes/script.php'; ?>


<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-DxjppABwA_uPapt8PvyLRwrIHNELDXQ&callback=initMap">
</script>


	<script type="text/javascript">
		jQuery(function($){
			$('#map_canvas').gmap3({
				marker:{
					address: '40.717599,-74.005136' 
				},
					map:{
					options:{
					zoom: 17,
					scrollwheel: false,
					streetViewControl : true
					}
				}
		    });
		});
	</script>

	



</body>

</html>
<?php
}else{
	  die(header("Location: page-login.php"));
}
?>