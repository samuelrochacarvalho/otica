<html>
<?php
include "conexao.php";
echo "<br>";
$id = $_GET['id'];

$sql = "select * from produtos where id_Produtos='$id';";
$query_run = mysqli_query($conn, $sql);
$lucro = 0;
$Plucro = 0;
if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $produto) {
        
        if($produto['caminho']==""){
            $caminho = "fotos/padrao.png";
        }else{
            $caminho = "fotos/".$produto['caminho'];
        }
        
        echo "<div class='container'>
                <div class='row'>
                    <div class='col'>
                        <img src='$caminho' height='200' widht='200'>
                    </div>
                    <div class='col'>
                        <div class='input-group'>
                            <span class='input-group-text' id='basic-addon1'>Nome:</span>
                            <input type='text' class='form-control' value='".$produto['nome']."' disabled>
                        </div>
                        <br>
                        <div class='input-group'>
                            <span class='input-group-text' id='basic-addon1'>Referencia:</span>
                            <input type='text' class='form-control' value='".$produto['referencia']."' disabled>
                        </div>
                        <br>
                        <div class='input-group'>
                            <span class='input-group-text' id='basic-addon1'>Fornecedores:</span>
                            <input type='text' class='form-control' value='".$produto['fornecedores']."' disabled>
                        </div>
                    </div>    
                </div>
                <br>
                <div class='row'>
                <table class='table table-bordered table-striped'>
                    <tr>
                        <th>Preço de Custo</th>
                        <th>Prenço de Venda</th>
                        <th>Lucro Real</th>
                        <th>% Lucro</th>
                        <th>Quantidade</th>
                        <th>Data de Entrada</th>
                    </tr>
                    <tr >
                        <td>".$produto['custo'].",00 R$</td>
                        <td>".$produto['venda'].",00 R$</td>
                        <td>".($produto['venda']-$produto['custo']).",00 R$</td>
                        <td>".((($produto['venda']-$produto['custo'])*100)/$produto['custo'])." %</td>
                        <td>".$produto['quantidade']."</td>
                        <td>".$produto['dataLancamento']."</td>
                    </tr>
                    
                </table>
                </div>
            <div>"    ;
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>
    ERRO. Produto não Encontrado, Procure o Desenvolvedor ou tente novamente!
  </div>";
}
mysqli_close($conn);
?>