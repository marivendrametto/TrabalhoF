<?php

require_once 'connection.php';

class Chat{
    function enviaMsg($msgEnviada){
                
    global $conn;
                
    $stmt = $conn->prepare("INSERT INTO chat (msg_enviada) VALUES (?)"); 
    $stmt->bind_param("s", $msgEnviada);

    $stmt->execute();

    return json_encode([
    'success' => true,
    'message' => $msgEnviada]);

    $stmt->close();
    $conn->close();

            
   }

    function getMensagens(){
    
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM chat");
                
    $stmt->execute();
    $result = $stmt->get_result();
                
    $row = $result->fetch_assoc();

    $conn -> close();
                
    return json_encode($row);

    }

       
}



?>