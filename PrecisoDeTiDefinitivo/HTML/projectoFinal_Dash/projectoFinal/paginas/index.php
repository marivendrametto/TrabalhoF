
<?php
    session_start();

    if(isset($_SESSION['prestador'])){
    



<?php
    session_start();

    if(isset($_SESSION['prestador'])){ 


?>

<!DOCTYPE html>
<html lang="en">
<link href="..assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
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

        <!-- Main panel -->
        <div class="main-panel">
            <!-- Navbar -->
            <?php include '../componentes/cabecalho.php'; ?>
            <!-- End Navbar -->

            <!-- Footer -->
            <?php include '../componentes/roda_pe.php'; ?>
        </div>
    </div>

    <!-- Core JS Files -->
    <?php include '../componentes/scripsts.php'; ?>

</body>

</html>

<?php
}else{
	  die(header("Location: page-login.php"));
}
