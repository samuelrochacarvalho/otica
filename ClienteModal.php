<html>
<?php
include "conexao.php";
echo "<br>";
$id = $_GET['id'];

$sql = "select * from clientes where id_Clientes='$id';";
$query_run = mysqli_query($conn, $sql);

if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $cliente) {
        echo "<h6>Dados Pessoais:</h6>";#dados pessoais
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Nome:</span>
        <input type='text' class='form-control' value='" . $cliente['nome'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Apelido:</span>
        <input type='text' class='form-control' value='" . $cliente['apelido'] . "'disabled/>
        </div>";
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>RG:</span>
        <input type='text' class='form-control' value='" . $cliente['rg'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Orgão Emissor:</span>
        <select class='form-select' disabled>
        <option selected>".$cliente['emissor']."</option></select>
        </div>";
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>CPF:</span>
        <input type='text' class='form-control' value='" . $cliente['cpf'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Sexo:</span>
        <input type='text' class='form-control' value='" . $cliente['sexo'] . "'disabled/></div>";
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Escolaridade:</span>
        <input type='text' class='form-control' value='" . $cliente['escolaridade'] . "'disabled/></div>";
        echo "<h6>Endereço:</h6>";#endereço
        
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Rua:</span>
        <input type='text' class='form-control' value='" . $cliente['rua'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Bairro:</span>
        <input type='text' class='form-control' value='" . $cliente['bairro'] . "'disabled/></div>";
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Quadra:</span>
        <input type='text' class='form-control' value='" . $cliente['qd'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Lote:</span>
        <input type='text' class='form-control' value='" . $cliente['lt'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Numero:</span>
        <input type='text' class='form-control' value='" . $cliente['n'] . "'disabled/>
        </div>";
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Complemento:</span>
        <input type='text' class='form-control' value='" . $cliente['complemento'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Cidade:</span>
        <input type='text' class='form-control' value='" . $cliente['cidade'] . "'disabled/>
        </div>";
        
        echo "<h6>Contato:</h6>";#contato
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Telefone:</span>
        <input type='text' class='form-control' value='" . $cliente['telefone'] . "'disabled/>
        <span class='input-group-text' id='basic-addon1'>Identificação:</span>
        <input type='text' class='form-control' value='" . $cliente['identificacao'] . "'disabled/></div>";
        echo "<div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>Email:</span>
        <input type='text' class='form-control' value='" . $cliente['email'] . "'disabled/></div>";
        echo "<h6>Outros:</h6>";#outros

        echo "<div class='form-floating'><textarea class='form-control' disabled>".$cliente['observacao']."</textarea></div>";
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>
    ERRO. Cliente não Encontrado, Procure o Desenvolvedor ou tente novamente!
  </div>";
}
mysqli_close($conn);
?>


<!--duplo
<div class='input-group mb-3'>
    <span class='input-group-text' id='basic-addon1'>Nome:</span>
    <input type='text' class='form-control' value='""' disabled />
    <span class='input-group-text' id='basic-addon1'>Nome:</span>
    <input type='text' class='form-control' value='""' disabled />
</div>" ;

-->