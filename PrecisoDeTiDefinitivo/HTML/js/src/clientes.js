function getMoradas(){
  let dados = new FormData();
  dados.append('op', 7);
  dados.append('morada', params.term);

  console.log(params.term);

  $.ajax({
    url: "controller/controllerClientes.php",
    method: "POST",
    data: dados,
    dataType: "json",
    cache: false,
    contentType: false,
  })
  
  .done(function( msg ) {
    $('#morada').empty();
    msg.forEach(element => {
      $('#morada').append(`<option value="${element.PRI_PREP} ${element.ART_TITULO} ${element.SEG_PREP} ${element.ART_DESIG} ${element.ART_TIPO} ${element.ART_LOCAL}, ${element.LOCALIDADE}{element.CP4}-${element.CP3}">`);
    });
  })

  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}


function registaClienteRap(){

  let dados = new FormData();
  dados.append('op', 1);
  dados.append('email', $('#email').val());
  dados.append('password', $('#password').val());
  dados.append('nif', $('#nif').val());
  dados.append('morada', $('#morada').val());
  dados.append('telefone', $('#telefone').val());
 

 
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

    alert(msg);
    window.location.href = "index.php";
     
  })
  
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}


function getTipoCliente(){
    let dados = new FormData();
    dados.append('op', 2);
  
   
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

  function registaCliente(nif){

    let dados = new FormData();
    dados.append('op', 3);
    dados.append('tipoCliente', $('#tipoCliente').val());
    dados.append('nome', $('#nome').val());
    dados.append('bi', $('#bi').val());
    dados.append('datanascimento', $('#datanascimento').val());
    dados.append('nif', nif);
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
    dados.append('op', 4);

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

 function alerta(icon, msg){
    Swal.fire({
      icon: icon,
      text: msg,
    });
  }

  function getDadosCliente(email) {
    
    let dados = new FormData();
    dados.append('op', 5);
    dados.append('email', email);

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
        console.log("Response:", msg);

        let obj = JSON.parse(msg);
        
        //IDs de Visualização de Perfil
        
         $('#nome').text(obj.nome);
         $('#nif').text(obj.nif); 
         $('#bi').val(obj.bi);
         $('#email').text(obj.email);
         $('#datanascimento').text(obj.datanascimento);
         $('#morada').text(obj.morada);
         $('#telefone').val(obj.telefone);
         $('foto').val(obj.foto);
        
        //IDs de Edit
        
         $('#nomeEdit').val(obj.nome);
         $('#nifEdit').val(obj.nif);
         $('#biEdit').val(obj.bi);
         $('#datanascimentoEdit').val(obj.datanascimento);
         $('#moradaEdit').val(obj.mrada);
         $('#telefoneEdit').val(obj.telefone);
         $('#fotoEdit').val(obj.foto);
         $('#btnGuardarEdit').attr('onclick', 'guardaEditCliente('+obj.nif+')')
        })
      
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}

function guardaEditCliente(nif){
  let dados = new FormData();
  dados.append('op', 6);
  dados.append('nifOld', nif);
  dados.append('nome', $('#nomeEdit').val());
  dados.append('nif', $('#nifEdit').val());
  dados.append('bi', $('#biEdit').val());
  dados.append('datanascimento', $('#datanascimentoEdit').val());
  dados.append('morada', $('#moradaEdit').val());
  dados.append('telefone', $('#telefoneEdit').val());

  $.ajax({
      url: "/controller/controllerClientes.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData:false,
    })
    
    .done(function( msg ) {

       alerta("success", msg);
       
       
    })
    
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  }

  //modal de várias páginas
  function prep_modal()
  {
    $(".modalcliente").each(function() {
  
    var element = this;
    var pages = $(this).find('.modal-split');
  
    if (pages.length != 0)
    {
        pages.hide();
        pages.eq(0).show();
  
        var b_button = document.createElement("button");
                  b_button.setAttribute("type","button");
                  b_button.setAttribute("class","btn btn-primary");
                  b_button.setAttribute("style","display: none;");
                  b_button.innerHTML = "Back";
  
        var n_button = document.createElement("button");
                  n_button.setAttribute("type","button");
                  n_button.setAttribute("class","btn btn-primary");
                  n_button.innerHTML = "Next";
  
        $(this).find('.modal-footer').append(b_button).append(n_button);
  
  
        var page_track = 0;
  
        $(n_button).click(function() {
          
          this.blur();
  
          if(page_track == 0)
          {
            $(b_button).show();
          }
  
          if(page_track == pages.length-2)
          {
            $(n_button).text("Submit");
          }
  
          if(page_track == pages.length-1)
          {
            $(element).find("form").submit();
          }
  
          if(page_track < pages.length-1)
          {
            page_track++;
  
            pages.hide();
            pages.eq(page_track).show();
          }
  
  
        });
  
        $(b_button).click(function() {
  
          if(page_track == 1)
          {
            $(b_button).hide();
          }
  
          if(page_track == pages.length-1)
          {
            $(n_button).text("Next");
          }
  
          if(page_track > 0)
          {
            page_track--;
  
            pages.hide();
            pages.eq(page_track).show();
          }
  
  
        });
  
    }
  
    });
  }

 // Shorthand for $( document ).ready()
 $(function() {
  getTipoCliente();
  listaAreas();
  getDadosCliente();
  $('.js-example-basic-single js-states form-control').select2();
  prep_modal();


  //select2 do chat para ver o q dá 
  $('#morada').select2({
    ajax: {
        transport: function(params, success, failure) {
            let dados = new FormData();
            dados.append('op', 7);
            dados.append('morada', params.term);

            $.ajax({
                url: "controller/controllerClientes.php",
                method: "POST",
                data: dados,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false
            })
            .done(success)
            .fail(failure);
        },
        processResults: function(data) {
            console.log("Dados recebidos do servidor:", data);
            if (Array.isArray(data.results) && data.results.length > 0) {
              return {
                  results: data.results.map(function(item) {
                      return { id: item.id, text: item.text };
                  })
              };
          } else {
              console.error("Estrutura de dados inesperada ou resultados vazios", data);
              return { results: [] }; // Retorna um array vazio em caso de erro
          }
      
        },
        error: function(jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
            console.error("Erro na requisição AJAX:", jqXHR, textStatus);
        },
        delay: 250
    },
    minimumInputLength: 3
});


 
});