<?php

require_once 'connection.php';

class PlanoSub{

 
   
        function planoPremium() {
    global $conn;
    $msg = "";

    session_start(); // Garante que a sessão está ativa
    $userId = $_SESSION['prestador']; // Atribui o ID do prestador da sessão

    // Verifique se $userId é válido
    if (!$userId) {
        return "Erro: ID do prestador não encontrado na sessão.";
    }

    // Atualiza o plano de subscrição
    $query = "UPDATE prestador_servicos SET plano_subscricao = 1 WHERE idPrestador = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);

    // Executa a consulta
    if ($stmt->execute()) {
        $msg = "Plano atualizado para PRO+ com sucesso.";
    } else {
        $msg = "Erro ao atualizar o plano: " . $stmt->error;
    }

    $stmt->close();
    return $msg;
}




    function planoPremiumPlus() {
        global $conn;
        $msg = "";

        session_start(); // Garante que a sessão está ativa
        $userId = $_SESSION['prestador'];
        
        var_dump($userId);

        if (!$userId) {
            return "ID do usuário não encontrado. Por favor, faça login novamente.";
        }

        if (!$conn) {
            return "Erro na conexão com o banco de dados.";
        }

        $query = "UPDATE prestador_servicos SET plano_subscricao = 2 WHERE idPrestador = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $userId);

      

        if (!$stmt->execute()) {
            die("Erro ao executar a consulta: " . $stmt->error);
        }

        if ($stmt->execute()) {
            $msg = "Plano atualizado para PRO+ com sucesso.";
        } else {
            $msg = "Erro ao atualizar o plano: " . $stmt->error;
        }

        $stmt->close();
        return $msg;
    }


}
