<?php

require_once 'connection.php';

class Clientes{
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
 
    function registaCliente($tipoCliente, $nome, $bi, $datanascimento, $foto) {
        global $conn;
        $msg = "";
        $flag = TRUE;

        $resp = $this -> uploads($foto);
        $resp = json_decode($resp, TRUE);

        if($resp['flag']){
            
            $stmt = $conn->prepare("INSERT INTO cliente (id_tipoCliente, nome, bi, datanascimento, foto) VALUES (?,?,?,?,?)");

            $stmt->bind_param("isiis", $tipoCliente, $nome, $bi, $datanascimento, $resp['target']);

            $stmt->execute();
            $msg = "Cliente registado com sucesso!";
        
        }else{

            $stmt = $conn->prepare("INSERT INTO cliente (id_tipoCliente, nome, bi, datanascimento) VALUES (?,?,?,?)");
            $stmt->bind_param("isii", $tipoCliente, $nome, $bi, $datanascimento);

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




          function marcarHorarioBD($idPrestador, $datainicio, $datafim) {
            global $conn;
        
            try {
                $stmt = $conn->prepare("INSERT INTO horarios (prestador, inicio, fim) VALUES (?, ?, ?)");
                $stmt->bind_param("iss", $idPrestador, $datainicio, $datafim);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    return "Horário salvo com sucesso!";
                } else {
                    return "Erro ao salvar horário!";
                }
            } catch (Exception $e) {
                return "Erro: " . $e->getMessage();
            }
        }

        function getHorarios($idPrestador) {
            global $conn;
            $stmt = $conn->prepare("SELECT inicio, fim FROM horarios WHERE prestador = ?");
            $stmt->bind_param("i", $idPrestador);
            $stmt->execute();
            $result = $stmt->get_result();
                
            $horarios = [];
            while ($row = $result->fetch_assoc()) {
                $horarios[] = [
                    'start' => $row['inicio'],
                    'end' => $row['fim']
                ];
            }
        
            $stmt->close();
            return $horarios;
        }

        function desmarcarHorario($idPrestador, $datainicio, $datafim ) {
            global $conn;
            $stmt = $conn->prepare("DELETE FROM horarios WHERE prestador = ? AND inicio = ? AND fim = ?");
            $stmt->bind_param("iss", $idPrestador, $datainicio, $datafim);
            if ($stmt->execute()) {
                return "Horário desmarcado com sucesso!";
            } else {
                return "Erro ao desmarcar horário!";
            }
        }


}

