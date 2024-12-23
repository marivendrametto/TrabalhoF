<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/sweetalert.js"></script>
        <script src="assets/js/servicos.js"></script>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" data-image="../assets/img/OIP.jpeg" color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo $_SESSION['prestador'];?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                       
                        <li class="dropdown nav-item">
                     
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
            
                        <li>
                            <a href="#"  onclick="logout();">
                                <p>Logout</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                </div>
            </div>
        </nav>
        <?php
