<?php

require_once '../model/modelClientesRap.php';

$clientes = new ClientesRap();

if($_POST['op'] == 1){
    
}else if($_POST['op'] == 2){
    $resp = $clientes -> getArea();
    echo($resp);

}else if($_POST['op'] == 3){
    $resp = $clientes -> getPrestador();
    echo($resp);

}else if($_POST['op'] == 4){
    $resp = $clientes -> registaPedido($_POST['area'],
    $_POST['prestador'],
    );
echo($resp);

}
?>