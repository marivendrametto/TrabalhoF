<?php

require_once 'connection.php';

class Servico{
    function pedidoInfo(){
      
        global $conn;
        $msg = "";

        $stmt = $conn->prepare("SELECT * FROM pedido_de_orcamento,prestador_servicos WHERE prestador_servicos.nif = pedido_de_orcamento.nifPrestador");
        $stmt->execute();
        
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                $msg .= "<th scope='row'>".$row['id']."</th>";
                $msg .= "<td>".$row['data']."</td>";
                $msg .= "<td>".$row['nifCliente']."</td>";
                $msg .= "<td><button class='btn btn-warning' onclick ='infoOrcamento(".$row['id'].")'>Info</button></td>";
                $msg .= "<td><button class='btn btn-warning' onclick ='aceitaOrcamento(".$row['id'].")'>Aceitar</button></td>";
                $msg .= "<td><button class='btn btn-warning' onclick ='recusaOrcamento(".$row['id'].")'>Recusar</button></td>";
                $msg .= "</tr>";
            }
        }else{
            $msg .= "<tr>";
            $msg .= "<td>Sem Registos</td>";
            $msg .= "<th scope='row'></th>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "</tr>";
        }

        return ($msg);
        }

        function recusarPedido($idRecusa){
            global $conn;
            $msg = "";
        
            $sql = "DELETE FROM pedido_de_orcamento WHERE id = ".$idRecusa;
    
            if ($conn->query($sql) === TRUE) {
                $msg = "Pedido recusado com Sucesso";
            } else {
                $msg = "Error: " . $sql . "<br>" . $conn->error;
            }
              
            $conn->close();
    
            return $msg;
        }
        function confirmaPedido($id, $estado){
            global $conn;
            $msg = "";
    
            $stmt = $conn->prepare("INSERT INTO orcamento (idPedidoOrcamento, estado) 
            VALUES (?, ?);");
            $stmt->bind_param("is", $id, $estado);
    
            $stmt->execute();
    
            $msg = "Pedido confirmado, verifique o seu dashboard para manter-se a par do seu orçamento.";
            
            $stmt->close();
            $conn->close();
    
            return $msg; 
            }
     function listaOrcamentos(){
      
        global $conn;
        $msg = "";

        $stmt = $conn->prepare("SELECT * FROM orcamento, pedido_de_orcamento WHERE orcamento.idPedidoOrcamento = pedido_de_orcamento.id");
        $stmt->execute();
        
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                $msg .= "<th scope='row'>".$row['idPedidoOrcamento']."</th>";
                $msg .= "<td>".$row['estado']."</td>";
                $msg .= "<td>".$row['nifCliente']."</td>";
                $msg .= "<td><button class='btn btn-warning' onclick ='finalizaOrcamento(".$row['idPedidoOrcamento'].")'>Finalizar</button></td>";
                $msg .= "</tr>";
            }
        }else{
            $msg .= "<tr>";
            $msg .= "<td>Sem Registos</td>";
            $msg .= "<th scope='row'></th>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "<td></td>";
            $msg .= "</tr>";
        }

        return ($msg);
        }

        function finalizaPedido($id, $estado){
            global $conn;
            $msg = "";
    
            $stmt = $conn->prepare("UPDATE orcamento SET estado = '".$estado."'
            WHERE idPedidoOrcamento = ".$id);
    
            $stmt->execute();
    
            $msg = "Serviço Finalizado com sucesso";
            
            $stmt->close();
            $conn->close();
    
            return $msg; 
            }

        function logout(){

                session_start();
                session_destroy();
            
                return("Obrigado!");
         }

        function getHistorico() {
            global $conn;
            $msg = "";

            // Alteração da query para incluir os campos "data", "duracao", "comentario" e "fotoPedido"
            $stmt = $conn->prepare("
                SELECT pedido_de_orcamento.id, pedido_de_orcamento.data, pedido_de_orcamento.duracao, pedido_de_orcamento.comentario, pedido_de_orcamento.fotoPedido
                FROM pedido_de_orcamento
                INNER JOIN orcamento ON pedido_de_orcamento.id = orcamento.idPedidoOrcamento
                INNER JOIN historico_de_servico ON orcamento.idPedidoOrcamento = historico_de_servico.idOrcamento
                WHERE historico_de_servico.idEstado = 2
            ");

            // Executa a query
            $stmt->execute();
            $result = $stmt->get_result();

            // Verifica se há resultados e monta a mensagem com os dados
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Personalize a estrutura de exibição conforme necessário
                    $msg .= '<ul class="list-group">';
                    $msg .= '<li class="list-group-item">Numero de Pedido: ' . $row['id'] . '</li>';
                    $msg .= '<li class="list-group-item">Data: ' . $row['data'] . '</li>';
                    $msg .= '<li class="list-group-item">Duração: ' . $row['duracao'] . ' horas</li>';
                    $msg .= '<li class="list-group-item">Comentário: ' . $row['comentario'] . '</li>';
                    $msg .= '<li class="list-group-item">Foto do Pedido: ' . $row['fotoPedido'] . '</li>';
                    $msg .= '<li class="list-group-item">  </li>';
                    $msg .= '</ul>';
                }
            } else {
                $msg .= '<ul class="list-group"><li class="list-group-item">Sem serviços recentes</li></ul>';
            }
        
            // Fecha a declaração e a conexão
            $stmt->close();
            $conn->close();
        
            return $msg;
        }

                function getHistoricoRecusa() {
            global $conn;
            $msg = "";

    
            $stmt = $conn->prepare("SELECT * FROM orcamento,pedido_de_orcamento,historico_de_servico,cliente WHERE pedido_de_orcamento.id LIKE orcamento.idPedidoOrcamento AND orcamento.idPedidoOrcamento LIKE historico_de_servico.idOrcamento AND pedido_de_orcamento.nifCliente LIKE cliente.nif");


            // Alteração da query para incluir os campos "data", "duracao", "comentario" e "fotoPedido"
            $stmt = $conn->prepare("
                SELECT pedido_de_orcamento.id, pedido_de_orcamento.data, pedido_de_orcamento.duracao, pedido_de_orcamento.comentario, pedido_de_orcamento.fotoPedido, historico_de_recusas.motivo
                FROM pedido_de_orcamento, historico_de_recusas
                INNER JOIN orcamento ON pedido_de_orcamento.id = orcamento.idPedidoOrcamento
                INNER JOIN historico_de_servico ON orcamento.idPedidoOrcamento = historico_de_recusas.idOrcamento
            ");

            // Executa a query

            $stmt->execute();
            $result = $stmt->get_result();

            
            if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
            $msg .= '<ul class="list-group"><li class="list-group-item">'.$row['morada'].'</li></ul>';
           }
         }else{
            $msg .= '<ul class="list-group"><li class="list-group-item">Sem mensagens por ler</li></ul>';
         }


            // Verifica se há resultados e monta a mensagem com os dados
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Personalize a estrutura de exibição conforme necessário
                    $msg .= '<ul class="list-group">';
                    $msg .= '<li class="list-group-item">Numero de Pedido: ' . $row['id'] . '</li>';
                    $msg .= '<li class="list-group-item">Data: ' . $row['data'] . '</li>';
                    $msg .= '<li class="list-group-item">Duração: ' . $row['duracao'] . ' horas</li>';
                    $msg .= '<li class="list-group-item">Comentário: ' . $row['comentario'] . '</li>';
                    $msg .= '<li class="list-group-item">Foto do Pedido: ' . $row['fotoPedido'] . '</li>';
                    $msg .= '<li class="list-group-item">Foto do Pedido: ' . $row['motivo'] . '</li>';
                    $msg .= '<li class="list-group-item">  </li>';
                    $msg .= '</ul>';
                }
            } else {
                $msg .= '<ul class="list-group"><li class="list-group-item">Sem serviços recusados recentes</li></ul>';
            }
        
            // Fecha a declaração e a conexão
            $stmt->close();
            $conn->close();

        
            return $msg;
        }

function updatePerfil($nomePEdit, $moradaPEdit, $telPresEdit, $professional_areas, $hourly_rate, $idPrestador) {
    global $conn;
    $msg = "";

    // Buscar o NIF do cliente associado ao idPrestador
    $stmtBuscarNif = $conn->prepare("SELECT nif FROM prestador_servicos WHERE idPrestador = ?");
    $stmtBuscarNif->bind_param("i", $idPrestador);
    $stmtBuscarNif->execute();
    $result = $stmtBuscarNif->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nif = $row['nif'];

        // Atualizar dados na tabela `cliente`
        $stmtCliente = $conn->prepare("
            UPDATE cliente 
            SET nome = ?, morada = ?, telefone = ? 
            WHERE nif = ?
        ");
        $stmtCliente->bind_param("ssii", $nomePEdit, $moradaPEdit, $telPresEdit, $nif);
        $stmtCliente->execute();

        // Atualizar dados na tabela `prestador_servicos`
        $stmtPrestador = $conn->prepare("
            UPDATE prestador_servicos 
            SET valor_hora = ?, idServico = ? 
            WHERE idPrestador = ?
        ");
        $stmtPrestador->bind_param("iii", $hourly_rate, $professional_areas, $idPrestador);
        $stmtPrestador->execute();

        $msg = "Perfil atualizado com sucesso!";
        
        // Fechar statements
        $stmtCliente->close();
        $stmtPrestador->close();
    } else {
        $msg = "Erro: Prestador de serviços não encontrado.";
    }


    function infoOrcamentoC($idPedido){

        global $conn;
        $msg = "";
        $row = "";

        $sql = ("SELECT * FROM pedido_de_orcamento,cliente WHERE cliente.nif=pedido_de_orcamento.nifCliente AND id =".$idPedido);
        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {
        // output data of each row
            $row = $result->fetch_assoc();
        }

        $conn->close();

        return (json_encode($row));
    }

  


}

?>