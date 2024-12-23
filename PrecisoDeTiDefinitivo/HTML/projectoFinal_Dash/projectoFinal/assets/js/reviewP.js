function getReviews(){
  let dados = new FormData();
  dados.append("select", 1);
  

  $.ajax({
      url: "../assets/controller/controllerReviewP.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
    
        $('#reviewPrestador').html(msg);
         
      })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
  
}

$(function() {
    getReviews();
  });