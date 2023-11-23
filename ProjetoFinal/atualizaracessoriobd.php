<?php


include_once ("config.inc.php");

$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
$foto_nome = md5(time()) . $extensao; // define o novo nome do arquivo
$diretorio = "upload/"; // define o diretorio para onde enviaremos o arquivo

move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$foto_nome); //efetua o upload

$nome = $_REQUEST['nome'];

$nome_novo = $_REQUEST['nome_novo'];
$preco = $_REQUEST['preco'];

$sql = "UPDATE Acessorios SET foto='$foto_nome',nome='$nome_novo',preco='$preco' WHERE nome='$nome'";

mysqli_query($conn, $sql);


echo "<p>Produto Atualizado!</p>"
?>
