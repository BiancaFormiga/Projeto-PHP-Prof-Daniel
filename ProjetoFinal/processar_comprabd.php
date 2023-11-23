<?php

    include_once ("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $cpf = $_REQUEST['cpf'];
    $endereco= $_REQUEST['endereco'];
    $pagamento = $_REQUEST['pagamento'];



    $sql = "INSERT INTO CompraFinalizada (nome, email , cpf, endereco, pagamento)
            VALUES ('$nome','$email', '$cpf', '$endereco', '$pagamento')";

    $insert = mysqli_query($conn, $sql);



    echo "<h2> Olá, $nome. Compra Realizada com Sucesso. </h2>"; 
    echo '<a href="index.php">Voltar para a página inicial</a>';

?>