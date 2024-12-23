<?php

require_once '../model/modelPlanoSub.php';

$plano = new PlanoSub();

if($_POST['select'] == 1){
$resp = $plano -> planoPremium();
    echo($resp);
}else if($_POST['select'] == 2){
    $resp = $plano -> planoPremiumPlus();
    echo($resp);

}

?>