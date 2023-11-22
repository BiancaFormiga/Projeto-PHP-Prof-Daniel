<?php
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['senha'];

    echo "<h2> Olá, $nome. Cadastro Realizado com Sucesso. </h2>"; 
    echo '<a href="index.php">Voltar para a página de produtos</a>';
?>