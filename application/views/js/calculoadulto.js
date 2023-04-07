const edadInput = document.getElementById("edad");
const dietaInput = document.getElementById("tiene_dieta");
const prioridadInput = document.getElementById("prioridad");
const riesgoInput = document.getElementById("riesgo");

function calcularPrioridad() {
	const edad = parseInt(edadInput.value);
	const tieneDieta = dietaInput.value === "si";

	if (tieneDieta) {
		if (edad < 60 || edad > 100) {
			alert("Si tiene dieta, la edad debe estar entre 60 y 100 años");
			prioridadInput.value = "";
			riesgoInput.value = "";
			document.getElementById("submitBtn").disabled = true;
			return;
		}
	}

	let prioridad = 0;
	if (tieneDieta && edad >= 60 && edad <= 100) {
		prioridad = edad / 20 + 4;
	} else {
		prioridad = edad / 30 + 3;
	}

	// redondea el valor de prioridad a 2 decimales
	prioridadInput.value = prioridad.toFixed(2);

	calcularRiesgo();
}

function calcularRiesgo() {
	const edad = parseInt(edadInput.value);
	const prioridad = parseInt(prioridadInput.value);

	riesgoInput.value = (edad * prioridad) / 100 + 5.3;
}

edadInput.addEventListener("change", calcularPrioridad);
dietaInput.addEventListener("change", calcularPrioridad);
