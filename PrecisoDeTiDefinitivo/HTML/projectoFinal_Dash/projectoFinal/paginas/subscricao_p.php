


<?php
    session_start();

    if(isset($_SESSION['prestador'])){ 

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../componentes/TagsEcss.php'; ?>
</head>
<link href="..assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/boostrap.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script src="../assets/js/servicos.js"></script>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include '../componentes/sideBar.php'; ?>

        <div class="main-panel">
            <!-- Navbar -->
            <?php include '../componentes/cabecalho.php'; ?>
            <!-- End Navbar -->

            <!-- Conteúdo principal -->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
					<div class="col-md-10 col-md-offset-2">
                        <div class="card">
                          
                                <div class="header text-center">
                                <h4 class="title">Plano de subscrição PrecisoDeTi!!!</h4>
                                <br>
                                </div>
                                <div class="content table-responsive table-full-width table-upgrade">
                                <table class="table">
                                    <thead>
                                        <th></th>
                                    	<th class="text-center">Free</th>
                                    	<th class="text-center">PRO</th>
                                        <th class="text-center">PRO+</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>Destaques</td>
                                        	<td>0 horas</td>
                                        	<td>10 horas/mês</td>
                                            <td>50 horas/mês</td>
                                        </tr>
                                        <tr>
                                        	<td>taxas</td>
                                        	<td>pagas em cada serviço</td>
                                        	<td>isento até 50horas/mês</td>
                                            <td>Isento (ilimitado)</td>
                                        </tr>
                                        
										<tr>
                                        	<td>Acesso a suporte 24/7</td>
											<td><i class="fa fa-times text-danger"></i></td>
                                        	<td><i class="fa fa-check text-success"></td>
                                            <td><i class="fa fa-check text-success"></td>
                                        </tr>
										<tr>
                                        	<td>Preço</td>
											<td>Free</td>
                                        	<td>apenas €75/mês</td>
                                            <td>apenas €150/mês</td>
                                        </tr>
										<tr>
											<td></td>
											<td>
												<a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
											</td>
											<td>
												<a target="_blank" onclick="upgradePro()"  class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
											</td>
                                            											<td>
												<a target="_blank" onclick="upgradeProPlus()" class="btn btn-round btn-fill btn-info">Upgrade to PRO+</a>
											</td>
										</tr>
                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </div>


            <!-- Footer -->
            <?php include '../componentes/roda_pe.php'; ?>
        </div>
    </div>

    <!-- Core JS Files -->
    <?php include '../componentes/scripsts.php'; ?>
    <script src="../assets/js/planosSubscricao.js"></script>
</body>

</html>



<?php
}else{
	  die(header("Location: page-login.php"));
}

?>


