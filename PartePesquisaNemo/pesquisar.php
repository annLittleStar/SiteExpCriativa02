<?php
$servidor = "localhost";
$usuario = "root";
$senha = "n3m0mysql";
$dbname = "akim-pneus";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$pesquisar = $_POST['pesquisar'];
$result_pneus = "SELECT * FROM pneu WHERE marca LIKE '%$pesquisar%' LIMIT 5";
$resultado_pneus = mysqli_query($conn, $result_pneus);



while($rows_pneu = mysqli_fetch_array($resultado_pneus)) {
    echo "Marca do pneu: ".$rows_pneu['marca']."<br>";
    echo "Modelo do pneu: ".$rows_pneu['modelo']."<br>";
    echo "Aro do pneu: ".$rows_pneu['aro']."<br>";
    echo "Altura do pneu: ".$rows_pneu['altura']."<br>";
    echo "Largura do pneu: ".$rows_pneu['largura']."<br>";
} 



?>