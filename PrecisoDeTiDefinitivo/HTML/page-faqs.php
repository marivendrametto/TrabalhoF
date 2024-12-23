<?php
    session_start();

    if(isset($_SESSION['cliente'])){ 

?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
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
							<h1>FAQs</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->






			

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">

							<div class="col-md-12">
								<hr class="visible-sm visible-xs lg">
								
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#accordion-1">
													#1 Posso contratar serviços de emergência ou rápidos?
												
												</a>
											</h4>
										</div>
										<div id="accordion-1" class="panel-collapse collapse in">
											<div class="panel-body">
												Sim, alguns prestadores oferecem serviços de emergência ou rápidos.
												Podes filtrar os prestadores que oferecem este tipo de serviço no site
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#accordion-2" class="collapsed">
													#2 Posso contratar serviços para outra pessoa, como familiares ou amigos?

												</a>
											</h4>
										</div>
										<div id="accordion-2" class="panel-collapse collapse">
											<div class="panel-body">
												Sim, pode contratar serviços para terceiros, desde que forneça as informações adequadas sobre o local e a pessoa para quem o serviço é destinado durante o processo de contratação.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#accordion-3" class="collapsed">
													#3 Posso contratar vários serviços ao mesmo tempo?
												</a>
											</h4>
										</div>
										<div id="accordion-3" class="panel-collapse collapse">
											<div class="panel-body">
												Sim, pode contratar vários serviços em simultâneo, escolhendo prestadores diferentes para responder a várias necessidades, como por exemplo jardinagem e limpeza.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#accordion-4" class="collapsed">
												 #4 Como funciona o pagamento pelos serviços?
												</a>
											</h4>
										</div>
										<div id="accordion-4" class="panel-collapse collapse">
											<div class="panel-body">
												ESCREVER ALGUMA COISA
											</div>
										</div>
									</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#accordion-5" class="collapsed">
													   #5  Como registar-se como prestador? 
													</a>
												</h4>
											</div>
											<div id="accordion-5" class="panel-collapse collapse">
												<div class="panel-body">
													Vá para a seção "Registro" no site e selecione a opção para prestador de serviços.
                                                    E insira os seus dados pessoais. É necessário apresentar o registo criminal atualizado, que pode ser obtido online através do Portal da Justiça ou em pontos financeiros.
                                                    Deverá também submeter um comprovativo de quem está inscrito como trabalhador independente ou empresa nas finanças.
                                                    Caso possua um certificado que comprove a sua qualificação na área em que oferece serviços, pode anexá-lo. Embora seja opcional.

												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#accordion-6" class="collapsed">
														#6 É possível cancelar um serviço após a contratação?
													</a>
												</h4>
											</div>
											<div id="accordion-6" class="panel-collapse collapse">
												<div class="panel-body">
													Sim, é possível cancelar um serviço. 
												    No entanto, deverá verificar as condições de cancelamento estipuladas pelo prestador de serviços, que podem incluir taxas ou prazos de cancelamento.
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#accordion-7" class="collapsed">
														#7 Quais são os benefícios de aderir a um plano de subscrição?
													</a>
												</h4>
											</div>
											<div id="accordion-7" class="panel-collapse collapse">
												<div class="panel-body">
													Os prestadores que aderem a um plano de subscrição beneficiam de maior visibilidade no site,
													 mais contatos por mês e ferramentas que facilitam a gestão dos seus serviços. 
													Os clientes podem ter acesso a pacotes de serviços com condições exclusivas.
												</div>
											</div>
										</div>



										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#accordion-8" class="collapsed">
														#8 Os prestadores têm avaliações?
													</a>
												</h4>
											</div>
											<div id="accordion-8" class="panel-collapse collapse">
												<div class="panel-body">
													Sim, os clientes podem avaliar e comentar os serviços prestados, o que ajuda outros utilizadores a escolher o prestador mais adequado para as suas necessidades.
												</div>
											</div>
										</div>



										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#accordion-9" class="collapsed">
														#9 O que acontece se o prestador não comparecer ou se o serviço for insatisfatório?
													</a>
												</h4>
											</div>
											<div id="accordion-9" class="panel-collapse collapse">
												<div class="panel-body">
													Caso o prestador não compareça ou o serviço não seja satisfatório, podes entrar em contato com o
													 nosso suporte ao cliente para resolver a situação ou buscar uma nova contratação.
												</div>
											</div>
										</div>


										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#accordion-10" class="collapsed">
													 #10 Como posso cancelar ou alterar um serviço agendado?
													</a>
												</h4>
											</div>
											<div id="accordion-10" class="panel-collapse collapse">
												<div class="panel-body">
													Para cancelar ou alterar um serviço, basta acessar o seu painel de cliente e gerenciar os seus pedidos. 
													Consulte as políticas de cancelamento do prestador antes de efetuar alterações.
												</div>
											</div>
										</div>

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
	
	
	


	
</body>
<?php include './componentes/script.php'; ?>
</html>
<?php
}else{
	  die(header("Location: page-login.php"));
}
?>