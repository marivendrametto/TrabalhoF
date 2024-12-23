<?php
require_once '../model/modelReview.php';
$review = new Review();
if($_POST['select'] == 2){
    $resp = $review -> modalReview();
    echo($resp);
}else if($_POST['select'] == 3){
    $resp = $review -> submitReview(
        $_POST['nif'],
        $_POST['rating'],
        $_POST['testemunho'],
        $_POST['data'],
        
    );
    echo($resp);
}
?>