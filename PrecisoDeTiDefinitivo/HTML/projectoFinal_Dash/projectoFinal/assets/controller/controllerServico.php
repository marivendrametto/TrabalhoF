<?php
require_once '../model/modelServico.php';
$servico = new Servico();
if($_POST['select'] == 1){
    $resp = $servico -> pedidoInfo();
    echo($resp);
}else if($_POST['select'] == 2){
    $resp = $servico -> recusarPedido(
        $_POST['idRecusa'],
    );
    echo($resp);
}else if($_POST['select'] == 3){
    $resp = $servico -> confirmaPedido(
        $_POST['idOrcamento'],
        $_POST['estado'],
    );
    echo($resp);
}else if($_POST['select'] == 4){
    $resp = $servico -> listaOrcamentos();
    echo($resp);
}else if($_POST['select'] == 5){
    $resp = $servico -> finalizaPedido(
        $_POST['idOrcamento'],
        $_POST['estado'],
    );
    echo($resp);
}else if($_POST['select'] == 6){
    $resp = $servico -> logout();
    echo($resp);
}else if($_POST['select'] == 7){
    $resp = $servico -> getHistorico();
    echo($resp);
}else if ($_POST['select'] == 8) {
    $resp = $servico->updatePerfil(
        $_POST['nomePEdit'],
        $_POST['moradaPEdit'],
        $_POST['telPresEdit'],
        $_POST['professional_areas'],
        $_POST['hourly_rate'],
        $_POST['idPrestador']
    );
    echo $resp;
    
}else if($_POST['select'] == 9){
    $resp = $servico -> getHistorico();
    echo($resp);
}else if($_POST['select'] == 9){
    $resp = $servico -> infoOrcamentoC(
        $_POST['idPedido'],
    );
    echo($resp);
}

?>