
<?php
    session_start();

    if(isset($_SESSION['emailC'])){ 

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
                            <h1>Pedido de Serviço</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Heading / End -->

            <!-- Page Content -->
            <section class="page-content py-5">
                <div class="container">
                    <div class="form-container">

                    


                    <h5><strong>Insira as informações necessárias:</strong></h5><br>

                        <form id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <label for="nomeCliente" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" id="nomeCliente" placeholder="Insira o seu nome" value="<?php echo $_SESSION['cliente'];?>" required>
                                        <br>
                                </div>
                                <div class="col-md-4">
                                    <label for="nifOrcamento" class="form-label">NIF:</label>
                                    <input type="number" class="form-control" id="nifOrcamento" placeholder="Insira o NIF para associar ao seu serviço" required>
                                </div><br>

                                <div class="col-md-6">
                                    <label for="dataPedido" class="form-label">Data e Horário do Serviço:</label>
                                    <input type="datetime-local" class="form-control" id="dataPedido" required>
                                </div><br>
                                <div class="col-md-6">
                                    <label for="moradaPedido" class="form-label">Morada:</label>
                                    <input type="text" class="form-control" id="moradaPedido" value="<?php echo $_SESSION['moradaC'];?>" required>
                               <br> </div>
                            </div>

                            <!-- TABELAS -->
                            <hr class="my-4">
                            <h5 class="mb-3">Escolha o tipo de serviço que pretende pedir:</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tipo de Serviço</th>
                                    </tr>
                                </thead>
                                <tbody id="listatiposervico">
                                </tbody>
                            </table>

                            <h5 class="mt-4 mb-3">Selecione os materiais necessários para o serviço:</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Material</th>
                                        <th>Valor (€)</th>
                                    </tr>
                                </thead>
                                <tbody id="listaMateriaisOrcamento">

                                </tbody>
                            </table>

                            <div class="col-md-12">
                                        <label for="fotoPedido" class="form-label">Insira uma foto descriptiva do problema</label>
                                        <input type="file" class="form-control" name="foto" id="foto" />
                                        <small class="description">Tamanho máximo do arquivo: 50 MB. Imagens permitidas: jpg, png. </small>
                                    
                                    <br><br></div>
                                   
                               <br>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <label for="comentarioPedido" class="form-label">Insira um comentário a descrever o seu problema:</label>
                                        <textarea name="textarea" cols="30" rows="10" class="form-control" id="comentarioPedido"></textarea>
                                        <br>
                                    </div>
                                    </div>



                            <!--Button trigger modal-->
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalservico">
                                    Pedir Serviço
                                </button>
                            </div>
                            
                              <!-- Modal -->
                              <div class="modal fade" id="modalservico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Orçamento Provisório:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                           
                                            <label for="valorhora">Valor Hora: </label>
                                            <h2 id="valorhora">25€</h2>
 
                                            <label for="taxadeslocacao">Taxa de Deslocação:</label>
                                            <h2 id="taxadeslocacao">3,75€</h2>
 
                                            <label for="taxaservico">Taxa de Serviço:</label>
                                            <h2 id="taxaservico">10€</h2>
 
                                            <label for="numerohoras">Duração do Serviço (Estimativa):</label>
                                            <h2 id="numerohoras">2</h2>
 
                                            <label for="materiaispedidos">Materiais Pedidos:</label>
                                            <h2 id="materiaispedidos">6,99€</h2>
 
                                            <label for="totalprovisorio">Total Provisório:</label>
                                            <h2 id="totalprovisorio">70,74€</h2>
 
                                            <small class="description">*Este orçamento é provisório tendo em conta a imprevisibilidade do serviço, não será feita nenhuma alteração ao mesmo sem a sua confirmação!</small>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary" onclick="registaPedido()">Confirmar Pedido</button>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
 
                                        </form>
                               
                                        </div>
                                        <br>
                       
                                        </div>
 
                           
                                    </div>
                           
                                    </form>
                                    </div>
                                    <!-- Profile Form / End -->
                           
 
                       
   
            <!-- Page Content / End -->

            <!-- Footer -->
            <?php include './componentes/footer.php'; ?>
            <!-- Footer / End -->

        </div>
        <!-- Main / End -->
    </div>

    <!-- Scripts -->
    <?php include './componentes/script.php'; ?>
    <script src="js/jquery.js"></script>
    <script src="js/servicos.js"></script>
    
</body>
</html>



<?php
}else{
	  die(header("Location: page-login.php"));
}
?>

      