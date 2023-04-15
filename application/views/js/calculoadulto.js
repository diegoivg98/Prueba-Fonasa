  // Función para calcular la prioridad y riesgo
  function calcular() {
	var edad = document.getElementById('edad').value;
	var tiene_dieta = document.getElementById('tiene_dieta').value;
	var prioridad = 0;
	var riesgo = 0;

	if (tiene_dieta == 'si') {
		if (edad >= 60 && edad <= 100) {
			prioridad = edad/20 + 4;
		} else {
			prioridad = edad/30 + 3;
		}
	} else {
		prioridad = edad/30 + 3;
	}

	riesgo = (edad * prioridad)/100 + 5.3;

	document.getElementById('prioridad').value = prioridad.toFixed(2);
	document.getElementById('riesgo').value = riesgo.toFixed(2);
}

// Llamada a la función cuando se cambie la edad o tenga dieta
document.getElementById('edad').addEventListener('change', calcular);
document.getElementById('tiene_dieta').addEventListener('change', calcular);
