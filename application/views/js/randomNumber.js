function randomNumber(len) {
	var randomNumber;
	var n = '';

	for (var count = 0; count < len; count++) {
		randomNumber = Math.floor(Math.random() * 10);
		n += randomNumber.toString();
	}
	return n;
}

document.getElementById("num_historiaclinica").value = randomNumber(9);
