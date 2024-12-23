
  function reviewDePedido(nif){
    let dados = new FormData();
    dados.append("select", 2);
    dados.append("nif", nif);
    
  
    $.ajax({
        url: "controller/controllerReview.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
      
          $('#reviewModal').modal('show')
          $('#submiteReview').attr("onclick","submiteRating("+nif+")") 
           
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
  
  }
  
  function submiteRating(nif){
    let dados = new FormData();
    let submitData = new Date();
    let submitDataF = submitData.toISOString();
    dados.append("select", 3);
    dados.append("nif", nif);
    dados.append("rating",  $('#review').val());
    dados.append("testemunho",  $('#testemunho').val());
    dados.append("data", submitDataF);
  
    $.ajax({
        url: "controller/controllerReview.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
          alerta("Classificação submetida!",msg,"success")
          $('#reviewModal').modal('hide')
           
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

  });