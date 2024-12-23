<?php
require_once '../model/modelChat.php';
$servico = new Chat();
if($_POST['op'] == 1){
    $resp = $servico -> enviaMsg(
        $_POST['msgEnviada']
       );
       echo($resp);
}else if($_POST['op'] == 2){
    $resp = $servico -> getMensagens();
    echo($resp);
    }

?>