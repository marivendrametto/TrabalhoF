
function getPedidoOrcamento() {
  let dados = new FormData();
  dados.append("select", 1);

  $.ajax({
    url: "../assets/controller/controllerServico.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false,
  })

    .done(function (msg) {
      $("#listaPedidos").html(msg);
    })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}

function recusaOrcamento(id) {
  let dados = new FormData();
  dados.append("select", 2);
  dados.append("idRecusa", id);

  $.ajax({
      url: "../assets/controller/controllerServico.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
    
        alerta("Utilizador",msg,"success");
        getPedidoOrcamento();
         
      })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}

function aceitaOrcamento(id) {
  let dados = new FormData();
  dados.append("select", 3);
  dados.append("idOrcamento", id);
  dados.append("estado", "Em progresso");

  $.ajax({
      url: "../assets/controller/controllerServico.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
    
        alerta("Utilizador",msg,"success");
         
      })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}

function getOrcamentos() {
  let dados = new FormData();
  dados.append("select", 4);

  $.ajax({
    url: "../assets/controller/controllerServico.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false,
  })

    .done(function (msg) {
      $("#listaOrcamentos").html(msg);
    })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}

function finalizaOrcamento(id) {
  let dados = new FormData();
  dados.append("select", 5);
  dados.append("idOrcamento", id);
  dados.append("estado", "Concluído");

  $.ajax({

      url: "../assets/controller/controllerServico.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
    
        alerta("Utilizador",msg,"success");
         
      })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });

}

function logout() {
  let dados = new FormData();
  dados.append("select", 6);

  $.ajax({
    url: "../assets/controller/controllerServico.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false,
  })

    .done(function (msg) {
      alerta("Utilizador", msg, "success");

          
          setTimeout(function(){ 
              window.location.href = "https://localhost/JB/PROJETO_FINAL_DEFINITIVO/ProjetoFinal-/PrecisoDeTiDefinitivo/HTML/page-login.php";
          }, 2000);
      


    })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}

function getHistoricoServicos() {
  let dados = new FormData();
  dados.append("select", 7);

  $.ajax({
    url: "../assets/controller/controllerServico.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false,

  })

    .done(function (msg) {
      $("#historicoServicos").html(msg);
    })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}

function getHistoricoRecusas() {
  let dados = new FormData();
  dados.append("select", 9);

  $.ajax({
    url: "../assets/controller/controllerServico.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false,
  })

    .done(function (msg) {
      $("#historicoRecusas").html(msg);
    })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}

function atualizarPerfil(idPrestador) {
  let dados = new FormData();
  dados.append("select", 8);
  dados.append("idPrestador", idPrestador);
  dados.append("nomePEdit", $("#nomePEdit").val());
  dados.append("moradaPEdit", $("#moradaPEdit").val());
  dados.append("telPresEdit", $("#telPresEdit").val());
  dados.append("professional_areas", $("#professional_areas").val());
  dados.append("hourly_rate", $("#hourly_rate").val());

  $.ajax({
    url: "../assets/controller/controllerServico.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData: false,
  })
    .done(function (msg) {
      alert(msg);
    })
    .fail(function (jqXHR, textStatus) {
      alert("Erro na requisição: " + textStatus);
    });
}
function infoOrcamento(id){
    let dados = new FormData();
  dados.append("select", 9);
  dados.append("idPedido", id);



  $.ajax({
    url: "../assets/controller/controllerServico.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {

      let obj = JSON.parse(msg);
      $('#infoPedidoDash').modal('show')
      $('#nomeClientePedido').html(obj.nome);  
      $('#dataDoPedido').html(obj.data);
      $('#moradaDoPedido').html(obj.morada);
      $('#comentarioDoPedido').html(obj.comentario);
       
    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
}


function alerta(titulo, msg, icon) {
  Swal.fire({
    position: "center",
    icon: icon,
    title: titulo,
    text: msg,
    showConfirmButton: true,
  });
}




$(function () {
  getPedidoOrcamento();
  getOrcamentos();
  getHistoricoServicos();
  getHistoricoRecusas();
});
