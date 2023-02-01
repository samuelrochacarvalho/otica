<html>
<?php
include "conexao.php";
echo "<br>";
$id = $_GET['id'];

$sql = "select * from produtos where id_Produtos='$id';";
$query_run = mysqli_query($conn, $sql);

if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $cliente) {
        echo "<img src='fotos/armacao1.jpg' class='img-thumbnail' width='200' height='200'>";#dados pessoais
    }
} else {
    echo "<div class='alert alert-danger' role='alert'>
    ERRO. Produto não Encontrado, Procure o Desenvolvedor ou tente novamente!
  </div>";
}
mysqli_close($conn);
?>