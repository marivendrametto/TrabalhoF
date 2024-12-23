<?php
    session_start();

    if(isset($_SESSION['prestador'])){ 

?>
<!DOCTYPE html>
<html lang="en">
<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../assets/js/boostrap.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script src="../assets/js/servicos.js"></script>
<head>
    <?php include '../componentes/TagsEcss.php'; ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include '../componentes/sideBar.php'; ?>

        <!-- Main Panel -->
        <div class="main-panel">
            <!-- Navbar -->
            <?php include '../componentes/cabecalho.php'; ?>
            <!-- End Navbar -->

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Card para Horários Disponíveis com Navegação de Semanas -->

                    <div class="row">
                        <div class="col-lg-12">

         <!--             <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pedidos Pendentes</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Serviço</th>
                                                <th>Data</th>
                                                <th>NIF do Orçamento</th>
                                            </tr>
                                        </thead>
                                        <tbody id="listaPedidos">

                                        </tbody>
                                    </table>
                                </div>
                    
                            </div>
                        </div>

                    </div>
                </div>

                    </div> -->

                    <!-- Outras secções do Dashboard -->
                    <!-- Gráfico e Serviços Recentes -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Certificados</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="onlineUsersChart"></canvas>
                                    <button class="btn btn-default">Adicionar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">As minhas mensagens</h4>
                                </div>
                                <div class="card-body" id="historicoServicos">
                                  
                                </div>

                            <div class="row">
                                <button type="button" class="btn btn-success col-12" data-toggle="modal" data-target="#historicoModal">
                                  Ver Últimos Serviços Prestados
                                </button>
                                <div class="col-sm-12"><br></div>
                                <button type="button" class="btn btn-danger col-12" data-toggle="modal" data-target="#historicoModalRecusa">
                                  Ver Serviços Recusados
                                </button>
                                <div class="col-sm-12"><br></div>
                                <button type="button" class="btn btn-warning col-12" data-toggle="modal" data-target="#servicosMarcadosModal">
                                  Ver Serviços Marcados
                                </button>
                                <div class="col-sm-12"><br></div>
                                 <button type="button" class="btn btn-warning col-12" data-toggle="modal" data-target="#pedidosPendentesModal">
                                  Ver Pedidos Pedentes
                                </button>

                                

                            </div>
                        </div>
                    </div>

                    <!-- Tabela de Todos os Serviços -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Serviços Marcados e Histórico</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nº Pedido</th>
                                                <th>Estado</th>
                                                <th>Cliente</th>
                                                <th>Finalizar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="listaOrcamentos">
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>

<!-- Modal - Todos os Serviços Marcados -->

                </div>

            </div>

           
            <!-- Footer -->

        </div>
    </div>
    
    <div class="modal fade" id="infoPedidoDash" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
                    <div class="card">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Informações do Pedido Pendente</h4>
							</div>
							<div class="modal-body">
                                 <label for="nomeClientePedido">Nome do Cliente:</label>
									<p class="col-md-6" id="nomeClientePedido"></p>

                                    <label for="dataDoPedido">Data e Hora:</label>
									<p class="col-md-6" id="dataDoPedido"></p>

                                    <label for="moradaDoPedido">Morada:</label>
									<p class="col-md-6" id="moradaDoPedido"></p>	
									
                                    <label for="comentarioDoPedido">Descrição:</label>
									<p class="col-md-6" id="comentarioDoPedido">
                
                                    <label for="fotoPedido">Foto:</label>
                                    <img id="fotoPedido"></img>
                    
                             </div>
						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Voltar Atrás</button>
								
							</div>
							</div>
                     </div>
						</div>
					</div>
				</div>
			</div>


<div class="modal fade" id="servicosMarcadosModal" tabindex="-1" role="dialog" aria-labelledby="servicosMarcadosModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="servicosMarcadosModalLabel">Todos os Serviços Marcados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Nº Pedido</th>
              <th>Estado</th>
              <th>Cliente</th>
              <th>Finalizar</th>
            </tr>
          </thead>
          <tbody id="listaOrcamentos">
            <!-- Os dados da tabela serão injetados aqui via JavaScript -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="pedidosPendentesModal" tabindex="-1" role="dialog" aria-labelledby="pedidosPendentesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pedidosPendentesModalLabel">Pedidos Pendentes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Serviço</th>
              <th>Data</th>
              <th>NIF do Orçamento</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody id="listaPedidos">
            <!-- Os dados da tabela serão injetados aqui via JavaScript -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="historicoModal" tabindex="-1" role="dialog" aria-labelledby="historicoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="historicoModalLabel">Últimos Serviços Prestados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body" id="historicoServicos">
          <!-- Conteúdo dinâmico dos serviços prestados será injetado aqui -->
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="historicoModalRecusa" tabindex="-1" role="dialog" aria-labelledby="historicoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="historicoModalLabel">Últimos Serviços Recusados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body" id="historicoRecusas">
          <!-- Conteúdo dinâmico dos serviços prestados será injetado aqui -->
        </div>
      </div>
    </div>
  </div>
</div>
</body>




</html>

<!-- Core JS Files -->
<?php include '../componentes/scripsts.php'; ?>



<?php
}else{
	  die(header("Location: page-login.php"));
}
?>
