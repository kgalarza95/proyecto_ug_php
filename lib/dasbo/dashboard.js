/* globals Chart:false, feather:false */

//obtener arreglo de datos desde la base
data = [15339, 21345, 18483, 24003, 23489, 24092, 12034];

(function () {
  "use strict";

  feather.replace();

  // Graphs
  var ctx = document.getElementById("myChart");
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "Ecuador",
        "Argentina",
        "Perú",
        "Colombia",
        "Brasil",
        "España",
        "Urugay",
      ],
      datasets: [
        {
          data: data,
          lineTension: 0,
          backgroundColor: "transparent",
          borderColor: "#007bff",
          borderWidth: 4,
          pointBackgroundColor: "#007bff",
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: false,
            },
          },
        ],
      },
      legend: {
        display: false,
      },
    },
  });
})();
