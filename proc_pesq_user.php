<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$produto = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM Produtos WHERE id_Produtos= $produto";
$resultado_user = mysqli_query($conn, $result_user);

if (($resultado_user) and ($resultado_user->num_rows != 0)) {
	while ($row_user = mysqli_fetch_assoc($resultado_user)) {
		echo "produto/".$row_user['id_Produtos']."/" .$row_user['nome']."/".$row_user['referencia']."/".$row_user['venda'].'/'.$row_user['quantidade']."/".$row_user['fornecedores'];
	}
} else {
	echo "Nenhum usuário encontrado ...";
}