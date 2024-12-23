function getPrestadoresServicos(idServico){
    let dados = new FormData();
    dados.append('select', 1);
    dados.append("idServico",idServico);

    $.ajax({
        url: "controller/controllerServicos.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {

        $('#listaServicos').html(msg);
        
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
}

function mostraInfoPrestador(nif){
  let dados = new FormData();
    dados.append("select", 2);
    dados.append("nif", nif);
    

    $.ajax({
        url: "controller/controllerServicos.php",
          method: "POST",
          data: dados,
          dataType: "html",
          cache: false,
          contentType: false,
          processData:false,
        })
        
        .done(function( msg ) {
          let obj = JSON.parse(msg);
          $('#infoPedido1').modal('show'),
          $('#nomePrestador').html(obj.nome);  
          $('#emailPrestador').html(obj.email);
          $('#dataNPrestador').html(obj.datanascimento);
          $('#valorPrestador').html(obj.valor_hora);
           
          $('#realizaPedido').attr("onclick","fazerPedido("+nif+")") 
           
        })
        
        .fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
}

function getDadosCliente(email) {
    
  let dados = new FormData();
  dados.append('select', 4);
  dados.append('email', email);

  $.ajax({
      url: "controller/controllerServicos.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {
      console.log("Response:", msg);

      let obj = JSON.parse(msg);
       $('#nif').val(obj.nif); 
      })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
}

function listaMateriaisOrcamento(){
  let dados = new FormData();
  dados.append("select", 5);
  

  $.ajax({
      url: "controller/controllerServicos.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {

      $('#listaMateriaisOrcamento').html(msg);
      
      })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}

function getTipoServico(){
  let dados = new FormData();
  dados.append("select", 6);
  

  $.ajax({
      url: "controller/controllerServicos.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
      console.log(msg);
      $('#tiposervico').html(msg);

      $('#tiposervico').on('change', function() {
        let selectedValue = $(this).val();
        if (selectedValue) { 
            $('#divMateriais').removeClass('hide'); 
        } else {
            $('#divMateriais').addClass('hide'); 
        }});
     })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}

function registaPedido(idPrestador){
  let dados = new FormData();
  dados.append("select", 3);
  dados.append('idPrestador', idPrestador);
  dados.append('nomeCliente', $('#nomeCliente').val());
  dados.append('nifOrcamento',  $('#nifOrcamento').val());
  dados.append('dataPedido',  $('#dataPedido').val());
  dados.append('moradaPedido', $('#moradaPedido').val());
  dados.append('tiposervico', $('#tiposervico').val());
  dados.append('fotoPedido', $('#fotoPedido').prop('files')[0]);
  dados.append("comentario",  $('#comentarioPedido').val());

   let checkboxes = [];
    $('input[name="checkboxMateriais[]"]:checked').each(function () {
        checkboxes.push($(this).val());
    });
    dados.append("materiaisOrcamento", JSON.stringify(checkboxes));
  

  $.ajax({
      url: "controller/controllerServicos.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData:false,
      })
      
      .done(function( msg ) {
        alerta("Pedido efetuado com sucesso!",msg,"success");
        $('#infoPedido').modal('hide')
         
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
  getDadosCliente();
  listaMateriaisOrcamento();
  getTipoServico();
});
