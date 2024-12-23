<?php
    session_start();

    if(isset($_SESSION['prestador'])){ 

?>
<!DOCTYPE html>
<html lang="en">
<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />   
<link href="../assets/css/reviews.css" rel="stylesheet" type="text/css"/> 
<link href="../assets/css/star-rating-svg.css" rel="stylesheet" type="text/css"/> 
<link href="../assets/css/star-rating.css" rel="stylesheet"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" type="text/css" href="star-rating-svg.css">
        <script src="../assets/js/boostrap.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script src="../assets/js/servicos.js"></script>
        <script src="../assets/js/star-rating.js"></script>
        <script src="../assets/js/reviewP.js"></script>
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

            
    <div class = "container" id="reviewPrestador">

        
    </div>
                    

           
            <!-- Footer -->

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
