function registaPrestador(){

    let dados = new FormData();
    dados.append('op', 1);
    dados.append('cadastro', $('#cadastro').prop('files')[0]);
    dados.append('certificado', $('#certificado').prop('files')[0]);
    
   
  
   
    $.ajax({
      url: "controller/controllerPrestadores.php",
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
 function alerta(icon, msg){
    Swal.fire({
      icon: icon,
      text: msg,
    });
  }
 // Shorthand for $( document ).ready()
 $(function() {
  
});