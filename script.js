var cantidad = 0;
var total = 0;
var categoria = "";

function totalPago() {
  cantidad = document.getElementById("cantidad").value;
  categoria = document.getElementById("categoria").value;
  var total = cantidad * 200;
  if (categoria == "") {
    alert("Seleccione una categoria");
  } else if (categoria == "Trainee") {
    total = total * 0.5;
  } else if (categoria == "Junior") {
    total = total * 0.85;
  } else if (categoria == "Estudiante") {
    total = total * 0.2;
  }
  document.getElementById("total").innerHTML = "Total a Pagar: $" + total;
}

function reset() {
  cantidad = 0;
  total = 0;
  categoria = "";
  document.getElementById("total").innerHTML = "Total a Pagar: $";
}
