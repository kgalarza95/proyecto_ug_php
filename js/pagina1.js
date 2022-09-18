$(document).ready(function () {
  //   $("#tblUsuarios").on("click", "tr td", function () {
  //     var valores = [];
  //     $(this)
  //       .find("td")
  //       .each(function () {
  //         valores.push(this.html());
  //       });

  //       console.log(valores);
  //   });

  // var boton = document.getElementsByClassName("btn_eliminar");
  //boton.addEventListener("click", eventoTabla);

  //   document.getElementsByClassName("btn_eliminar").onclick = function () {
  //     //document.getElementById("btn_eliminar").click();
  //     eventoTabla();
  //     console.log("click anchor");
  //   };

  eventoTabla();
});

function eventoTabla() {
  var table = document.getElementById("tblUsuarios");
  table.addEventListener("click", getDataTable);
}
function getDataTable() {
  var tds = event.path[1].children;
  var datos = [];
  for (var i = 0; i < tds.length; i++) {
    datos.push(tds[i].innerText);
  }
  var i = 0;
  document.getElementById("id").value = tds[i].innerText;
  document.getElementById("identificacion").value = tds[++i].innerText;
  document.getElementById("usuario").value = tds[++i].innerText;
  document.getElementById("pass").value = tds[++i].innerText;
  document.getElementById("nombres").value = tds[++i].innerText;
  document.getElementById("apellidos").value = tds[++i].innerText;
  document.getElementById("bloque").value = tds[++i].innerText;
  console.log(datos);
}
