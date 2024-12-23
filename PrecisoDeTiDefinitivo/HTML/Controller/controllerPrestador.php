<?php
require_once '../model/modelPrestador.php';
$prest = new Prestador();
if($_POST['select'] == 1){
    $resp = $prest -> prestadorInfo();
    echo($resp);
}else if($_POST['select'] == 2){
    $resp = $prest -> modalPedido(
        $_POST['nif'],
    );
    echo($resp);
    
}else if($_POST['select'] == 3){
    $resp = $prest -> fazPedido(
        $_POST['nif'],
        $_POST['nifOrcamento'],
        $_POST['data'],
    );
    echo($resp);
}else if($_POST['select'] == 4){
    $resp = $prest -> getPedidosAceites();
    echo($resp);
}
?>