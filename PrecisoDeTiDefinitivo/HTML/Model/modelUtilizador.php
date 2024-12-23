<?php
require_once 'connection.php';

class Utilizador{
    function tipoDeUtilizadorSelect(){
        global $conn;
        $msg = "<option value = '-1'>Escolha uma opção</option>";


        $stmt = $conn->prepare("SELECT * FROM tipo_utilizador");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<option value = '".$row['id']."'>".$row['descricao']."</option>";
            }
        }else{
            $msg .= "<option value = '-1'>Sem tipos registados</option>";
        }

        $stmt->close();
        $conn->close();
        return $msg;
    }
    function registaUser($email,$password,$tipo)
        {
        global $conn;
        $msg = "";
      

        $stmt = $conn->prepare("INSERT INTO cliente (email, password) 
        VALUES (?, ?);");
        $stmt->bind_param("ss", $email, $password);

        $stmt->execute();

        $msg = "Registado com sucesso!";
        
        $stmt->close();
        $conn->close();

        return $msg; 
    }

    function login($email,$password){
        global $conn;
        $msg = "";
        $flag = true;
        session_start();

        $stmt = $conn->prepare("SELECT * FROM cliente WHERE email LIKE ? AND password LIKE ?;");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $msg = "Bem-Vindo/a ".$row['nome'];
            $_SESSION['cliente'] = $row['nome'];
            $_SESSION['nifC'] = $row['nif'];
            $_SESSION['emailC'] = $row['email'];
            $_SESSION['moradaC'] = $row['morada'];
            $_SESSION['dataNasc'] = $row['datanascimento'];
            $_SESSION['teleC'] = $row['telefone'];
        }else{
            $msg = "Erro! Dados Inválidos"; 
            $flag = false;
        }
        
        
        $stmt->close();
        $conn->close();
       
        return (json_encode(array(
            "msg" => $msg,
            "flag" => $flag,
        )));
    
    }

    function loginPrestador($email,$password){
        global $conn;
        $msg = "";
        $flag = true;
        session_start();

        $stmt = $conn->prepare("SELECT * FROM cliente,prestador_servicos WHERE cliente.email LIKE ? AND cliente.password LIKE ? AND
        cliente.nif LIKE prestador_servicos.nif;");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $msg = "Bem-Vindo/a ".$row['nome'];
            $_SESSION['id'] = $row['idPrestador'];
            $_SESSION['prestador'] = $row['nome'];
            $_SESSION['emailP'] = $row['email'];
            $_SESSION['moradaP'] = $row['morada'];
            $_SESSION['teleP'] = $row['telefone'];
            $_SESSION['nifP'] = $row['nif'];
            $_SESSION['valor'] = $row['valor_hora'];
 

        }else{
            $msg = "Erro! Dados Inválidos"; 
            $flag = false;
        }

        $stmt->close();
        $conn->close();
        
        return (json_encode(array(
            "msg" => $msg,
            "flag" => $flag,
        )));
    
    }

    function logout(){

        session_start();
        session_destroy();

        return("Obrigado!");
    }
}   
?>