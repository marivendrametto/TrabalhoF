<?php
    session_start();

    if(isset($_SESSION['cliente'])){ 

?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/servicos.js"></script>
<script src="js/sweetalert.js"></script>
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
							<h1>Serviços
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">

					
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>





					<div class="title-bordered">
						<h2>Todos os Serviços <small>serviços que prestamos</small></h2>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="1"  onclick="getPrestadoresServicos(this.id)">
									<i class="entypo tools"></i>
								</div>
								<div class="icon-box-body">
									<h4>Construção</h4>
									<p>Realizamos projetos de construção de alta qualidade e duradouros, utilizando materiais e tecnologias de ponta para garantir a segurança e a satisfação dos nossos clientes.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="2"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-cog "></i>
								</div>
								<div class="icon-box-body">
									<h4>Canalização</h4>
									<p>Oferecemos serviços completos de canalização, desde a instalação de sistemas de água até reparações e manutenção, garantindo sempre um fluxo de água seguro e eficiente.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="3"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-archive"></i>
								</div>
								<div class="icon-box-body">
									<h4>Mudanças</h4>
									<p>Prestamos serviços de mudanças, cuidando de todos os detalhes para que a transição para o seu novo espaço seja tranquila e sem preocupações.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="4"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-recycle"></i>
								</div>
								<div class="icon-box-body">
									<h4>Limpezas</h4>
									<p>Especialistas em limpezas residenciais e comerciais, realizamos desde limpezas de rotina até limpezas profundas, assegurando um ambiente saudável e bem cuidado.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="5"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-lightbulb-o"></i>
								</div>
								<div class="icon-box-body">
									<h4>Eletricista</h4>
									<p>Fornecemos serviços de eletricidade, desde pequenas reparações até instalações completas, com foco em segurança e eficiência energética.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon"  id="6"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-tree"></i>
								</div>
								<div class="icon-box-body">
									<h4>Jardinagem</h4>
									<p>Equipa profissional de jardinagem, dedicada ao cuidado de jardins e espaços verdes, com serviços de plantação, poda e manutenção regular.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="7"  onclick="getPrestadoresServicos(this.id)">
									<i class="entypo air"></i>
								</div>
								<div class="icon-box-body">
									<h4>Piscinas</h4>
									<p>Serviço completo de manutenção e limpeza de piscinas, para que desfrute de um espaço seguro e relaxante durante todo o ano.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon " id="8"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-home"></i>
								</div>
								<div class="icon-box-body">
									<h4>Serviços Domésticos</h4>
									<p>Assistência em tarefas domésticas variadas, garantindo conforto e apoio em pequenas tarefas diárias, como pequenas reparações e montagem de móveis.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="9"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-cube"></i>
								</div>
								<div class="icon-box-body">
									<h4>Montagem</h4>
									<p>Oferecemos serviços de montagem de móveis e equipamentos, garantindo a instalação rápida e segura dos seus produtos.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="10"  onclick="getPrestadoresServicos(this.id)">
									<i class="entypo brush"></i>
									
								</div>
								<div class="icon-box-body">
									<h4>Beleza e Estética</h4>
									<p>Cuidados de beleza e estética, realizados por profissionais qualificados para que se sinta sempre no seu melhor.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="11"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-suitcase"></i>
								</div>
								<div class="icon-box-body">
									<h4>Recados</h4>
									<p>Serviço de recados e tarefas diversas, como entrega de documentos e pequenas compras, facilitando o seu dia-a-dia.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-car"></i>
									
								</div>
								<div class="icon-box-body">
									<h4>Automóvel</h4>
									<p>Serviços de manutenção e reparação automóvel, assegurando que o seu veículo se mantém seguro</p>
								</div>
							</div>
						</div>
					</div>
<br>
					<div class="title-bordered">

						<h2>Prestadores Disponíveis </h2>

					</div>
					<div class="job_listings" id="listaServicos">
						<ul class="job_listings">
					
							
						</ul>
					</div>

<!--	
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-archive"></i>
								</div>
								<div class="icon-box-body">
									<h4>Cabinets &amp; Countertops</h4>
									<p>Our kitchen designers will work with you and your budget to create an inspiring space all your own!</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-pencil"></i>
								</div>
								<div class="icon-box-body">
									<h4>Design</h4>
									<p>Our specially trained consultants will be able to bring a fresh approach to any project for your home.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-usd"></i>
								</div>
								<div class="icon-box-body">
									<h4>Home Inspection</h4>
									<p>Our inspectors thoroughly inspect all major components of the subject property to expose unknown defects.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-archive"></i>
								</div>
								<div class="icon-box-body">
									<h4>Cabinets &amp; Countertops</h4>
									<p>Our specialists will help you select what best suits your style, taste and budget, as well as coordinate your installation.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="entypo air"></i>
								</div>
								<div class="icon-box-body">
									<h4>Insulation</h4>
									<p>Quality attic insulation and wall insulation can save energy costs and make your home more comfortable.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-road"></i>
								</div>
								<div class="icon-box-body">
									<h4>Paving</h4>
									<p>We provide asphalt-resurfacing services from major roadways to parking lots.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-tree"></i>
								</div>
								<div class="icon-box-body">
									<h4>Tree Service</h4>
									<p>Provides vegetation management, storm restoration, and work planning services.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="icon-box-body">
									<h4>Moving</h4>
									<p>Whether you're moving down the street or across the country, we'll help you manage your relocation stress.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon">
									<i class="entypo tools"></i>
								</div>
								<div class="icon-box-body">
									<h4>General Contracting</h4>
									<p>We develop special tailor-made solutions in collaboration with our customers.</p>
								</div>
							</div>
						</div>
					</div>
-->
					<br> 	


<h3>Planos de Subscrição - Prestador</h3>
<div class="row">
	<div class="pricing-table">
		<div class="col-md-4">
			<div class="plan">
				<header class="pricing-head">
					<h3>Standard </h3>
					<span class="price"><sup>€</sup> 00</span>
					<small>por mê^s</small>
				</header>
				<div class="pricing-body">
					<ul>
						<li>1 hora de destaque por 4.99 € (c/IVA).
						</li>
						<li>Cobrar comissão sobre o valor hora dos serviços prestados (10%). 
						</li>
						
					</ul>
				</div>
				<footer class="pricing-footer">
					<a href="#" class="btn btn-default">Comece agora</a>
				</footer>
			</div>
		</div>
		<div class="col-md-4">
			<div class="plan popular">
				<header class="pricing-head">
					<h3>Premium</h3>
					<span class="price"><sup>€</sup> 75</span>
					<small>por mês</small>
				</header>
				<div class="pricing-body">
					<ul>
						<li>Oferta de 10 horas de destaque que podem ser utilizadas repartidamente e horas de destaque adicionais a metade do preço. 
						</li>
						<li>Oferta da comissão sobre o valor hora (limite de 50 horas de serviço)</li>
						
					</ul>
				</div>
				<footer class="pricing-footer">
					<a href="#" class="btn btn-primary">Comece agora</a>
				</footer>
			</div>
		</div>
		<div class="col-md-4">
			<div class="plan">
				<header class="pricing-head">
					<h3>Premium+
					</h3>
					<span class="price"><sup>€</sup> 150</span>
					<small>por mês</small>
				</header>
				<div class="pricing-body">
					<ul>
						<li>Oferta de 20 horas de destaque que podem ser utilizadas repartidamente e horas de destaque adicionais a metade do preço. 
						</li>
						<li>Oferta da comissão sobre o valor hora(sem limite). 
						</li>
						
					</ul>
				</div>
				<footer class="pricing-footer">
					<a href="#" class="btn btn-default">Comece agora</a>
				</footer>
			</div>
		</div>
	</div>
</div>

<br>
<br><br><br> 	<br>

<h3>Planos de Subscrição - Cliente</h3>
					<div class="row">
						<div class="pricing-table">
							<div class="col-md-4">
								<div class="plan">
									<header class="pricing-head">
										<h3>Standard</h3>
										<span class="price"><sup>€</sup> 00</span>
										<small>por mês</small>
									</header>
									<div class="pricing-body">
										<ul>
											<li>Todas as funcionalidades do serviço
											</li>
											<li>Agendamentos.
											</li>
											<li> 
												Serviços de emergência com taxa de emergência normal (25€)
												<br>
												<br>
												
											</li>
											
											
										</ul>
									</div>
									<footer class="pricing-footer">
										<a href="#" class="btn btn-default">Comece agora</a>
									</footer>
								</div>
							</div>
						<!--<div class="col-md-4">
								<div class="plan popular">
									<header class="pricing-head">
										<h3>Premium</h3>
										<span class="price"><sup>€</sup> 15</span>
										<small>por mês</small>
									</header>
									<div class="pricing-body">
										<ul>
											<li>Todas as funcionalidades do serviço.
											</li>
											<li>Agendamentos</li>
											<li>Subscrição a serviços regulares.
												Oferta da comissão sobre o valor hora (limite de 50 horas de serviço)
												
												</li>
											<li>Serviços de emergência com uma taxa de emergência reduzida (10€).
											</li>
										</ul>
									</div>
									<footer class="pricing-footer">
										<a href="#" class="btn btn-primary">Comece agora</a>
									</footer>
								</div>
							</div> -->
							<div class="col-md-4">
								<div class="plan">
									<header class="pricing-head">
										<h3>Premium</h3>
										<span class="price"><sup>€</sup> 15</span>
										<small>por mês</small>
									</header>
									<div class="pricing-body">
										<ul>
											<li>Todas as funcionalidades do serviço</li>
											<li>Agendamentos</li>
											<li>Subscrição a serviços regulares. Oferta da comissão sobre o valor hora <br>
												(limite de 50 horas de serviço)</li>
											<li>Serviços de emergência com uma taxa de emergência reduzida (10€)</li>
										</ul>
									</div>
									<footer class="pricing-footer">
										<a href="#" class="btn btn-primary">Comece agora</a>
									</footer>
								</div>
							</div> 
						</div>
					</div>





				<!--	<h2>O que dizem os clientes</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="testimonial">
								<blockquote>
									<p>Estou muito contente com o trabalho deles. fizeram um ótimo trabalho. Foram muito úteis noutros aspetos do trabalho que tinha em mente. Foram muito rápidos!</p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/user1-sm.jpg" alt="">
									</figure>
									<h6>David Ferreira</h6>
									<span class="bq-author-info">Designer</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="testimonial">
								<blockquote>
									<p>Os transportadores foram simpáticos, prestáveis, educados, profissionais e eficientes. Fizeram um ótimo trabalho! Eu recomendo-os fortemente! Muito Obrigada!</p>
								</blockquote>
								<div class="bq-author">
									<figure class="author-img">
										<img src="images/samples/user2-sm.jpg" alt="">
									</figure>
									<h6>Emma Verde</h6>
									<span class="bq-author-info">Empresaria</span>
								</div>
							</div>
						</div>
					</div>-->

				</div>
			</section> 
			<!-- Page Content / End --> 
<!-- Modal -->
<div class="modal fade" id="infoPedido1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myLargeModalLabel">Pedido</h4>
							</div>
							<div class="modal-body">
								<h5 class="card-title">Informações do Prestador</h5>
								<form class="row g-3">
									
								<div class="col-md-12">
									<div class="job_img">
                                		<img src=" img/pessoaFotoAreaClienteIcon.png" alt="" class="thumbnail">
                            		</div>
									<div class="team-single-head">
										
										<h3 id="nomePrestador"></h3>
										<div class="faq-item">
										
										</div>
										<blockquote>
										<p>
				
											"Tenho vários anos de experiência na área, uma ética de trabalho forte e excelente capacidade de comunicação para garantir a melhor qualidade possível."
										</p>
										</blockquote>
										
										<div class="faq-item">
										
										</div>
										<div class="list">
											<ul>
												<li>Tarefas realizadas: 4</li>
											</ul>
										</div>
										<span class="glyphicon glyphicon-ok"><p>Certificado XPTO</p></span>


										</div>
										
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary" id="realizaPedido">Selecionar e continuar</button>
								<button type="button" class="btn btn-primary">Falar com o Prestador</button>
							</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
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