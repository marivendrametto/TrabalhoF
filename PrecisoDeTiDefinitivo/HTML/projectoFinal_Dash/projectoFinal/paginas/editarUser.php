<?php
    session_start();

    if(isset($_SESSION['prestador'])){
    


?>



        $idP = $_SESSION['id']; 

?>



<!DOCTYPE html>
<html lang="en">
<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Suas informações</h4>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="first-name">Nome</label>
                                                    <input type="text" class="form-control" value="<?php echo $_SESSION['prestador'];?>"placeholder="Primeiro Nome"
                                                        id="nomePEdit">
                                                </div>
                                            </div>
                                        </div>
                                

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">Morada</label>
                                                    <input type="text" class="form-control" placeholder="Morada"
                                                        value="<?php echo $_SESSION['moradaP'];?>" id="moradaPEdit">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone">Nº Telemóvel</label>
                                                    <input type="number" class="form-control" placeholder="Nº Telemóvel"
                                                       value="<?php echo $_SESSION['teleP'];?>" id="telPresEdit">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="professional_areas">Áreas Profissionais</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Áreas Profissionais" value="<?php echo $_SESSION['areaP'];?>" id="professional_areas">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hourly-rate">Valor Hora</label>

                                                    <input type="number" class="form-control" placeholder="Valor Hora"
                                                        id="hourly-rate" value="<?php echo $_SESSION['valor'];?>">

                                                    <input type="number" class="form-control" placeholder="Valor Hora" value="<?php echo $_SESSION['valorHoraP'];?>"
                                                        id="hourly_rate">

                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="bio">Texto de Apresentação</label>
                                                    <textarea rows="5" class="form-control"
                                                        placeholder="Canalizador.." id="bio"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        


                                        <button type="button" class="btn btn-info btn-fill pull-right"
                                            onclick="atualizarPerfil(<?php echo $idP;?>)">Atualizar Perfil</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include '../componentes/roda_pe.php'; ?>
        </div>
    </div>

</body>

<!-- Core JS Files -->
<?php include '../componentes/scripsts.php'; ?>

</html>
<?php
}else{
	  die(header("Location: page-login.php"));
}
?>