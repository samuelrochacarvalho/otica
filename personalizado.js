function teste() {
	var quant = document.getElementById("quant");
	quant.value = 1;

	var venda = document.getElementById("Pvenda");


	var resultFinal = "";

	var produto = document.querySelector("#produto");
	var texto = produto.value;
	var id = "";
	texto = texto.toLowerCase();
	var resultado1;
	if (texto.includes("codigo:")) {
		const teste = texto.split(":");
		id = teste[1];
		console.log(id);

		if (id != '') {
			var dados = {
				palavra: id
			}
			$.post('proc_pesq_user.php', dados, function (retorna) {
				//Mostra dentro da ul os resultado obtidos 

				$(".resultado").html(retorna);

				var resultado = document.getElementById("resultado");
				console.log(resultado.innerHTML);
				resultFinal = resultado.innerHTML;
				alert(resultFinal);

				resultado1 = resultFinal.split("/");
				console.log(resultado1);
				var valVenda = parseInt(resultado1[4]);
				venda.value =valVenda;
		});
	}
}
	else {
	alert('codigo do produto não localizado. error pg: cadVendas.php/personalizado.js');
}


}