<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "fale_conosco";

// Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
 