<?php
    // include_once ("config.inc.php");

    // $foto = $_REQUEST['foto'];
    // $nome = $_REQUEST['nome'];
    // $preço = $_REQUEST['preço'];

    // $sql = "INSERT INTO Blusas (foto, nome, preço)
    //         VALUES ('$foto','$nome','$preço')";

    // $insert = mysqli_query($conn, $sql);

    // #msqli_close($conn);

    // echo "<h2> Cadastro Realizado com Sucesso. </h2>"; 
    // echo '<a href="inserirblusa.php">Fazer novo cadastro</a>';

    include_once ("config.inc.php");


    $extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; // define o novo nome do arquivo
    $diretorio = "upload/"; // define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $nome = $_REQUEST['nome'];
    $preco = $_REQUEST['preco'];

    $sql = "INSERT INTO Blusas (foto, nome, preco) VALUES ('$novo_nome', '$nome', '$preco')";

    mysqli_query($conn, $sql);


?>
