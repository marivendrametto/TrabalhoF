<?php

require_once 'connection.php';

class Prestadores{
    function registaPrestador($cadastro, $certificado) {
        global $conn;
        $msg = "";
        $flag = TRUE;

        $resp = $this -> uploads($cadastro, $certificado);
        $resp = json_decode($resp, TRUE);

        if($resp['flag']){
            
            $stmt = $conn->prepare("INSERT INTO prestador_serviços (certificado, cadastro) VALUES (?,?,)");

            $stmt->bind_param("ss", $resp['target'], $resp['target']);

            $stmt->execute();
            $msg = "Prestadr registado com sucesso!";
        
        }else{

            $stmt = $conn->prepare("INSERT INTO prestador_serviços (cadastro) VALUES (?)");
            $stmt->bind_param("s", $resp['target']);

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

    function uploads($img){

        $dir = "../uploads/";  // Diretório mais genérico
        $dir1 = "assets/uploads/";
        $flag = false;
        $targetBD = "";
    
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die ("Erro: não é possível criar o diretório");
            }
        }
    
        if(array_key_exists('imagem', $img)){ 
            if(is_array($img)){
                if(is_uploaded_file($img['imagem']['tmp_name'])){
                    $fonte = $img['imagem']['tmp_name'];
                    $ficheiro = $img['imagem']['name'];
                    $end = explode(".", $ficheiro);
                    $extensao = end($end);
    
                    // Extensões permitidas para upload
                    $allowedExtensions = array("jpg", "jpeg", "png", "pdf", "doc", "docx");
    
                    
                    if(in_array(strtolower($extensao), $allowedExtensions)){
                        $newName = "_file".date("YmdHis").".".$extensao;  
                    } else {
                        return json_encode(array("flag" => false, "target" => "", "msg" => "Tipo de ficheiro não permitido"));
                    }
    
                    $target = $dir.$newName;
                    $targetBD = $dir1.$newName;
    
                    $this->wFicheiro($target);
    
                    $flag = move_uploaded_file($fonte, $target);
                }
            }
        }
    
        return json_encode(array(
            "flag" => $flag,
            "target" => $targetBD
        ));
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

