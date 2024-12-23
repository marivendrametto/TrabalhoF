
<?php
    session_start();

    if(isset($_SESSION['prestador'])){ 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../componentes/TagsEcss.php'; ?>
</head>
<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/boostrap.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script src="../assets/js/servicos.js"></script>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include '../componentes/sideBar.php'; ?>

        <!-- Main Panel -->
        <div class="main-panel">
            <!-- Navbar -->
            <?php include '../componentes/cabecalho.php'; ?>
            <!-- End Navbar -->

            <!-- Schedule Section -->
            <div class="schedule">
                <?php include '../componentes/calendarioComp.php'; ?>
                <div id='calendar'></div>
            </div>

            <!-- Footer -->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                        <!-- Conteúdo adicional pode ser adicionado aqui -->
                    </div>
                </div>
            </div>

            <?php include '../componentes/roda_pe.php'; ?>
        </div>
    </div>

</body>

<!-- Core JS Files -->
<?php include '../componentes/scripsts.php'; ?>
<script src="../assets/js/sweetalert.js"></script>
<link rel="stylesheet" href="../assets/js/">

</html>

<?php
}else{
	  die(header("Location: page-login.php"));
}
?>