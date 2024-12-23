//para mais tarde//

function getArea(){
  let dados = new FormData();
  dados.append('op', 2);

 
  $.ajax({
    url: "controller/controllerClientesRap.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData:false,
  })
  
  .done(function( msg ) {

   $('#area').html(msg);
   
   
  })
  
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}

function getPrestador(){
  let dados = new FormData();
  dados.append('op', 3);

 
  $.ajax({
    url: "controller/controllerClientesRap.php",
    method: "POST",
    data: dados,
    dataType: "html",
    cache: false,
    contentType: false,
    processData:false,
  })
  
  .done(function( msg ) {

   $('#prestador').html(msg);
   
   
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

  
 