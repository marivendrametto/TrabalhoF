var ctx = document.getElementById("onlineUsersChart").getContext("2d");
var onlineUsersChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: ["08:00", "09:00", "10:00", "11:00", "12:00", "13:00"],
    datasets: [
      {
        label: "Utilizadores Online",
        data: [12, 19, 3, 5, 2, 3],
        borderColor: "rgba(75, 192, 192, 1)",
        borderWidth: 2,
        fill: false,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// Funções para mudar semanas usando jQuery
let currentWeek = 0;

function updateWeekLabel() {
  const startOfWeek = new Date();
  startOfWeek.setDate(startOfWeek.getDate() + currentWeek * 7);
  const endOfWeek = new Date(startOfWeek);
  endOfWeek.setDate(startOfWeek.getDate() + 6);

  $("#weekLabel").text(
    ` (${startOfWeek.toLocaleDateString()} - ${endOfWeek.toLocaleDateString()})`
  );
}

// Mudar para a semana anterior
$("#prevWeekBtn").on("click", function () {
  currentWeek--;
  updateWeekLabel();
  // Aqui você pode adicionar lógica para carregar os horários para a semana anterior
});

// Mudar para a semana seguinte
$("#nextWeekBtn").on("click", function () {
  currentWeek++;
  updateWeekLabel();
  // Aqui você pode adicionar lógica para carregar os horários para a próxima semana
});

// Inicializar com a semana atual
$(document).ready(function () {
  updateWeekLabel();
});

function modalSubscricao() {
  // Abrir o modal de subscrição usando jQuery e Bootstrap
  $("#modalSubscricao").modal("show");
}
