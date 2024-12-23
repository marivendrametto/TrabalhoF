<?php

require_once 'connection.php';

class Rating{
    function getReviews(){

        global $conn;
        $msg = "";

        $stmt = $conn->prepare("SELECT * FROM ratings,prestador_servicos WHERE ratings.nifPrestador = prestador_servicos.nif");
        $stmt->execute();
        
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= ' 
                    <div class="star-rating" id="review-display"
                        <p>'.$row['rating'].'</p>
                    </div>
                    <div class=container>
                        
                        <i>'.$row['data'].'</i>
                         <p>'.$row['testemunho'].'</p>
                    </div>';
            }
        }else{
            $msg .= "Sem classificações registadas";
        }

        $stmt->close();
        $conn->close();
        return $msg;

    }

}

?>