function getTipoUtilizador(){
    let dados = new FormData();
    dados.append("select", 1);

    $.ajax({
        url: "controller/controllerUtilizador.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
      
          $('#tipoUtilizador').html(msg);
           
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
}

function registaUtilizador(){
  let dados = new FormData();
  dados.append("select", 2);
  dados.append("email", $('#emailUtilizador').val());
  dados.append("password", $('#utilizadorPassword').val());
  dados.append("tipo", $('#tipoUtilizador').val());
  $.ajax({
    url: "controller/controllerUtilizador.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {
      
      alert(msg);

    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
}

function login(){
  let dados = new FormData();
  dados.append("select", 3);
  dados.append("email", $('#emailLogin').val());
  dados.append("password", $('#passwordLogin').val());
  $.ajax({
    url: "controller/controllerUtilizador.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {
      let obj = JSON.parse(msg);
      if(obj.flag){
          alerta("Cliente",obj.msg,"success");
          
          setTimeout(function(){ 
              window.location.href = "area-cliente.php";
          }, 2000);

      }else{
          alerta("Cliente",obj.msg,"error");    
      }
      
    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
}

function loginPrestador(){
  let dados = new FormData();
  dados.append("select", 4);
  dados.append("email", $('#emailLoginP').val());
  dados.append("password", $('#passwordLoginP').val());
  $.ajax({
    url: "controller/controllerUtilizador.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    .done(function( msg ) {
      let obj = JSON.parse(msg);
      if(obj.flag){
          alerta("Prestador",obj.msg,"success");
          
          setTimeout(function(){ 
              window.location.href ="projectoFinal_Dash/projectoFinal/paginas/user.php";
          }, 2000);

      }else{
          alerta("Prestador",obj.msg,"error");    
      }
      
    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
}

function logout(){
  let dados = new FormData();
  dados.append("select", 5);

  $.ajax({
  url: "controller/controllerUtilizador.php",
  method: "POST",
  data: dados,
  dataType: "html",
  cache: false,
  contentType: false,
  processData: false
  })
  
  .done(function( msg ) {


          alerta("Utilizador",msg,"success");
          
          setTimeout(function(){ 
              window.location.href = "index.php";
          }, 2000);
      
  })
  
  .fail(function( jqXHR, textStatus ) {
  alert( "Request failed: " + textStatus );
  });

}

function alerta(titulo,msg,icon){
  Swal.fire({
      position: 'center',
      icon: icon,
      title: titulo,
      text: msg,
      showConfirmButton: true,

    })
}

$(function() {
  getTipoUtilizador();
});
