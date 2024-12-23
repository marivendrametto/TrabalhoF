<?php

require_once 'connection.php';

class Servico{
    function listaServicos($idServico){
      
        global $conn;
        $msg = "";

        $stmt = $conn->prepare("SELECT * FROM prestador_servicos,prestador_areas,cliente,areas_profissionais WHERE prestador_servicos.idPrestador = prestador_areas.id_prestador AND cliente.nif=prestador_servicos.nif AND prestador_areas.id_area = areas_profissionais.id AND prestador_areas.id_area=".$idServico);
        $stmt->execute();
        
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $msg .= '<ul class="job_listings">
                        <li class="job_listing" onclick = "mostraInfoPrestador('.$row['nif'].')">
                         <a href="#">
                          <div class="job_img">
                                <img src=" img/pessoaFotoAreaClienteIcon.png" alt="" class="company_logo">
                            </div>
                            <div class="position">
                              <h3>' . ($row['nome']) . '</h3>
                               <div class="company">
                                <strong>'.($row['email']).'</strong>
                             </div>
                                <ul class="meta">
										<li class="job-type">'.($row['descricao']).'</li>
								</ul>
                             <div class="company">
										<strong> Valor por hora: '.($row['valor_hora']).' €</strong>
                                </div>   
                               
                              <div class="location">
                                  <i class="fa fa-location-arrow"></i> ' . ($row['morada']) . '
                             </div>

                        
                            
                            </li>
                            </a>
                        </ul>';
            }
            }else{
            $msg .= "<Sem prestadores no serviço selecionado>";
            }

             return ($msg);
        }

           
            function modalPedido($nif){
                global $conn;
                $msg = "";
                $row = "";
        
                $sql = "SELECT * FROM prestador_servicos,cliente WHERE cliente.nif=prestador_servicos.nif AND cliente.nif =".$nif;
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                // output data of each row
                    $row = $result->fetch_assoc();
                }
        
                $conn->close();
        
                return (json_encode($row));
            }   
           

        
        function registaPedido($idPrestador, $nomeCliente, $nifOrcamento, $dataPedido, $moradaPedido, $tiposervico, $foto, $comentario, $materiaisOrcamento){

            global $conn;
            $msg = "";
            $flag = TRUE;
    

            $stmt = $conn->prepare("INSERT INTO pedido_de_orcamento (nifPrestador,nifCliente, data, comentario) 
            VALUES (?, ?, ?, ?);");
            $stmt->bind_param("iiss",$nif, $nifOrcamento, $data, $comentario);

            $resp = $this -> uploads($foto);
            $resp = json_decode($resp, TRUE);

    
            if($resp['flag']){
                
                $stmt = $conn->prepare("INSERT INTO pedido_de_orcamento (nomeCliente, nifOrcamento, dataPedido, moradaPedido, tiposervico, foto, comentario, materiaisOrcamento) VALUES (?,?,?,?,?,?,?,?) WHERE $idPrestador = ?");
    
                $stmt->bind_param("sissssss", $nomeCliente, $nifOrcamento, $dataPedido, $moradaPedido, $tiposervico, $resp['target'], $comentario, $materiaisorcamento);
    


            
            $msg = "Pedido efetuado. Aguarde a resposta do prestador.";
            
            $resp = json_encode(array(
                "flag" => $flag,
                "msg" => $msg
            ));
            

                $stmt->execute();
                $msg = "Cliente registado com sucesso!";

            
            }else{
    
                $stmt = $conn->prepare("INSERT INTO pedido_de_orcamento (nomeCliente, nifOrcamento, dataPedido, moradaPedido, tiposervico, comentario, materiaisOrcamento) VALUES (?,?,?,?,?,?,?) WHERE $idPrestador = ?");
                $stmt->bind_param("sisssss", $nomeCliente, $nifOrcamento, $dataPedido, $moradaPedido, $tiposervico, $comentario, $materiaisorcamento);
    
                $stmt->execute();
                $msg = "Pedido efectuado com sucesso!";
            }
            
            $resp = json_encode(array(
                "flag" => $flag,
                "msg" => $msg
            ));
    
    
            $stmt->close();
            $conn->close();
            return($resp); 
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

        function listaMateriaisOrcamento(){
      
            global $conn;
            $msg = "";
    
            $stmt = $conn->prepare("SELECT * FROM materiais_orcamento");
            $stmt->execute();
            
            $result = $stmt->get_result();
    
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $msg .= "<tr>";
                    $msg .= "<th scope='row'>".$row['descricao']."</th>";
                    $msg .= "<td>".$row['valor']."</td>";
                    $msg .= "<td><label><input type='checkbox' name = 'checkboxMateriais'value=''></label></td>";
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
           

            function getTipoServico(){
                global $conn;
                $msg = "<option value = '-1'>Escolha uma opção</option>";
        
        
                $stmt = $conn->prepare("SELECT * FROM tipo_servio WHERE area_servico = 2");
                $stmt->execute();
        
                $result = $stmt->get_result();
        
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        $msg .= "<option value = '".$row['idtipo_servico']."'>".$row['descricao']."</option>";
                    }
                }else{
                    $msg .= "<option value = '-1'>Sem tipos de serviço registados</option>";
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

    }



?>