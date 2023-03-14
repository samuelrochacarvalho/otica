let produto = [];
var quantCarrinho=0;
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
				//console.log(resultado.innerHTML);
				resultFinal = resultado.innerHTML;
				//alert(resultFinal);

				resultado1 = resultFinal.split("/");
				//console.log(resultado1);
				var valVenda = parseInt(resultado1[4]);
				venda.value = valVenda;
				AdicionarCarrinho(resultado1);
			});
		}
	}
	else {
		alert('codigo do produto não localizado. error pg: cadVendas.php/personalizado.js');
	}

};
function AdicionarCarrinho(prod) {
	var prodA;
	prodA = prod;
	produto.push(prod);
	//console.log(produto);
};

function carrinho() {
	let listaP=produto;
	var elemento = document.getElementById("chapter-Venda");
	var lista = document.getElementById('prodV');
	var quantValV = document.getElementById('quantValV');
	var inptQuant = document.getElementById('quant');
	if (elemento) {
		quantCarrinho=1;
		document.getElementById('chapter-Venda').setAttribute('id', 'chapter-Vendas');
		lista.innerHTML="<table class='table-info'><tr><td>"+quantCarrinho+"- Cod.: "+(listaP[quantCarrinho-1][1])+" Nome: "+(listaP[quantCarrinho-1][2])+" Ref.:"+(listaP[quantCarrinho-1][3])+" Fornec.:"+(listaP[quantCarrinho-1][6])+"</td></tr></table>";
		console.log(listaP);
		quantValV.innerHTML="<label id='getQuant'>"+inptQuant.value+"</label><label id='getVal' style='text-align:right; width:50%;'>"+listaP[quantCarrinho-1][4]+",00R$</label><br>";
	} else {
		quantCarrinho++;
		var atual=document.getElementById('prodV');
		atual=atual.innerText;
		lista.innerHTML=atual+"<table class='table-info'><tr><td>"+quantCarrinho+"- Cod.: "+(listaP[quantCarrinho-1][1])+" Nome: "+(listaP[quantCarrinho-1][2])+" Ref.:"+(listaP[quantCarrinho-1][3])+" Fornec.:"+(listaP[quantCarrinho-1][6])+"</td></tr></table></br>";
		
		
		var atual1=document.getElementById('quantValV');
		atual1=atual1.innerHTML;
		quantValV.innerHTML=atual1+"<label id='getQuant'>"+inptQuant.value+"</label><label id='getVal' style='text-align:right; width:50%;'>"+listaP[quantCarrinho-1][4]+",00R$</label><br>";
	}	
}