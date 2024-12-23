<?php
    session_start();

    if(isset($_SESSION['cliente'])){ 

?>
<!DOCTYPE html>

<html class="not-ie no-js" lang="en">

<head>
<?php include './componentes/metaCSS.php'; ?>

	
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
							<h1>Sobre Nós</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-5">
							<figure class="alignnone">
								<img src="img/logo_certo.png" alt="" class="img-circle">
							</figure>
						</div>
						<div class="col-md-6 col-md-offset-1">
							<h2>Bem-vindo ao nosso site!</h2>
							<p>Somos a PdT, 4 jovens ambiciosos que olham para o mundo com a expectativa de o tornar num lugar melhor. Queremos fazer a diferença e achamos que os pequenos gestos do dia-a-dia fazem toda a diferença, por isso criamos uma plataforma que possa ajudar todos, nos momentos difíceis que a incerteza do futuro nos garante que existirão.
							</p>

							<div class="list">
								<ul>
									<li>Constução</li>
									<li>Limpezas</li>
									<li>Canalização</li>
									<li>Jardinagem</li>
									<li>Electricista</li>
									<li>E muito mais...</li>
								</ul>
							</div>

							<div class="spacer-sm"></div>
							
							<a href="#" class="btn btn-primary">Saber Mais</a>
						</div>
					</div>

					<div class="section-light section-no-bottom-margin">
						<div class="spacer"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="icon-box">
									<div class="icon">
										<i class="fa fa-paint-brush"></i>
									</div>
									<div class="icon-box-body">
										<h4>Pintor</h4>
										Pintamos milhares de salas de estar, cozinhas e tudo o mais.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="icon-box circled icon-box-animated">
									<div class="icon">
										<i class="fa fa-bolt"></i>
									</div>
									<div class="icon-box-body">
										<h4>Electricista</h4>
										Fornecendo um serviço fiável de primeira classe em todas as áreas da elétrica.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="icon-box squared icon-box-animated">
									<div class="icon">
										<i class="fa fa-wrench"></i>
									</div>
									<div class="icon-box-body">
										<h4>Mudanças</h4>
										Desenvolvemos soluções especiais à medida em colaboração com os nossos clientes.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="call-to-action centered cta__fullwidth cta__overlay cta__overlay-opacity-75 cta-overlay-color__dark cta-bg2" data-stellar-background-ratio="0.5">
						<div class="cta-inner">
							<div class="cta-txt">
								<h2>Os Melhores Profissionais</h2>
								<p>Selecione uma categoria de projeto que melhor corresponda às suas necessidades de reparação ou melhoria em casa</p>
							</div>
							<div class="cta-btn">
								<a href="#" class="btn btn-primary">Comece aqui!</a>
							</div>
						</div>
					</div>

					<div class="spacer-xl"></div>

					<div class="row">
						<div class="col-md-6">
							<h2>Nossa Missão</h2>
							<p>Remodelar a sua casa pode ser stressante. É difícil saber a quem recorrer no caso de uma reparação de emergência.</p>

							<p>O trabalho comercial precisa de ser concluído de forma profissional e atempada, com uma consideração extra dos códigos e regulamentos. Eliminamos a necessidade de folhear as páginas amarelas, eliminamos o stress e a preocupação e, o mais importante, realizamos o trabalho corretamente.</p>

							<p>Prometemos fornecer-lhe um serviço de excelência em que pode confiar para todas as suas necessidades de reparação.</p>

							<a href="#" class="btn btn-primary">Saber mais</a>
						</div>
						<div class="col-md-6">
							<h2>Porque nós?</h2>
							<div class="panel-group panel-group__alt" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-1">
												Qualidade de Serviço
											</a>
										</h4>
									</div>
									<div id="accordion-1" class="panel-collapse collapse in">
										<div class="panel-body">
											Estamos aqui para manter os nossos clientes com os meus preços baixos e bom trabalho (mão de obra em que pode confiar).
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-2" class="collapsed">
												Profissionais de Confiança
											</a>
										</h4>
									</div>
									<div id="accordion-2" class="panel-collapse collapse">
										<div class="panel-body">
											Somos empregador de empreiteiros de reparação doméstica do mundo. A nossa dedicação em contratar e reter os melhores técnicos de manutenção e reparação residencial é a razão pela qual somos capazes de oferecer um índice de satisfação do cliente.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-3" class="collapsed">
												Experiência e Habilidade
											</a>
										</h4>
									</div>
									<div id="accordion-3" class="panel-collapse collapse">
										<div class="panel-body">
											Contratamos consistentemente colaboradores experientes e de confiança, cujas competências são aprimoradas através de formação técnica e de atendimento ao cliente.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#accordion-4" class="collapsed">
												Honestidade e Integridade
											</a>
										</h4>
									</div>
									<div id="accordion-4" class="panel-collapse collapse">
										<div class="panel-body">
											Estamos prontos para ser o seu parceiro de longo prazo para todas as suas necessidades. Contacte-nos hoje mesmo e veja como podemos ajudá-lo!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    
					<hr class="xlg">
<!--
					<h2>Our Clients</h2>
					<div class="row">
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo1-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo2-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo3-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="text-center">
								<a href="#"><img src="images/samples/client-logo4-light.png" alt="" class="img-responsive"></a>
							</div>
						</div>
					</div> 
				-->

				</div>
			</section>
			<!-- Page Content / End --> 

			<!-- Footer -->
<?php include './componentes/footer.php'; ?>
			<!-- Footer / End -->
			
		</div>
		<!-- Main / End -->
	</div>
	
	



	
</body>

<?php include './componentes/script.php'; ?>

</html>

<?php
}else{
	  die(header("Location: page-login.php"));
}
?>