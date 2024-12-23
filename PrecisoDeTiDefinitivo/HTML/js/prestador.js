function getPrestadores(){
    let dados = new FormData();
    dados.append("select", 1);
    

    $.ajax({
        url: "controller/controllerPrestador.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
      
          $('#listaPrestadores').html(msg);
           
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
    
}

function mostraInfoPedido(nif){
  let dados = new FormData();
    dados.append("select", 2);
    dados.append("nif", nif);
    

    $.ajax({
        url: "controller/controllerPrestador.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
      
          $('#infoPedido').modal('show')
          $('#realizaPedido').attr("onclick","fazerPedido("+nif+")") 
           
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
}

function fazerPedido(nif){
  let dados = new FormData();
  dados.append("select", 3);
  dados.append("nif", nif);
  dados.append("nifOrcamento",  $('#nifOrcamento').val());
  dados.append("data",  $('#dataPedido').val());
  

  $.ajax({
      url: "controller/controllerPrestador.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
        alert(msg)
        $('#infoPedido').modal('hide')
         
      })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}
function getPedidosFeitos(){
  let dados = new FormData();
    dados.append("select", 4);
    

    $.ajax({
        url: "controller/controllerPrestador.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
      
          $('#listaPedidos2').html(msg);
           
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
}

$(function() {
    getPrestadores();
    getPedidosFeitos();
  });