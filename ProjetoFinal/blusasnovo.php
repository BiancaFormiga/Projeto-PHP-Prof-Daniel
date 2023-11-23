
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/css.css">
</head>


	<div class="main">
        <div>
        	<h1>Blusas</h1>
            <div class="texto-cima-ropa">
                <br><br>
            </div>           
        </div>

        <div style='display:flex;'>
        <div class='item-container' style=' display: flex; flex-wrap: wrap; width:70%'>
            <?php
                include_once ("config.inc.php");
                $sql = "SELECT foto, nome, preco FROM Blusas";
                $blusas = mysqli_query($conn, $sql);
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
            ?>
        </div> 
           

            <!--CARRINHO-->
            <div class="barraLateral" style='height:400px' >
                            <div class="topoCarrinho">
                                <p>Meu Carrinho</p>
                            </div>
                            <h3 id="carrinho-lista"></h3>            
                            <div class="item-carrinho">
                                <div class="rodape-1">
                                </div>
                            </div>
                                    
                            <!--CARRINHO-->
                            <div class="total">
                                <h3>Total</h3>
                                    <h2>R$ <span id="total-carrinho">0.00</span></h2>
                            </div>
                            <a href="?pg=processar_compra"> <button> Finalizar Compra</button></a>
    
                        </div> 
                        
            </div>
       
            <script src="carrinho.js" defer></script>
    </div>         

    


