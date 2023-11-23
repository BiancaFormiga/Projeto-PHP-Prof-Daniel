<?php
include_once ("config.inc.php");
$sql = "SELECT foto, nome, preco FROM Blusas";
$blusas = mysqli_query($conn, $sql);
echo "<div class='item-container' style=' display: flex; flex-wrap: wrap;'>";
while($row = mysqli_fetch_array($blusas, MYSQLI_NUM)){

    echo "<div style='flex: 1 0 21%;width:300px;padding:20px'> <figure><img src='./upload/{$row[0]}' alt='$row[1]' width='200'>".
    "<br><br>".
    "<figcaption>".
    "    <form action='filtros/criar.php' method='post'>".
    "        <p6>{$row[1]}</p6> <br>".
    "        <button class='btn efeito' style='background-color: green; color: white;'>R$ {$row[2]}</button>".
    "        <input type='hidden' name='id_produto' value=''>".
    "        <input type='hidden' name='valor' value=''>".
    "        <button type='button' class='button' name='addcarrinho' onclick='adicionarItem('{$row[1]}', {$row[2]}, './upload/{$row[0]}')'>Adicionar ao Carrinho</button>".
    "   </form>".
    "<figcaption>".
    "</figure></div>";

}
echo "</div>";
?>