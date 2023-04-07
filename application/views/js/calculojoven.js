const edadInput = document.getElementById("edad");
const aniosFumadorInput = document.getElementById("años_fumador");
const fumadorInput = document.getElementById("fumador");
const prioridadInput = document.getElementById("prioridad");
const riesgoInput = document.getElementById("riesgo");

// Función que se ejecuta cuando se cambia algún campo
function calcular() {
	const edad = parseInt(edadInput.value);
	const aniosFumador = parseInt(aniosFumadorInput.value);
	const esFumador = fumadorInput.value === "si";

	let prioridad;
	if (esFumador) {
		prioridad = aniosFumador / 4 + 2;
	} else {
		prioridadInput.value = 0;
		prioridad = 2;
	}
	prioridadInput.value = prioridad;

	const riesgo = (edad * prioridad) / 100;
	riesgoInput.value = riesgo;
}

fumadorInput.addEventListener("change", () => {
	if (fumadorInput.value === "no") {
		aniosFumadorInput.value = 0;
		aniosFumadorInput.setAttribute("readonly", "readonly");
	} else {
		aniosFumadorInput.value = "";
		aniosFumadorInput.removeAttribute("readonly");
	}
	calcular();
});

// Escuchar los eventos de cambio en los campos
edadInput.addEventListener("change", calcular);
aniosFumadorInput.addEventListener("change", calcular);
fumadorInput.addEventListener("change", calcular);
