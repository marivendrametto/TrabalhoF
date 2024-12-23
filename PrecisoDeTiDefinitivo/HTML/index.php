<?php
    session_start();

    if(isset($_SESSION['cliente'])){ 

?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie no-js" lang="en"> <!--<![endif]-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/servicos.js"></script>
<head>
<?php include './componentes/metaCSS.php'; ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/servicos.js"></script>
<script src="js/sweetalert.js"></script>
</head>

<body class="MYslider">

	<div class="site-wrapper">

		<!-- Header -->
<?php include './componentes/cabecalho.php'; ?>
		<!-- Header / End -->


		<!-- Main -->
		<div class="main" role="main">

			<!-- Slider -->
			<section class="MYslider">
				<div class="flexslider carousel ">

					<div class="search-box">
						<div class="container">
							<div class="search-box-inner">
								<h1 class="corTitulo">Procure por Profissionais</h1>
								<form   role="form">

									<div class="row">


										<div class="col-md-4 col-md-offset-1">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Localização">
											</div>
										</div>
										<div class="col-md-4 col-xl-offset-2">
											<div class="form-group">
												<div class="select-style" id="areasPrestacaoServico">
													<select class="form-control">
														<option>Nossos Serviços</option>
														<option>Construção</option>
														<option>Canalização</option>
														<option>Mudanças</option>
														<option>Limpezas</option>
														<option>Eletricista</option>
														<option>Piscinas</option>
														<option>Serviços Domésticos </option>
														<option>Montagem</option>
														<option>Beleza &amp; Estética</option>
														<option>Recados</option>
														<option>Automóvel</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<button type="submit" class="btn btn-primary btn-block"><i
													class="fa fa-search" onclick="listarPrestadoresArea()"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

										<ul class="slides">
						<li>
							<img src="../projectoFinal_Dash/projectoFinal/assets/img/full-screen-image-3.jpg" alt="" />
						</li>
						<li>
							<img src="../projectoFinal_Dash/projectoFinal/assets/img/OIP.jpeg" alt="" />
						</li>
						<li>
							<img src="../projectoFinal_Dash/projectoFinal/assets/img/OIP.jpeg" alt="" />
						</li>
					</ul>
				</div>
			</section>
			<!-- Slider / End -->
			

			<!-- Page Content -->
			<section class="page-content">
				<div class="tablePrestadoresArea"></div>
				<div class="container">



					<div class="spacer-lg">

					</div>

					<!-- Services -->
					<div class="title-bordered">
						<h2>Nossos Serviços <small>serviços que prestamos</small></h2>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon" id="1"  onclick="getPrestadoresServicos(this.id)">
									<i class="entypo tools"></i>
								</div>
								<div class="icon-box-body">
									<h5>Construção</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon">
									<i class="fa fa-cog "></i>

								</div>
								<div class="icon-box-body">
									<h5>Canalização</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon">
									<i class="fa fa-archive"></i>
								</div>
								<div class="icon-box-body">
									<h5>Mudanças</h5>
									<p> </p>
								</div>
							</div>
						</div><br>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon">
									<i class="fa fa-recycle "></i>
								</div>
								<div class="icon-box-body">
									<h5>Limpezas</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" >
									<i class="fa fa-lightbulb-o"></i>
								</div>
								<div class="icon-box-body">
									<h5>Eletricista</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon">
									<i class="fa fa-tree"></i>
								</div>
								<div class="icon-box-body">
									<h5>Jardinagem</h5>
									<p> </p>
								</div>
							</div>
						</div><br>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" >
									<i class="entypo air"></i>
								</div>
								<div class="icon-box-body">
									<h5>Piscinas</h5>
									<p> </p>

								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" >
									<i class="fa fa-home"></i>
								</div>
								<div class="icon-box-body">
									<h5>Serviços Domésticos</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" >
									<i class="fa fa-cube"></i>
								</div>
								<div class="icon-box-body">
									<h5>Montagem</h5>
									<p></p>
								</div>
							</div>
						</div><br>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" >
									<i class="entypo brush"></i>
								</div>
								<div class="icon-box-body">
									<h5>Beleza e Estética</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" >
									<i class="fa fa-suitcase"></i>

								</div>
								<div class="icon-box-body">
									<h5>Recados</h5>
									<p> </p>
								</div>
							</div><br>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
							<div class="icon" id="12"  onclick="getPrestadoresServicos(this.id)">
									<i class="fa fa-car"></i>

								</div>
								<div class="icon-box-body">
									<h5>Automóvel</h5>
									<p> </p>
								</div>
							</div><br>
						</div>

					</div>
					<!-- Services / End -->
					 
						
				</div>
				</div>
		</div>
		<!-- Clients / End -->



		<!-- Testimonials -->

		<!-- Testimonials / End -->

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
							<div class="modal-split">
							<h5 class="card-title">Insira as informações necessárias para o seu pedido</h5>
								<form class="row g-3">
								<div class="col-md-12">
										<label for="nomeCliente" class="form-label">Insira o seu nome</label>
										<input type="text" class="form-control" id="nomeCliente" value="<?php echo $_SESSION['cliente'];?>">
									</div>
									<div class="col-md-12">
										<label for="nifOrcamento" class="form-label" id="nif">Insira o NIF para associar ao seu serviço</label>
										<input type="number" class="form-control" id="nifOrcamento">
									</div>
									<div class="col-md-12">
										<label for="dataPedido" class="form-label">Selecione a Data para o seu Serviço</label>
										<input type="datetime-local" class="form-control" id="dataPedido">
									</div>
									<div class="col-md-12">
										<label for="moradaPedido" class="form-label">Insira a sua morada</label>
										<input type="text" class="form-control" id="moradaPedido" value="<?php echo $_SESSION['moradaC'];?>">
									</div>
							</div>
								
							<div class="modal-split">
							<h5 class="card-title">Qual o tipo de Serviço que pretende pedir?</h5>

							<table class="job-manager-jobs table table-bordered table-striped">
									<thead>
										<tr>
										<th class="job_title">Tipo de Serviço</th>
									    </tr>
								</thead>
								<tbody id="listatiposervico">
									
								</tbody>
							</table>
							</div>
									
									<div class="col-md-12">
										<label for="fotoPedido" class="form-label">Insira uma foto descriptiva do problema</label>
										<input type="file" class="form-control" name="foto" id="foto" />
										<small class="description">Tamanho máximo do arquivo: 50 MB. Imagens permitidas: jpg, gif, png. </small>
									</div>
								
									
									
									
									<div class="form-group">
										<div class="col-md-12">
										<label for="comentarioPedido" class="form-label">Insira um comentário a descrever o seu problema,</label>
										<textarea name="textarea" cols="30" rows="10" class="form-control" id="comentarioPedido"></textarea>
									</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary" id="realizaPedido">Registar</button>
								<button type="button" class="btn btn-primary">Falar com o Prestador</button>
							</div>
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




<?php include 'componentes/script.php'; ?>
	<script>
		jQuery(function ($) {
			$('body').addClass('loading');
		});

		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "fade",
				controlNav: true,
				directionNav: false,
				prevText: "",
				nextText: "",
				start: function (slider) {
					$('body').removeClass('loading');
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