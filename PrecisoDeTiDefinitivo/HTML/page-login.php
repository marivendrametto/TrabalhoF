<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

<?php include './componentes/metaCSS.php'; ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/sweetalert.js"></script>
<script src="js/utilizador.js"></script>
</head>
<body class="MYslider">

	<div class="site-wrapper">

<?php include './componentes/cabecalho.php'; ?>
		<!-- Header / End -->


		<!-- Main -->
		<div class="main" role="main">

			<!-- Page Heading -->
			<section class="page-heading MYslider">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Login</h1>
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
							<div class="box">
								<h3>Login - Cliente</h3>
								<form action="#" method="POST" role="form">
									<div class="form-group">
										<label>Endereço de email <span class="required">*</span></label>
										<input type="text" class="form-control" id="emailLogin">
									</div>
									<div class="form-group">
										<div class="clearfix">
											<label class="pull-left">
												Password <span class="required">*</span>
											</label>
											<span class="pull-right"><a href="#">Não sei a password</a></span>
										</div>
										<input type="password" class="form-control" id="passwordLogin">
									</div>
									<button type="button" onclick="login()" class="btn btn-primary">Login</button>&nbsp; &nbsp; &nbsp; 
									<label for="remember" class="checkbox-inline">
										<input type="checkbox" name="remember" id="remember"> Memorizar dados
									</label>
								</form>
							</div>
						</div>
						<div class="row">
						<div class="col-md-5">
							<div class="box">
								<h3>Login - Prestador</h3>
								<form action="#" method="POST" role="form">
									<div class="form-group">
										<label>Endereço de email <span class="required">*</span></label>
										<input type="text" class="form-control" id="emailLoginP">
									</div>
									<div class="form-group">
										<div class="clearfix">
											<label class="pull-left">
												Password <span class="required">*</span>
											</label>
											<span class="pull-right"><a href="#">Não sei a password</a></span>
										</div>
										<input type="password" class="form-control" id="passwordLoginP">
									</div>
									<button type="button" onclick="loginPrestador()" class="btn btn-primary">Login</button>&nbsp; &nbsp; &nbsp; 
									<label for="remember" class="checkbox-inline">
										<input type="checkbox" name="remember" id="rememberP"> Memorizar dados
									</label>
								</form>
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