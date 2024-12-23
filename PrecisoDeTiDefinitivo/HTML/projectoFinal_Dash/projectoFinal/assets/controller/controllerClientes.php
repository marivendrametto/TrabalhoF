<?php

require_once '../Model/modelClientes.php';

$clientes = new Clientes();

if($_POST['op'] == 1){
    $resp = $clientes -> getTipoCliente();
    echo($resp); 

}else if($_POST['op'] == 2){
    $resp = $clientes -> registaCliente(
        $_POST['tipoCliente'],
        $_POST['nome'],
        $_POST['bi'],
        $_POST['datanascimento'],
        $_FILES 
        );
    echo ($resp); 
}else if($_POST['op'] == 3){
    $resp = $clientes -> listaAreas();
    echo($resp);
}else if($_POST['op'] == 4){
    $resp = $clientes -> getDadosCliente($_POST['nif']);
    echo($resp);
}else if ($_POST['op'] == 5) {
    $idPrestador = $_POST['idPrestador'];
    $datainicio = $_POST['datainicio'];
    $datafim = $_POST['datafim'];

    $resp = $clientes->marcarHorarioBD($idPrestador, $datainicio, $datafim);
    echo $resp;
}else if ($_POST['op'] == 6) { // Operação para buscar horários
    $idPrestador = isset($_POST['idPrestador']) ? $_POST['idPrestador'] : null;
    if ($idPrestador) {
        $horarios = $clientes->getHorarios($idPrestador);
        echo json_encode($horarios);
    } else {
        echo json_encode([]);
    }
}else if ($_POST['op'] == 7) { // Operação para desmarcar horário
    $idPrestador = isset($_POST['idPrestador']) ? $_POST['idPrestador'] : null;
    $datainicio = isset($_POST['datainicio']) ? $_POST['datainicio'] : null;
    $datafim = isset($_POST['datafim']) ? $_POST['datafim'] : null;


    if ($idPrestador && $datainicio && $datafim) {
        $resp = $clientes->desmarcarHorario($idPrestador, $datainicio, $datafim);
        echo $resp;
    } else {
        echo "Erro: Dados incompletos fornecidos.";
    }
}

?>


