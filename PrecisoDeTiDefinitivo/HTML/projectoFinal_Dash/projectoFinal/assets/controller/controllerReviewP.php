<?php

require_once '../model/modelReviewP.php';

$rating = new Rating();

if($_POST['select'] == 1){
    $resp = $rating -> getReviews();
    echo($resp);
}


?>