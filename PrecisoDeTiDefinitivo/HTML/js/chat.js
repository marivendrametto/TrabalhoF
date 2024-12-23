function enviaMsg(){
    let dados = new FormData();
    dados.append('op', 1);
    dados.append('msgEnviada', $('#msgEnviada').val());
  
    $.ajax({
        url: "controller/controllerChat.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
  
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
  }
  
  function getMensagens(){
    let dados = new FormData();
    dados.append('op', 2);
  
    $.ajax({
        url: "controller/controllerChat.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
          let obj = JSON.parse(msg);
          $('#msgCliente').val(obj.msg_enviada); 
         })
        
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
  }