<?php
    include_once ("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $sql = "INSERT INTO usuario (nome, email ,senha)
            VALUES ('$nome','$email','$senha')";

    $insert = mysqli_query($conn, $sql);

    #msqli_close($conn);

    echo "<h2> Olá, $nome. Cadastro Realizado com Sucesso. </h2>"; 
    echo '<a href="index.php">Voltar para a página inicial</a>';
?>