<?php

include_once ("config.inc.php");

    $nome = $_REQUEST['nome'];
    
    $sql = " DELETE FROM Calcas WHERE nome='$nome' ";

    $insert = mysqli_query($conn, $sql);



    echo "<h2> Produto Deletado com Sucesso. </h2>"; 

?>