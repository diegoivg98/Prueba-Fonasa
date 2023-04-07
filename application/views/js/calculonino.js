const form = document.querySelector('form');
const edadInput = form.querySelector('#edad');
const pesoEstaturaInput = form.querySelector('#relacion_pesoestatura');
const prioridadInput = form.querySelector('#prioridad');
const riesgoInput = form.querySelector('#riesgo');

function calcularPrioridad(edad, pesoEstatura) {
	if (edad >= 1 && edad <= 5) {
		return pesoEstatura + 3;
	} else if (edad >= 6 && edad <= 12) {
		return pesoEstatura + 2;
	} else {
		return pesoEstatura + 1;
	}
}

function calcularRiesgo(edad, prioridad) {
	return (edad * prioridad) / 100;
}

function actualizarValores() {
	const edad = parseInt(edadInput.value);
	const pesoEstatura = parseInt(pesoEstaturaInput.value);
	const prioridad = calcularPrioridad(edad, pesoEstatura);
	const riesgo = calcularRiesgo(edad, prioridad);

	prioridadInput.value = prioridad.toFixed(2);
	riesgoInput.value = riesgo.toFixed(2);
}

edadInput.addEventListener('input', actualizarValores);
pesoEstaturaInput.addEventListener('input', actualizarValores);
