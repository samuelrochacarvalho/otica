<?php
include "../conexao.php";
$novaimagem = "";
$moveu = 0;
#movendo arquivo pro servidor na pasta foto
if (isset($_POST['moveFile'])) {
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];

    if (isset($fileName)) {
        if (!empty($fileName)) {
            $location = "../fotos/";
            $novaimagem = time() . $fileName;
            if (move_uploaded_file($tempName, $location . $novaimagem)) {
                $moveu = 1;
            }
        }else{
            echo "Arquivo não selecionado.<br>";
        }
    }
} else {
    echo "não encontrado o arquivo, delete o produto e tente novamente";
}

$nome = $_POST["nomeProduto"];
$referencia = $_POST["referencia"];
$quantidade = $_POST["quantidade"];
$unidade = "2";
$estoqueAtual = $quantidade;
$fornecedores = $_POST["fornecedores"];
$valorVenda = $_POST["valorVenda"];
$valorCusto = $_POST["valorCusto"];
$hoje = date('d/m/Y');
$caminho = $novaimagem;

$sql = " INSERT INTO produtos (nome,referencia,unidade,fornecedores,custo,venda,quantidade,estoqueAtual,caminho,dataLancamento)
                     VALUES ('$nome','$referencia','$unidade','$fornecedores','$valorCusto','$valorVenda','$quantidade','$estoqueAtual','$novaimagem','$hoje');";

if (mysqli_query($conn, $sql)) {
    echo "Gravado produto no banco com sucesso<br>";
    if ($moveu == 1) {
        echo "foto movida pro servidor com sucesso<br>";
    }else{
        echo "foto não movida pro servidor";
    }
}
mysqli_close($conn);
?>