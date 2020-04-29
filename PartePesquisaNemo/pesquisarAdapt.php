<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sea";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_prod = "SELECT * FROM produto WHERE nome LIKE '%$pesquisar%'
OR marca LIKE '%$pesquisar%' LIMIT 5";
$resultado_prod = mysqli_query($conn, $result_prod);

while($rows_prod = mysqli_fetch_array($resultado_prod)) {
    echo "Nome do produto: ".$rows_prod['nome']."<br>";
    echo "Marca do produto: ".$rows_prod['marca']."<br>";
    echo "Quantidade de produto em estoque: ".$rows_prod['quantidade']."<br><br>";
}

?>
