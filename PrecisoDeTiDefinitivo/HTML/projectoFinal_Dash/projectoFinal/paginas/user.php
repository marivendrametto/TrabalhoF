<?php
    session_start();

    if(isset($_SESSION['prestador'])){ 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../componentes/TagsEcss.php'; ?>
</head>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
<link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

        <script src="../assets/js/boostrap.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script src="../assets/js/servicos.js"></script>
<body>
    <div class="wrapper">


        <!-- Inclui a barra lateral -->
        <?php include '../componentes/sideBar.php'; ?>

        <!-- Conteúdo principal -->
        <div class="main-panel">        
            <!-- Inclui o cabeçalho -->
        <?php include '../componentes/cabecalho.php'; ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Perfil</h4>
                                </div>
                                <div class="content">
                                    <form id="user-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="first-name">Nome</label>
                                                    <input type="text" class="form-control" value="<?php echo $_SESSION['prestador'];?>"placeholder="Primeiro Nome"
                                                        id="" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">Morada</label>
                                                    <input type="text" class="form-control" placeholder="Morada"
                                                        value="<?php echo $_SESSION['moradaP'];?>" id="moradaDashboardP" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone">Nº Telemóvel</label>
                                                    <input type="number" class="form-control" placeholder="Nº Telemóvel"
                                                       value="<?php echo $_SESSION['teleP'];?>" id="telDashboardP"readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="professional-areas">Áreas Profissionais</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Áreas Profissionais" id="professional-areas"
                                                        value="Canalizador" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hourly-rate">Valor Hora</label>
                                                    <input type="number" class="form-control" placeholder="Valor Hora"
                                                        id="valorHoradashboardP" value="<?php echo $_SESSION['valor'];?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="profile-image">Imagem de Perfil</label>
                                                    <input type="file" class="form-control" id="profile-image"
                                                        accept="image/*" onchange="previewImage(event)" readonly>
                                                    <img id="image-preview" src="#" alt="Pré-visualização"
                                                        style="display:none; margin-top:10px; max-width: 100%;" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="bio">Texto de Apresentação</label>
                                                    <textarea rows="5" class="form-control"
                                                        placeholder="Aqui pode ser a sua descrição" id="bio"
                                                        readonly>Canalizador..</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="editarUser.php" class="btn btn-info btn-fill pull-right">Editar</a>

                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inclui o footer -->
            <?php include '../componentes/roda_pe.php'; ?>
        </div>
    </div>

    <!-- Scripts -->
    <?php include '../componentes/scripsts.php'; ?>
</body>

</html>
<?php
}else{
	  die(header("Location: page-login.php"));
}
?>
