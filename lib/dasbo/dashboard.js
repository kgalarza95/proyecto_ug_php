/* globals Chart:false, feather:false */

//obtener arreglo de datos desde la base
data = [15339, 21345, 18483, 24003, 23489, 24092, 12034];

(function () {
  "use strict";

  feather.replace();

  // Graphs
  var ctx = document.getElementById("myChart");
  var ctxBrr = document.getElementById("chartBarras");
  var ctxPst = document.getElementById("chartPastel");

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

  const myChartBrr = new Chart(ctxBrr, {
    type: "bar",
    data: {
      labels: ["Ecuador","Argentina","Perú","Colombia","Brasil","España","Urugay"],
      datasets: [
        {
          label: "# of Votes",
          data: data,
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(54, 162, 235, 0.2)"
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(54, 162, 235, 0.2)"
          ],
          borderWidth: 1,
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

  const config = {
    type: "pie",
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "top",
        },
        title: {
          display: true,
          text: "Chart.js Pie Chart",
        },
      },
    },
  };

  const myChartPst = new Chart(ctxPst, {
    type: "pie",
    data: {
      labels: ["Ecuador","Argentina","Perú","Colombia","Brasil","España","Urugay"],
      datasets: [
        {
          label: "# of Votes",
          data: data,
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(54, 162, 235, 0.2)"
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(54, 162, 235, 0.2)"
          ],
          borderWidth: 1,
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
})();
