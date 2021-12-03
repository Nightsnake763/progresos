function obtener_valores(cantidad){

	let positivo = 0;
	let negativo = 0;
	let par = 0;
	let impar = 0;
	let neutro = 0;

	for (let i = 0; i < cantidad; i++) {
		let numero = parseInt(document.getElementById("num" + String(i)).value);

		if (numero > 0) {
			positivo++;
		}else if (numero < 0) {
			negativo++;
		}else {
			neutro++;
		}

		if (numero%2 == 0) {
			par++;
		}else{
			impar++;
		}
	}

	let fila = "<tr><td>positivo</td><td>negativo</td><td>neutro</td><td>par</td><td>impar</td></tr>";
	fila += "<tr><td>" + positivo + "</td><td>" + negativo + "</td><td>" + neutro + "</td><td>" + par + "</td><td>" + impar + "</td></tr>";
	document.getElementById("tabla2").innerHTML = fila;
}

function crear_inputs() {

	let cantidad = parseInt(document.getElementById("cantidad").value);
	let fila = "";

	for (let i = 0; i < cantidad; i++) {
		fila += "<tr><td>numero " + (i+1) + "</td><td><input id = num" + String(i) + "></td></tr>";
	}

	fila += "<tr><td colspan=2><button class= 'btn btn-outline-primary btn-block' onclick = 'obtener_valores("+ cantidad +")'>Enviar Numeros</button></td></tr>";
	document.getElementById("tabla").innerHTML = fila;
}