<?php
    session_start();

    if(isset($_SESSION['cliente'])){ 

?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="not-ie no-js" lang="en">  <!--<![endif]-->

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/servicos.js"></script>
<head>
<?php include './componentes/metaCSS.php'; ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/servicos.js"></script>
<script src="js/prestador.js"></script>
</head>


<body class="MYslider">

<div class="site-wrapper">

    <!-- Header -->
<?php include './componentes/cabecalho.php'; ?>
    <!-- Header / End -->

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Perfil | PrecisoDeTi | Job Board HTML Template</title>
	<meta name="description" content="Handyman - Job Board HTML Template - 1.0">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	
	
	
	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/fonts/entypo/css/entypo.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="vendor/job-manager/frontend.css" media="screen">

	<!-- Theme CSS-->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/animate.min.css">

   

  <!-- Head Libs -->
	<script src="vendor/modernizr.js"></script>

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/favicon-152.png">
	
</head>
<body>

	<div class="site-wrapper">
		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Perfil</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					<div class="row">
						<div class="content col-md-8">

							<div class="box mb-30">
								<div class="job-profile-info">
									<div class="row">
							
										<div class="col-md-7">
											<h2 class="name">O meu perfil
											</h2><br><br>
										
											<form action="#" method="POST" id="profile-form">
									<div class="form-group form-grop__icon">
										<label for="nomePerfil">Nome</label>
										<input type="text" class="form-control" placeholder="Seu Nome" value="<?php echo $_SESSION['cliente'];?>">
									</div>
									<div class="form-group form-grop__icon">
									<label for="nifPerfil">NIF</label>
									<input type="text" class="form-control" placeholder="Seu Nome" value="<?php echo $_SESSION['nifC'];?>">
									</div>

									<div class="form-group form-grop__icon">
									<label for="emailPerfil">E-mail</label>
									<input type="text" class="form-control" placeholder="Seu Nome" value="<?php echo $_SESSION['emailC'];?>">
									</div>

									<div class="form-group form-grop__icon">
									<label for="moradaPerfil">Morada</label>
									<input type="text" class="form-control" placeholder="Seu Nome" value="<?php echo $_SESSION['moradaC'];?>">
									</div>

									
									<div class="form-group form-grop__icon">
									<label for="moradaPerfil">Telefone</label>
									<input type="text" class="form-control" placeholder="Seu Nome" value="<?php echo $_SESSION['teleC'];?>">
									</div>
									
									<div class="form-group form-grop__icon">
									<label for="moradaPerfil">Data de Nascimento</label>
									<input type="text" class="form-control" placeholder="Seu Nome" value="<?php echo $_SESSION['dataNasc'];?>">
									</div>

									<button type="submit" class="btn btn-primary">Editar</button>
								</form>
							</div>
										</div>
									</div>

									<div class="spacer-lg"></div>
									
									<h4>Sobre Mim</h4>
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis tempora dolorem doloremque blanditiis enim accusamus, consequatur sint voluptas fugiat, aperiam temporibus! Quos voluptatem amet tenetur molestias natus? Maxime, tempore velit.

									</p>

									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, voluptatum nisi voluptate soluta cumque, atque sunt aliquam quia nobis iusto officia mollitia explicabo temporibus quo nam, sed saepe aliquid. Inventore.</p>
									
									<hr class="lg">
									
							
									
								</div>
							</div>

							<!-- Additional Info Tabs -->
							

						</div>

						<!-- Sidebar -->
		
							<hr class="visible-sm visible-xs lg">

							<div class="box box__color-darken mb-30">
								<h4>Os Meus Pedidos</h4>
								<div class="table-responsive">
							<table class="job-manager-jobs table table-bordered table-striped">
								<thead>
									<tr>
										<th class="job_title">ID Pedido</th>
										<th class="date">Prestador</th>
										<th class="expires">Estado</th>
										<th class="filled">Preço</th>
									</tr>
								</thead>
								<tbody id="listaPedidos">
									
								</tbody>
							</table>
						</div>
						<br>
						<br>

							<div class="box box__color-darken mb-30">
								<h4>Perfis sociais
								</h4>
								<ul class="social-links social-links__dark">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>

							<div class="box box__color-darken mb-30">
								<h4>Tempo de contato
								</h4>
								<div class="table-responsive">
									<table class="table table-striped business-hours">
										<tbody>
											<tr>
												<td><i class="fa fa-clock-o"></i> Domingo</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Segunda-feira	</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Terça-feira	</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Quarta-feira	</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Quinta-feira	</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Sexta-feira	</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Sábado</td>
												<td>12:00 - 16:00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table (Bordered) / End -->
							</div>

							
						</aside>
						<!-- Sidebar / End -->

					</div>
				</div>
			</section>
			<!-- Page Content / End -->

			<!-- Footer -->
			<footer class="footer" id="footer">
				<div class="footer-widgets">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Contacts Info -->
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Contate-nos</h3>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-map-marker"></i>
												<div class="info-item">
													PrecisoDeTi
												</div>
											</li>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													+351 965 987 456<br>
													+351 942 865 432
												</div>
											</li>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:info@dan-fisher.com">precisodeti@gmail.com</a>
												</span>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												<div class="info-item">
													Aberto: 24 horas
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Contacts Info -->
							</div>
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Latest Posts -->
								<div class="latest-posts-widget widget widget__footer">
									<h3 class="widget-title">Postagens recentes</h3>
									<div class="widget-content">
										<ul class="latest-posts-list">
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img1-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Três reparações domésticas simples que lhe pouparão centenas de euros</a></h5>
												<span class="date">18 de setembro de 2024</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img2-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Ferramentas que facilitam o trabalho no quintal: o grande soprador de mochila</a></h5>
												<span class="date">25 de setembro de 2024</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img3-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">11 dicas para lidar com os danos causados ​​pela água, mofo e bolor</a></h5>
												<span class="date">14 de outubro de 2024</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Latest Posts -->
							</div>

							<div class="clearfix visible-sm"></div>

							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Newsletter -->
								<div class="widget_newsletter widget widget__footer">
									<h3 class="widget-title">Receba o nosso boletim informativo</h3>
									<div class="widget-content">
										<p>Receba projetos oportunos para a sua casa e quintal diretamente na sua caixa de correio todas as semanas!</p>

										<form action="php/newsletter-form.php" method="POST" id="newsletter-form">

											<div class="alert alert-success hidden" id="newsletter-alert-success">
												<strong>Sucesso!</strong> Obrigado pela subscrição.
											</div>
											<div class="alert alert-danger hidden" id="newsletter-alert-error">
												<strong>Erro!</strong> Algo correu mal.
											</div>

											<div class="form-group">
												<input type="email" 
												value=""
												data-msg-required="Introduza o endereço de e-mail."
												data-msg-email="Introduza um endereço de e-mail válido."
												class="form-control"
												placeholder="Introduza aqui o seu e-mail..."
												name="subscribe-email"
												id="subscribe-email">
											</div>
											<button type="submit" class="btn btn-primary btn-block" data-loading-text="Loading...">Subscrever</button>
										</form>
									</div>
								</div>
								<!-- /Widget :: Newsletter -->
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								Copyright &copy; 2024  <a href="index.html">PrecisoDeTi</a> &nbsp;| &nbsp;All Rights Reserved
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer / End -->
			
		</div>
		<!-- Main / End -->
	</div>
	
	
	
	
	
	<!-- Javascript Files
	================================================== -->
	<script src="vendor/jquery-1.11.0.min.js"></script>
	<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/bootstrap.js"></script>
	<script src="vendor/jquery.flexnav.min.js"></script>
	<script src="vendor/jquery.hoverIntent.minified.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/jquery.fitvids.js"></script>
	<script src="vendor/jquery.appear.js"></script>
	<script src="vendor/jquery.stellar.min.js"></script>
	<script src="vendor/jquery.countTo.js"></script>

	<!-- Newsletter Form -->
	<script src="vendor/jquery.validate.js"></script>
	<script src="js/newsletter.js"></script>

	<script src="js/custom.js"></script>

	<!-- Google Map -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="vendor/jquery.gmap3.min.js"></script>
	
	<!-- Google Map Init-->
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