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
							<h1>Publicar um trabalho</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<!-- Job Form -->
							<form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">

								<fieldset>
									<label>Tem uma conta?</label>
									<div class="field account-sign-in">
										<p>
											<a class="btn btn-primary btn-sm" href="#"><i class="fa fa-key"></i>Entrar</a>
										</p>

										<div class="alert alert-info alert-dismissable">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
											Se você não tiver uma conta, você pode criar uma abaixo, inserindo seu endereço de e-mail. Uma senha será enviada automaticamente para você.


										</div>
									</div>
								</fieldset>

								<fieldset>
									<label>Seu Email <span class="required">*</span></label>
									<div class="field">
										<input type="email" class="form-control" name="create_account_email" id="account_email" placeholder="nome@seudominio.com" value="" />
									</div>
								</fieldset>
								
								<!-- Job Information Fields -->
								<fieldset class="fieldset-job_title">
									<label for="job_title">Cargo</label>
									<div class="field">
										<input type="text" class="form-control" name="job_title" id="job_title" placeholder="e.g. “Jardineiro”" />
									</div>
								</fieldset>

								<fieldset class="fieldset-job_location">
									<label for="job_location">Localização do Trabalho <small>(optional)</small></label>
									<div class="field">
										<input type="text" class="form-control" name="job_location" id="job_location" placeholder="exmplo: Malagueira, Évora" />
										<small class="description">Deixe em branco se o trabalho puder ser feito de qualquer lugar

										</small>
									</div>
								</fieldset>

								<div class="row">
									<div class="col-md-6">
										<fieldset class="fieldset-job_type">
											<label for="job_type">Tipo de Trabalho</label>
											<div class="field select-style">
												<select name="job_type" id="job_type" class="form-control">
													<option>Não específico</option>
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
												</select>
											</div>
										</fieldset>
									</div>
									<div class="col-md-6">
										<fieldset class="fieldset-job_category">
											<label for="job_category">Categoria</label>
											<div class="field select-style">
												<select name="job_category" id="job_category" class="form-control">
													<option>Não Especificado</option>
													<option>Elétrico</option>
													<option>Manual</option>
													<option>Mudança</option>
													<option>Encanamento</option>
													<option>Servilos Eletrodomésticos </option>
												</select>
											</div>
										</fieldset>
									</div>
								</div>

								<fieldset class="fieldset-job_description">
									<label>Descrição</label>
									<div class="field">
										<textarea name="textarea" cols="30" rows="8" class="form-control"></textarea>
									</div>
								</fieldset>

								<fieldset class="fieldset-application">
									<label for="application">E-mail/URL do aplicativo
									</label>
									<div class="field">
										<input type="text" class="form-control" name="application" id="application" placeholder="Insira o email do trabalho" />
									</div>
								</fieldset>

								<fieldset class="fieldset-company_logo">
									<label for="company_logo">Foto <small>(optional)</small></label>
									<div class="field">
										<input type="file" class="form-control" name="company_logo" id="company_logo" />
										<small class="description">
											Tamanho máximo do arquivo: 32 MB.</small>
									</div>
								</fieldset>

							

								<p>
									<input type="submit" name="submit_job" class="btn btn-primary" value="Vizualizar a lista de Empregos &rarr;" />
								</p>

							</form>
							<!-- Job Form / End -->
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