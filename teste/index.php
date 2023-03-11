<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title>Celke</title>
</head>

<body>
	<h1>Pesquisar Produtos</h1>
	<form method="POST" id="form-pesquisa" action="">
		<label>Pesquisar: </label>
		<input type="text" name="pesquisa" id="pesquisa">
	</form>

	<?php
	print_r("<div class='resultado'></div>");
	?>
	<button onclick="teste();">verificar
	</button>
	<script>
		function teste() {
			var produto = document.getElementsByClassName("resultado");
			var dados = (produto[0].innerText);
			//alert(dados);

			var currentUrl = dados.toLowerCase();
			if (currentUrl.includes("produto/")) {
				const teste = currentUrl.split("/");
				console.log(teste);
			}
			else {
				alert('Palavra "produto" não foi encontrada na URL');
			}

		}
	</script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script type="text/javascript" src="personalizado.js"></script>
</body>

</html>