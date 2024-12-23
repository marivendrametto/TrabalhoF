function getTipoCliente(){
    let dados = new FormData();
    dados.append('op', 1);
  
   
    $.ajax({
      url: "controller/controllerClientes.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {
 
     $('#tipoCliente').html(msg);
     
     
    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function registaCliente(){

    let dados = new FormData();
    dados.append('op', 2);
    dados.append('tipoCliente', $('#tipoCliente').val());
    dados.append('nome', $('#nome').val());
    dados.append('bi', $('#bi').val());
    dados.append('datanascimento', $('#datanascimento').val());
    dados.append('foto', $('#foto').prop('files')[0]);
    
   
  
   
    $.ajax({
      url: "controller/controllerClientes.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {
      
      console.log(msg);
      let obj = JSON.parse(msg);
      if(obj.flag){
          alerta("success",obj.msg,);
         
      }else{
          alerta("error",obj.msg,);    
      }
       
    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }


  function listaAreas() {

    let dados = new FormData();
    dados.append('op', 3);

    $.ajax({
        url: "Controller/controllerClientes.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
        console.log(msg);
        $('#listaAreas').html(msg)
      })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}

function getDadosCliente(nif){
  
  $('#modalCliente').modal('show');

  let dados = new FormData();
  dados.append('nif', nif);
  dados.append('op', 3);

 
  $.ajax({
    url: "src/controller/controllerClientes.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData:false,
  })
  
  .done(function( msg ) {
    let obj = JSON.parse(msg);
    $('#estado').val(obj.estado);  
    $('#btnguardaEditEstado').attr('onclick', 'guardaEditEstado('+id+')')
  })
  
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });
}

function guardaEditCliente(nif){
  
  let dados = new FormData();
  dados.append('nif', $('#nifEdit').val());
  dados.append('nome', $('#nomeEdit').val());
  dados.append('morada', $('#moradaEdit').val());
  dados.append('telefone', $('#telefoneEdit').val());
  dados.append('email', $('#emailEdit').val());
  dados.append('nifOld', nif);
  dados.append('op', 4);

 
  $.ajax({
    url: "src/controller/controllerClientes.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData:false,
  })
  
  .done(function( msg ) {

    alerta("success", msg);
    listaClientes();  // Atualiza a lista de clientes após o guardado
    $('#modalCliente').modal('hide');  
  })
  
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });
}









function alerta(icon, msg){
    Swal.fire({
      icon: icon,
      text: msg,
    });
  }
 // Shorthand for $( document ).ready()
 $(function() {
  
  
});