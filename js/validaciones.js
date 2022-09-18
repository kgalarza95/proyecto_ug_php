function soloNumeros(e) {
  var key = window.Event ? e.which : e.keyCode;
  return key >= 48 && key <= 57;
}

function soloLetras(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = "8-37-39-46";

  tecla_especial = false;
  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    return false;
  }
}

function llenarTabla(tabla, filas) {
  $("#" + tabla + " tbody").remove();
  $("#" + tabla)
    .dataTable()
    .fnDestroy();
  $("#" + tabla).DataTable({
    language: {
      search: "Buscar",
      info: "Total: _TOTAL_ registros. ",
      emptyTable: "No hay información.",
      infoEmpty: "Total: 0 registros.",
      infoFiltered: "(filtrado de un total de _MAX_ registros)",
      select: { rows: " %d filas seleccionadas." },
    },
    select: true,
    scrollY: 300,
    scrollX: true,
    scrollCollapse: true,
    paging: false,
    fixedColumns: false,
    data: filas,
    columns: [
      { data: "id" },
      { data: "nombre" },
      { data: "correo" },
      { data: "mensaje" },
      { data: "respuesta" },
    ],
    columnDefs: [
      {
        visible: false,
        searchable: true,
      },
    ],
  });

  var table = $("#" + tabla).DataTable();

  $("#" + tabla + " tbody").on("click", "tr", function () {
    if ($(this).hasClass("selected")) {
      $(this).removeClass("selected");

      document.getElementById("nombre").value = "";
      document.getElementById("email").value = "";
      document.getElementById("telefono").value = "";
      document.getElementById("mensaje").value = "";
      document.getElementById("id").value = "";
    } else {
      table.$("tr.selected").removeClass("selected");
      $(this).addClass("selected");
      let datoCelda = $("#" + tabla)
        .DataTable()
        .row($(this))
        .data();

      idRegistro = datoCelda.id;
      document.getElementById("id").value = datoCelda.id;
      document.getElementById("nombre").value = datoCelda.nombre;
      document.getElementById("email").value = datoCelda.correo;
      document.getElementById("telefono").value = datoCelda.mensaje;
    }
  });
}
var idRegistro;

$(document).ready(function () {
  llenarTabla("tblInf", []);

});



const getData = async () => {
  const data = await fetch("../controller/mvcController.php?vl=10");
  if (data.status === 200) {
    const datos = await data.json();
    llenarTabla("tblInf", datos);
  }
};

window.onload = () => {
  getData();
};
