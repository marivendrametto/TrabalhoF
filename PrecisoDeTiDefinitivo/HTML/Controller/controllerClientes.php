<?php

require_once '../Model/modelClientes.php';

$clientes = new Clientes();

if($_POST['op'] == 1){
    $resp = $clientes -> registaClienteRap(
        $_POST['email'],
        $_POST['password'],
        $_POST['nif'],
        $_POST['morada'],
        $_POST['telefone']
        );
    echo ($resp);


}else if($_POST['op'] == 2){
    $resp = $clientes -> getTipoCliente();
    echo($resp); 

}else if($_POST['op'] == 3){
    $resp = $clientes -> registaCliente(
        $_POST['tipoCliente'],
        $_POST['nome'],
        $_POST['bi'],
        $_POST['datanascimento'],
        $_POST['nif'],
        $_FILES 
        );
    echo ($resp); 
}else if($_POST['op'] == 4){
    $resp = $clientes -> listaAreas();
    echo($resp);
}else if($_POST['op'] == 5){
    $resposta = $clientes -> getDadosCliente($_POST['email']);
    echo($resposta);
}else if($_POST['op'] == 6){
    $resposta = $clientes -> guardaEditCliente(
        $_POST['nifOld'],
        $_POST['nome'],
        $_POST['nif'],
        $_POST['bi'],
        $_POST['datanascimento'],
        $_POST['morada'],
        $_POST['telefone'],   
    );
}else if ($_POST['op'] == 7) {
    $searchTerm = $_POST['morada'] ?? ''; 
    $resp = $clientes->getMoradas($searchTerm);
    echo($resp);
}
?>


