<?php

require_once 'connection.php';

class ClientesRap{

    
function getArea(){

            global $conn;
            $msg = "<option value = '-1'>Escolha uma opção</option>";
    
    
            $stmt = $conn->prepare("SELECT * FROM areas_profissionais");
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $msg .= "<option value = '".$row['id']."'>".$row['descricao']."</option>";
                }
            }else{
                $msg .= "<option value = '-1'>Sem áreas registadas</option>";
            }
    
            $stmt->close();
            $conn->close();
            return $msg;
        }
    
        function getPrestador(){

            global $conn;
            $msg = "<option value = '-1'>Escolha uma opção</option>";
    
    
            $stmt = $conn->prepare("SELECT * FROM prestador_serviços");
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $msg .= "<option value = '".$row['nif']."'>".$row['nome']."</option>";
                }
            }else{
                $msg .= "<option value = '-1'>Sem Prestadores registados</option>";
            }
    
            $stmt->close();
            $conn->close();
            return $msg;
        }
   
        function registaPedido($area, $prestador){
            global $conn;
            $msg = "";
          
            $stmt = $conn->prepare("INSERT INTO pedido_serviço (idArea, nifPrestador) 
            VALUES (?, ?);");
            $stmt->bind_param("ii", $area, $prestador);
    
            $stmt->execute();
    
            $msg = "Pedido efectuado com sucesso com sucesso!";
            
            $stmt->close();
            $conn->close();
    
            return $msg; 
            }
    function getDadosCliente($nif){
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM clientes WHERE nif = ?");
        $stmt->bind_param("i", $nif);
        $stmt->execute();
        
       
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        
        $stmt->close();
        $conn->close();
    
        
        return json_encode($row);
    }

    function guardaEditCliente($nif, $nome, $morada, $telefone, $email, $nifOld){
    
        global $conn;
        $msg = "";

        $stmt = $conn->prepare("UPDATE clientes 
        SET nif = ?, nome = ?, morada = ?, telefone = ?, email = ?
        WHERE nif = ?");
        $stmt->bind_param("issisi", $nif, $nome, $morada, $telefone, $email, $nifOld );
        $stmt->execute();

        $msg = "Editado com sucesso!";

        $stmt->close();
        $conn->close();

        return $msg;
    }
   

    function wFicheiro($texto){
        $file = '../logs.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= $texto."\n";
        // Write the contents back to the file
        file_put_contents($file, $current);
    }





}
?>