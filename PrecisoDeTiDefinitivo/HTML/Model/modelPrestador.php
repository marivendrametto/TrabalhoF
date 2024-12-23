<?php
require_once 'connection.php';

class Prestador{
    function prestadorInfo(){
      
        global $conn;
        $msg = "";

        $stmt = $conn->prepare("SELECT * FROM prestador_serrviços,cliente WHERE prestador_serrviços.nif = cliente.nif");
        $stmt->execute();
        
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                $msg .= "<th scope='row'>".$row['nome']."</th>";
                $msg .= "<td>".$row['nif']."</td>";
                $msg .= "<td>".$row['bi']."</td>";
                $msg .= "<td>".$row['morada']."</td>";
                $msg .= "<td>".$row['email']."</td>";
                $msg .= "<td><button class='btn btn-warning' onclick ='mostraInfoPedido(".$row['nif'].")'>Realizar Pedido</button></td>";
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
    function modalPedido($nif){
        global $conn;
        $msg = "";
        $row = "";

        $sql = "SELECT * FROM prestador_serrviços WHERE nif =".$nif;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            $row = $result->fetch_assoc();
        }

        $conn->close();

        return (json_encode($row));
    }
    function fazPedido($nif,$nifOrcamento,$data){
        global $conn;
        $msg = "";
      

        $stmt = $conn->prepare("INSERT INTO pedido_de_orcamento (nifPrestador, nifOrcamento, data) VALUES (?, ?, ?);");
        $stmt->bind_param("iis", $nif, $nifOrcamento, $data);

        $stmt->execute();

        $msg = "Pedido efetuado. Aguarde a resposta do prestador.";
        
        $stmt->close();
        $conn->close();

        return $msg; 
    }
    function getPedidosAceites(){
        global $conn;
        $msg = "";

        $stmt = $conn->prepare("SELECT * FROM orcamento,pedido_de_orcamento,cliente,prestador_servicos WHERE orcamento.idPedidoOrcamento = pedido_de_orcamento.id AND pedido_de_orcamento.nifPrestador = prestador_servicos.nif AND prestador_servicos.nif=cliente.nif");
        $stmt->execute();
        
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= "<tr>";
                $msg .= "<th scope='row'>".$row['idPedidoOrcamento']."</th>";
                $msg .= "<td>".$row['nome']."</td>";
                $msg .= "<td>".$row['data']."</td>";
                $msg .= "<td><button class='btn btn-warning' onclick ='reviewDePedido(".$row['nifPrestador'].")'>Classificar</button></td>";
                $msg .= "</tr>";
            }
        }else{
            $msg .= "<tr>";
            $msg .= "<td>Sem Registos</td>";
            $msg .= "<th scope='row'></th>";
            $msg .= "<td></td>";
            $msg .= "</tr>";
        }

        return ($msg);
    }
}  
?>