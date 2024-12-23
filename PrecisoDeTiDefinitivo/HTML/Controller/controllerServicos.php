<?php
require_once '../model/modelServico.php';
$servico = new Servico();
if($_POST['select'] == 1){
    $resp = $servico -> listaServicos(
        $_POST['idServico'],
    );
    echo($resp);
}else if($_POST['select'] == 2){
    $resp = $servico -> modalPedido(
        $_POST['nif'],
    );
    echo($resp);
}else if($_POST['select'] == 3){
    $resp = $servico -> registaPedido(
        $_POST['idPrestador'],
        $_POST['nomeCliente'],
        $_POST['nifOrcamento'],
        $_POST['dataPedido'],
        $_POST['moradaPedido'],
        $_POST['tiposervico'],
        $_FILES,
        $_POST['comentario'],
        $_POST['materiaisOrcamento']
    );
    echo($resp);
}else if($_POST['select'] == 4){
    $resp = $servico -> getDadosCliente($_POST['email']);
    echo($resp);
}else if($_POST['select'] == 5){
    $resp = $servico -> listaMateriaisOrcamento();
    echo($resp);
}else if($_POST['select'] == 6){
    $resp = $servico -> getTipoServico();
    echo($resp);
}

?>