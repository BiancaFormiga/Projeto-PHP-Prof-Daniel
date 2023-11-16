<?php
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['mensagem'];

    echo "<h2> Olá, $nome. Mensagem Recebida com Sucesso. </h2>"; 
    echo '<a href="index.php">Voltar para a página inicial</a>';
?>