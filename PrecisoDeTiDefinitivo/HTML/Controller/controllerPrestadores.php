<?php

require_once '../model/modelPrestadores.php';

$clientes = new Prestadores();

if($_POST['op'] == 1){
    $resp = $clientes -> registaPrestador(
        $_FILES,
        $_FILES
        );
    echo ($resp); 

}else if($_POST['op'] == 2){
    
}
?>


