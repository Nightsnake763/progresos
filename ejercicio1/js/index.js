function generar_numeros() {
	let inicio = parseInt(document.getElementById("inicio").value);
	let final = parseInt(document.getElementById("final").value);
	let fila = "<tr>";
	let contador = -1;

	for (let i = inicio; i <= final; i++) {
		contador++;

		if (contador%10 == 0) {
			fila +="</tr><tr>";
		}

		fila += "<td>" + i + "</td>";
	}

	document.getElementById("tabla").innerHTML = fila;
}