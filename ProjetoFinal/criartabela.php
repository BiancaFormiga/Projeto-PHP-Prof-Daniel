<?php
// Conexão com servidor MySQL

$conn = mysqli_connect("127.0.0.1", "root", "", "EstiloFino");

// Conexão com o banco MySQL chamado EstiloFino


mysqli_query($conn,"
    CREATE TABLE Acessorios(
        foto varchar(40),
        nome varchar(255),
        preco varchar(40)
        
        )");

echo "ok";
?>