<?php

include_once ("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST["assunto"];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO FaleConosco (nome, email , assunto, mensagem)
            VALUES ('$nome','$email', '$assunto', '$mensagem')";

    $insert = mysqli_query($conn, $sql);



    echo "<h2> Olá, $nome. Mensagem Recebida com Sucesso. </h2>"; 
    echo '<a href="index.php">Voltar para a página inicial</a>';
?>