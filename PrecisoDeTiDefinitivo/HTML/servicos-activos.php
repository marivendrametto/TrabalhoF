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
							<h1>Serviços Activos</h1>
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
					<form action="#" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data"></form>

					<div class="d-flex align-items-center mb-4" style="position: relative;">
                        <div class="progress progress-striped active flex-grow-1" style="height: 40px;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                <span class="progress-label text-light" style="line-height: 40px; font-weight: bold;">Progresso</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning ms-3" style="height: 40px;" data-toggle="modal" data-target="#modalDetalhes">Detalhes</button>
                        <button type="button" class="btn btn-primary ms-2" style="height: 40px;" data-toggle="modal" data-target="#modalEditServico">Editar</button>
                    </div>
						
                    <!-- Modal Detalhes de Serviço -->
					<div class="modal fade" id="modalDetalhes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLabel">Detalhes do Serviço:</h5>
                                           
                                            </div>
                                            <div class="modal-body">
                                            <div class="col-md-12">
                                        <label for="nomeCliente" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" id="nomeCliente" value="<?php echo $_SESSION['cliente'];?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="nifOrcamento" class="form-label" id="nif">NIF:</label>
                                        <input type="number" class="form-control" id="nifOrcamento">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="dataPedido" class="form-label">Data do Serviço</label>
                                        <input type="datetime-local" class="form-control" id="dataPedido">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="moradaPedido" class="form-label">Morada do Serviço:</label>
                                        <input type="text" class="form-control" id="moradaPedido" value="<?php echo $_SESSION['moradaC'];?>">
                                    </div>
                                   
                                    <div class="col-md-12">
                                       <label for="tipoServico" class="form-label" id="tipoServico">Serviço Pedido:</label>
                                       <input type="text" class="form-control" id="tipoServico">
                                     </div>
                                     <div class="col-md-12">
                                       <label for="fotoServico" class="form-label" id="fotoServico">Foto do Serviço:</label>
                                       <input type="text" class="form-control" id="fotoServico">
                                        </div>
                                        <div class="col-md-12">
                                        <label for="comentarioServico" class="form-label">Comentário que adicionou ao Pedido de Serviço:</label>
                                        <textarea name="textarea" cols="30" rows="10" class="form-control" id="comentarioServico"></textarea>
                                    </div><br>  
                                   
                                    <div class="col-md-12">
                                         <label for="valorhora" class="form-label" >Valor Hora:</label>
                                            <h2 id="valorhora"></h2>
                                    </div>
                                    <div class="col-md-12">
                                            <label for="taxadeslocacao" class="form-label" >Taxa de Deslocação:</label>
                                            <h2 id="taxadeslocacao"></h2>
                                     </div>
                                     <div class="col-md-12">
                                            <label for="taxaservico" class="form-label" >Taxa de Serviço:</label>
                                            <h2 id="taxaservico"></h2>
                                    </div>
                                    <div class="col-md-12">
                                            <label for="numerohoras" class="form-label" >Duração do Serviço (Estimativa):</label>
                                            <h2 id="numerohoras"></h2>
                                            </div>
                                    <div class="col-md-12">
                                            <label for="materiaispedidos" class="form-label" >Materias Pedidos:</label>
                                            <h2 id="materiaispedidos"></h2>
                                            </div>
                                    <div class="col-md-12">
                                            <label for="totalprovisorio" class="form-label" >Total Provisório:</label>
                                            <h2 id="totalprovisorio"></h2>
                                            </div>
                                            </div>
                                    <div class="col-md-12">
                                          <h6>  <small class="description" class="form-label" >*Este orçamento é provisório tendo em conta a imprevisibilidade do serviço, não será feita nenhuma alteração ao mesmo sem a sua confirmação!</small></h6>
                                            </div>
                                            <div class="modal-footer">

                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Registar</button>
                                            </div></div></div>
                                        </div>
                                        </div>
                                        </div>


                        <!-- Modal Edita Detalhes de Serviço -->
						<div class="modal fade" id="modalEditServico" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" >
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detalhes do Serviço:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                           
                                            <label for="nomeCliente" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" id="nomeCliente" value="<?php echo $_SESSION['cliente'];?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="nifOrcamento" class="form-label" id="nif">NIF associado ao serviço:</label>
                                        <input type="number" class="form-control" id="nifOrcamento">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="dataPedido" class="form-label">Data do Serviço</label>
                                        <input type="datetime-local" class="form-control" id="dataPedido">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="moradaPedido" class="form-label">Morada do Serviço:</label>
                                        <input type="text" class="form-control" id="moradaPedido" value="<?php echo $_SESSION['moradaC'];?>">
                                    </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Editar</button>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
 

										<div class="card text-center mt-5">
                                           <div class="card-body">
                                        <div class="card w-50">
                                        <div class="card-body">
                                            <h5 class="card-title">Falar com o Prestador</h5>
                                            <p class="card-text">Precisa de falar com o prestador de serviços? Clique no botão abaixo!</p>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chatPrestador">Falar com o Prestador</button>
                                        </div>
                                        </div>
 
                                        <div class="modal fade" id="chatPrestador" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="wrapper">
                                                <section class="chat-area">
                                                    <header>
                                                        <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                                                        <img src="img/pessoaFotoAreaClienteIcon.png" alt="">
                                                        <div class="details">
                                                            <span>Nome Prestador</span>
                                                            <p>Active now</p>
                                                        </div>
                                                    </header>
                                                    <div class="chat-box">
                                                        <div class="chat outgoing">
                                                            <div class="details" id="msgCliente">
                                                               
                                                            </div>
                                                        </div>
                                                        <!--<div class="chat incoming">
                                                            <img src="img/pessoaFotoAreaClienteIcon.png" alt="">
                                                            <div class="details">
                                                               
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="chat outgoing">
                                                            <div class="details">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="chat incoming">
                                                            <img src="img/pessoaFotoAreaClienteIcon.png" alt="">
                                                            <div class="details">
                                                               
                                                            </div>
                                                        </div>
                                                    </div> -->
                                            <form action="#" class="typing-area">
                                                <input type="text"  id="msgEnviada" placeholder="Escreva aqui a sua mensagem...">
                                                <button onclick="enviaMsg()"> <i class="fa fa-location-arrow"></i></button>
 
 
                                            </div>
                                        </div>
 
                                          </div>
                                       </div>
 

                                        <!--Mapa de Tracking-->
 
                                        <!--Mais qq coisa?-->
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

<script src="js/servicos.js"></script>


 

</html>