<?php
require_once 'connection.php';

class Review{
    function modalReview($nif){
        global $conn;
        $msg = "";
        $row = "";

        $sql = "SELECT * FROM rating WHERE nif =".$nif;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            $row = $result->fetch_assoc();
        }

        $conn->close();

        return (json_encode($row));
    }

    function submitReview($nif,$rating,$testemunho,$data){
        global $conn;
        $msg = "";
      

        $stmt = $conn->prepare("INSERT INTO ratings (rating, testemunho, data, nifPrestador) VALUES (?, ?, ?,?);");
        $stmt->bind_param("issi", $rating, $testemunho,$data,$nif);

        $stmt->execute();

        $msg = "Classificação submetida com sucesso! Agradecemos o seu contributo!";
        
        $stmt->close();
        $conn->close();

        return $msg; 
    }

}

?>