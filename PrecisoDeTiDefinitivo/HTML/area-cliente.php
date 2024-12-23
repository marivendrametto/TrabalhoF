<?php
    session_start();

    if(isset($_SESSION['emailC'])){ 

?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
<script src="js/jquery.js"></script>	
<script src="js/bootstrap.js"></script>
<script src="js/review.js"></script>
<script src="js/star-rating.js"></script>
<link href="css/star-rating.css" rel="stylesheet">
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
							<h1>Área de Cliente</h1>
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
										<div class="col-md-5">
											<figure class="alignnone">

												<img src="img/pessoaFotoAreaClienteIcon.png" alt=""> 
											</figure>
										</div>
										<div class="col-md-7">
											<h2 class="name" id="nome">
											</h2>
											<i class="tagline" id="nome">
											</i>
											<i class="tagline" id="datanascimento">
											</i>
											<i class="tagline" id="nif">
											</i>
											<ul class="meta" id="email">
												<li></li>
												
											</ul>
											<ul class="info">
												<li><i class="fa fa-location-arrow"></i><a href="#" id="morada"></a></li>
												<li><i class="fa fa-clock-o"></i> Ultima vez atualizado <span id="ultimamudanca"></span></li>
											</ul>
										</div>
									</div>

									<div class ="spacer"></div>
									<div class ="spacer"></div>
									<div class ="spacer"></div>
									<div class ="spacer"></div>

								</div>
									</div>
	

									<div class="row">
										<div class="col-md-12">

											<!-- Accordion -->
												<div class="panel-group panel-group__alt" id="accordion1">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#accordion1-1">
												Histórico de Serviços
											</a>
										</h4>
									</div>
									<div id="accordion1-1" class="panel-collapse collapse in">
										<div class="panel-body">

											<table class="job-manager-jobs table table-bordered table-striped">
								<thead>
									<tr>

										<th class="job_title">Nº Pedido</th>
										<th class="date">Prestador</th>
										<th class="expires">Data</th>
										<th class="expires">Classificação</th>

										</tr>
								</thead>
								<tbody id="listaPedidos2">
									
								</tbody>

											</table>

										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#accordion1-2" class="collapsed">
												Editar Informações
											</a>
										</h4>
									</div>
									<div id="accordion1-2" class="panel-collapse collapse">
										<div class="panel-body">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCliente">Editar Informações</button>
										</div>
									</div> 	
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#accordion1-3" class="collapsed">
												Adicionar Métodos de Pagamento
                                            </a>
											</a>
										</h4>
									</div>
									<div id="accordion1-3" class="panel-collapse collapse">
										<div class="panel-body">
											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#accordion1-4" class="collapsed">
												Outra cena qq
											</a>
										</h4>
									</div>
									<div id="accordion1-4" class="panel-collapse collapse">
										<div class="panel-body">
											You can place here short or long description. You can also easily past here images, tables, or even grid system. There is no limitation!
										</div>
									</div>
								</div>

							</div>
							<!-- Accordion / End -->

						</div>

		<!-- Modal Editar Dados de Cliente-->
				<div class="modal fade" id="modalPrestador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Dados de Cliente:</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
							<!-- Registo Completo de Cliente -->

							<div class="col-md-12">
								<div class="spacer-lg visible-sm visible-xs"></div>
								<div class="box">

								<div class="row">
									<!-- Nome -->
									<div class="col-md-4">
										<div class="form-group">
											<label for="nomeEdit">Nome </label>
											<input type="text" class="form-control" id="nomeEdit">
											</div>
									</div>
										<!-- NIF -->
										<div class="col-md-4">
										<div class="form-group">
											<label for="nifEdit">Número de Identificação Fiscal:</label>
											<input type="number" class="form-control" id="nifEdit">
											</div>
									</div>
									
                            <!-- Número de Cartão de Cidadão -->
										<div class="col-md-3">
											<div class="form-group">
												<label for="biEdit">Número de Cartão de Cidadão:</label>
												<input type="number" class="form-control" id="biEdit">
											</div>
										</div>
								

									     <!-- Data de Nascimento -->
										<div class="col-md-3">
											<div class="form-group">
												<label for="datanascimentoEdit">Data de Nascimento:</label>
												<input type="date" class="form-control" id="datanascimentoEdit">
											</div>
										</div>
									</div>
								
                                        <!-- Morada -->
										<div class="col-md-3">
											<div class="form-group">
												<label for="moradaEdit">Morada</label>
												<input type="text" class="form-control" id="moradaEdit">
											</div>
										</div>
									</div>
								
 										<!-- Telefone -->
 										<div class="col-md-3">
											<div class="form-group">
												<label for="telefoneEdit">Telefone:</label>
												<input type="number" class="form-control" id="telefoneEdit">
											</div>
										</div>
									</div>


								    <!-- Upload de Foto -->
									<fieldset class="fieldset-company_logo">
									<label for="foto">Foto </label>
									<div class="field">
										<input type="file" class="form-control" name="foto" id="fotoEdit" />
										<small class="description">Tamanho máximo do arquivo: 50 MB. Imagens permitidas: jpg, gif, png. </small>
									</div>
								</fieldset><br>

						
						
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-primary" id="btnGuardarEdit">Registar</button>
						</div>
					</div>
					</div>
				</div>


				<div class="col-md-6">
							<div class="alert alert-success alert-dismissable" id="alertaServico">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
								<strong>O seu pedido foi aceite!</strong> <p><a href="servicos-activos.php">Ir para a página de Serviços</a></p>
							</div>
						</div>

						<!-- Sidebar -->

					<!--	<aside class="sidebar col-md-4">



						<!-- Sidebar / End -->
					<!--	 <aside class="sidebar col-md-4 ">

							<div class="col-md-4">	
								<!-- Sidebar -->
							<!--	<div class="row">	 
									<aside class="sidebar col-md-12 ">  -->	<!--


							<hr class="visible-sm visible-xs lg">

							<div class="box box__color-darken mb-30">
								<h4>Contacte-nos</h4>
								<form action="#" method="POST" id="profile-form">
									<div class="form-group form-grop__icon">
										<i class="entypo user"></i>
										<input type="text" class="form-control" placeholder="Seu Nome">
									</div>
									<div class="form-group form-grop__icon">
										<i class="entypo mail"></i>
										<input type="email" class="form-control" placeholder="Seu Email">
									</div>
									<div class="form-group form-grop__icon">
										<i class="entypo pencil"></i>
										<textarea name="textarea" cols="30" rows="8" class="form-control" placeholder="Sua Mensagem"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
								</form>
							</div>

							<div class="box box__color-darken mb-30">
								<h4>Perfis sociais
								</h4>
								<ul class="social-links social-links__dark">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>



							
									</aside>
								</div>
								<!-- Sidebar / End -->
							</div>

						

                    </div>						
				 </div>		
			</section>	
                       
                    </div>
                </div>
            



				
			</section> 
			



<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myLargeModalLabel">Classificação</h4>
							</div>
							<div class="modal-body">
								<h5 class="card-title">Classifique o serviço prestado</h5>
								<form class="row g-3">
								<div class="col-md-12">
								<label for="review" class="form-label">Classifique o serviço prestado</label>
								<select class="star-rating " id="review">
									<option value="">Atribua uma classificação</option>
									<option value="5">Excelente</option>
									<option value="4">Muito Bom</option>
									<option value="3">Bom</option>
									<option value="2">Mau</option>
									<option value="1">Terrível</option>
								</select>

								<script src="js/star-rating.min.js"></script>
								<script>
									var stars = new StarRating('.star-rating');
								</script>
							
									<div class="col-md-12">
										<label for="testemunho" class="form-label">Testemunho</label>
										<textarea name="textarea" cols="30" rows="10" class="form-control" id="testemunho"></textarea>
									</div>
								
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary" id="submiteReview">Registar</button>
							</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<!-- Page Content / End -->
<!-- Footer -->
<?php include './componentes/footer.php'; ?>
			<!-- Footer / End -->
			
		</div>
		<!-- Main / End -->
	</div>
	
	
	

	
</body>

<?php include './componentes/script.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>



<script src="js/src/clientes.js"></script>
<script src="js/prestador.js"></script>
<script src="projectoFinal_Dash\projectoFinal/js/servicos.js"></script>
</html>


<?php
}else{
	  die(header("Location: page-login.php"));
}
?>