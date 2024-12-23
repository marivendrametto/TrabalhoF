document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var idPrestador = '<?php echo json_encode($_SESSION["prestador"]); ?>';

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "timeGridDay",
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    editable: true,
    selectable: true,
    events: function (fetchInfo, successCallback, failureCallback) {
      $.ajax({
        url: "http://localhost/TF/PrecisoDeTiDefinitivo/HTML/projectoFinal_Dash/projectoFinal/assets/controller/controllerClientes.php", // Caminho para o controlador",
        method: "POST",
        data: { op: 6, idPrestador: idPrestador },
        dataType: "json",
        success: function (response) {
          successCallback(response); // Adiciona os horários ao calendário
        },
        error: function () {
          failureCallback();
        },
      });
    },
    select: function (info) {
      Swal.fire({
        title: "Deseja marcar este horário?",
        text: `Início: ${info.startStr}\nFim: ${info.endStr}`,
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Sim",
        cancelButtonText: "Não",
        reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          // Se o usuário confirmar, salve o evento
          saveEvent({
            start: info.startStr,
            end: info.endStr,
          });
        }
        // Se o usuário cancelar, não faça nada
        calendar.unselect();
      });
    },
    eventClick: function (info) {
      Swal.fire({
        title: "Deseja desmarcar este horário?",
        text: "Esta ação é irreversível.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, desmarcar!",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          removeEvent(info.event);
        }
      });
    },
  });

  calendar.render();

  function saveEvent(event) {
    let dados = new FormData();
    dados.append("op", 5);
    dados.append("idPrestador", idPrestador);
    dados.append("datainicio", event.start);
    dados.append("datafim", event.end);

    $.ajax({
      url: "http://localhost/TF/PrecisoDeTiDefinitivo/HTML/projectoFinal_Dash/projectoFinal/assets/controller/controllerClientes.php", // Caminho para o controlador",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
      .done(function (msg) {
        alerta("", "Disponibilidade salva: " + msg, "success");
        calendar.refetchEvents(); // Atualizar os eventos no calendário
      })
      .fail(function (jqXHR, textStatus) {
        alerta("Erro ao salvar disponibilidade: " + textStatus);
      });
  }

  function removeEvent(event) {
    let dados = new FormData();
    dados.append("op", 7);
    dados.append("idPrestador", idPrestador);
    dados.append("datainicio", event.start.toISOString());
    dados.append("datafim", event.end.toISOString());

    $.ajax({
      url: "http://localhost/TF/PrecisoDeTiDefinitivo/HTML/projectoFinal_Dash/projectoFinal/assets/controller/controllerClientes.php", // Caminho para o controlador",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
      .done(function (msg) {
        alerta("Disponibilidade desmarcada: " + msg);
        event.remove(); // Remove do calendário localmente
      })
      .fail(function (jqXHR, textStatus) {
        alerta("Erro ao desmarcar disponibilidade: " + textStatus);
      });
  }
});

function alerta(icon, msg) {
  Swal.fire({
    icon: icon,
    text: msg,
  });
}

$(function () {
  alerta(
    "Gestão de horarios",
    "aqui pode marcar as suas disponibilidades",
    "warning"
  );
});
