function upgradePro(){

    let dados = new FormData();
    dados.append("select", 1);

    $.ajax({
      url: "../assets/controller/controllerPlanoSub.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })

      .done(function (msg) {
        alert(msg);
      })

      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });

}

function upgradeProPlus(){

    let dados = new FormData();
    dados.append("select", 2);

    $.ajax({
      url: "../assets/controller/controllerPlanoSub.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })

      .done(function (msg) {
        alert(msg);
      })

      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });


   
}

