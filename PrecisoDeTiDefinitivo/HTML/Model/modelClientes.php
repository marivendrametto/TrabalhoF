<?php

require_once 'connection.php';

class Clientes{
    function registaClienteRap($email, $password, $nif, $morada, $telefone){
        global $conn;
        $msg = "";
      

        $password = md5($password);

        $stmt = $conn->prepare("INSERT INTO cliente (email, password, nif, morada, telefone) 
        VALUES (?, ?, ?, ?, ?);");
        $stmt->bind_param("ssisi", $email, $password, $nif, $morada, $telefone);

        $stmt->execute();

        $msg = "Registado com sucesso!";
        
        $stmt->close();
        $conn->close();

        return $msg; 
        }
   
   
   
   
    function getTipoCliente(){

        global $conn;
        $msg = "<option value = '-1'>Escolha uma opção</option>";


        $stmt = $conn->prepare("SELECT * FROM tipo_cliente");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<option value = '".$row['id']."'>".$row['descricao']."</option>";
            }
        }else{
            $msg .= "<option value = '-1'>Sem tipos de Cliente registados</option>";
        }

        $stmt->close();
        $conn->close();
        return $msg;
    }
 
    function registaCliente($tipoCliente, $nome, $bi, $datanascimento, $nif, $foto) {
        global $conn;
        $msg = "";
        $flag = TRUE;

        $resp = $this -> uploads($foto);
        $resp = json_decode($resp, TRUE);

        if($resp['flag']){
            
            $stmt = $conn->prepare("INSERT INTO cliente (id_tipoCliente, nome, bi, datanascimento, foto) VALUES (?,?,?,?,?) WHERE $nif = ?");

            $stmt->bind_param("isiiis", $tipoCliente, $nome, $bi, $datanascimento, $nif, $resp['target']);

            $stmt->execute();
            $msg = "Cliente registado com sucesso!";
        
        }else{

            $stmt = $conn->prepare("INSERT INTO cliente (id_tipoCliente, nome, bi, datanascimento) VALUES (?,?,?,?) WHERE $nif = ?");
            $stmt->bind_param("isiii", $tipoCliente, $nome, $bi, $datanascimento, $nif);

            $stmt->execute();
            $msg = "Cliente registado com sucesso!";
        }
        
        $resp = json_encode(array(
            "flag" => $flag,
            "msg" => $msg
        ));


        $stmt->close();
        $conn->close();
        return($resp);
    }

    function listaAreas(){
        global $conn;
        $msg = "";
        $stmt = $conn->prepare("SELECT * FROM areas_profissionais;");
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                $msg .= "<th scope='row'>".$row['descricao']."</th>";
                $msg .= "<td><div class='checkbox checkbox__custom checkbox__style4'><label><input type='checkbox' value=''></label></div></td>";
                $msg .= "</tr>";  
            }
        }else{
            $msg .= "<tr>";
            $msg .= "<th scope='row'>Sem resultados</th>";
            $msg .= "<td></td>";
            $msg .= "</tr>";
        }
    
        
    
        $stmt->close();
        $conn->close();
        return $msg;
    }

    function getDadosCliente($email) {
        session_start();
        global $conn;

            if (isset($_SESSION['emailC'])) {
            $email = $_SESSION['emailC'];
            
            $sql = "SELECT cliente.* 
                    FROM cliente
                    WHERE cliente.email = '".$email."';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
    
            $conn->close();
    
            return json_encode($row);
        } else {
            return json_encode(["error" => "Cliente não autenticado"]);
        }
    }

    function guardaEditCliente($nifOld, $nome, $nif, $bi, $datanascimento, $morada, $telefone){

        global $conn;
        $msg = "";

        $stmt = $conn->prepare("UPDATE clientes SET nif =?, nome =?, bi =?, datanascimento=?, morada=?, telefone=?,  WHERE nif =?");
        $stmt->bind_param("isiissi", $nifOld, $nome, $nif, $bi, $datanascimento, $morada, $telefone);

        $stmt->execute();
        $msg = "Cliente editado com sucesso!";
        $stmt->close();
        $conn->close();
        return $msg;
    }

    function getMoradas($searchTerm) {
        global $conn;
        error_log("Search term: " . $searchTerm);
        
        $stmt = $conn->prepare("
            SELECT id, PRI_PREP, ART_TITULO, SEG_PREP, ART_DESIG, ART_TIPO, ART_LOCAL, LOCALIDADE, CP4, CP3
        FROM codigospostais
        WHERE 
            CONCAT(
                COALESCE(PRI_PREP, ''), ' ',
                COALESCE(ART_TITULO, ''), ' ',
                COALESCE(SEG_PREP, ''), ' ',
                COALESCE(ART_DESIG, ''), ' ',
                COALESCE(ART_TIPO, ''), ' ',
                COALESCE(ART_LOCAL, '')
            ) LIKE ? 
            OR LOCALIDADE LIKE ? 
            OR CONCAT(CP4, '-', CP3) LIKE ?
        LIMIT 20

        ");
        $likeTerm = "%" . $searchTerm . "%";
        $stmt->bind_param("sss", $likeTerm, $likeTerm, $likeTerm);
        $stmt->execute();
    
        $result = $stmt->get_result();
       
        $moradas = [];

        while ($row = $result->fetch_assoc()) {
            $moradas[] = [
                'id' => $row['id'],
                'text' => trim(
                    "{$row['PRI_PREP']} {$row['ART_TITULO']} {$row['SEG_PREP']} {$row['ART_DESIG']} {$row['ART_TIPO']} {$row['ART_LOCAL']}, {$row['LOCALIDADE']} - {$row['CP4']}-{$row['CP3']}"
                )
            ];
        }
    
        $stmt->close();
    
        $resp = ['results' => $moradas];

    
        return json_encode($resp);
    }

    function uploads($img){

        $dir = "../imagens/";
        $dir1 = "assets/imagens/";
        $flag = false;
        $targetBD = "";
    
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die ("Erro não é possivel criar o diretório");
            }
        }
      if(array_key_exists('foto', $img)){
        if(is_array($img)){
          if(is_uploaded_file($img['imagem']['tmp_name'])){
            $fonte = $img['foto']['tmp_name'];
            $ficheiro = $img['foto']['name'];
            $end = explode(".",$ficheiro);
            $extensao = end($end);
    
            $newName ="_img".date("YmdHis").".".$extensao;
    
            $target = $dir.$newName;
            $targetBD = $dir1.$newName;

            $this -> wFicheiro($target);
    
            $flag = move_uploaded_file($fonte, $target);
            
          } 
        }
      }
        return (json_encode(array(
          "flag" => $flag,
          "target" => $targetBD
        )));
    
    
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

