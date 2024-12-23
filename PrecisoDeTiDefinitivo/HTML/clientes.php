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
							<h1>Registo de Cliente</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
			<div class="page-content">
				<div class="container">
					 <!-- Formulário Principal -->
					
					<fieldset>
						<label>Tem uma conta?</label>
						<div class="field account-sign-in">
							<p>
								<a class="btn btn-primary btn-sm" href="#"><i class="fa fa-key"></i>Entrar</a>
							</p>

							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>

								Se não tiver uma conta, pode criar uma abaixo, inserindo algumas informações rápidamente.

							</div>
						</div>
					</fieldset>
					
					<div class="row">
						
							
						<div class="col-md-12">
							<div class="spacer-lg visible-sm visible-xs"></div>
							<div class="box">

								<h3>Insira algumas informações</h3>
								<form action="#" method="POST" role="form">
								<div class="row">
									<div class="col-md-4">	
										<div class="form-group">
										    <label for="email">Endereço de Email <span class="required">*</span></label>
										    <input type="email" class="form-control" id="email">
									    </div>
								     </div>
							
								
										<div class="col-md-4">
											<div class="form-group">
												<label for="password">Password <span class="required">*</span></label>
												<input type="password" class="form-control" id="password">
												
										</div>
									</div>
								
										
											<div class="col-md-4">
												<div class="form-group">
													<label for="telefone">Número de Identificação Fiscal <span class="required">*</span></label>
													<input type="number" class="form-control" id="nif">
												</div>
											</div>
										</div>
										
										
										<div class="row">
										<div class="form-group">
												<label for="morada">
  												Insira a sua morada: <span class="required">*</span>
												<select class="js-example-basic-single js-states form-control" id="morada" style="width: 80%"></select>
												</label>
											</div>
											
												<div class="col-md-4">
													<div class="form-group">
														<label for="telefone">Número de Telefone <span class="required">*</span></label>
														<input type="number" class="form-control" id="telefone">
													</div>
												</div>
											</div>
											
									<button type="button" class="btn btn-primary" onclick="registaClienteRap()">Confirmar Informações</button>
								
                            
								</form>
								
							</div>
							<br>
						
						</div>

							
  </div>
							
									</form>
									</div>
									<!-- Profile Form / End -
							

						
		 Page Content / End -->

			<!-- Footer -->
<?php include './componentes/footer.php'; ?>
			<!-- Footer / End -->
			
		</div>
		<!-- Main / End -->
	</div>
	
	
	

	
</body>
<?php include './componentes/script.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/select2.js"></script>
<link rel="stylesheet" href="css/select2.css">
<script src="js/src/clientes.js"></script>
</html>