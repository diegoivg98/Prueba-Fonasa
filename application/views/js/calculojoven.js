  function calcularPrioridad() {
    var fumador = document.getElementById("fumador").value;
    var añosFumador = document.getElementById("años_fumador").value;

    if (fumador == "si") {
      var prioridad = añosFumador / 4 + 2;
    } else {
      var prioridad = 2;
    }

    document.getElementById("prioridad").value = prioridad;
    calcularRiesgo();
  }

  function calcularRiesgo() {
    var edad = document.getElementById("edad").value;
    var prioridad = document.getElementById("prioridad").value;

    var riesgo = (edad * prioridad) / 100;

    document.getElementById("riesgo").value = riesgo;
  }

  document.getElementById("edad").addEventListener("input", calcularRiesgo);
  document.getElementById("fumador").addEventListener("change", calcularPrioridad);
  document.getElementById("años_fumador").addEventListener("input", calcularPrioridad);

