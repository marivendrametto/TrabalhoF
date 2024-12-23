<?php
require_once '../model/modelUtilizador.php';
$user = new Utilizador();
if($_POST['select'] == 1){
    $resp = $user -> tipoDeUtilizadorSelect();
    echo($resp);
}else if($_POST['select'] == 2){
    $resp = $user -> registaUser(
        $_POST['email'],
        $_POST['password'],
        $_POST['tipo'],
    );
    echo($resp);
}else if($_POST['select'] == 3){
    $resp = $user -> login(
        $_POST['email'],
        $_POST['password'],
    );
    echo($resp);
}else if($_POST['select'] == 4){
    $resp = $user -> loginPrestador(
        $_POST['email'],
        $_POST['password'],
    );
    echo($resp);
}else if($_POST['select'] == 5){
    $resp = $user -> logout();
    echo($resp);
}
?>