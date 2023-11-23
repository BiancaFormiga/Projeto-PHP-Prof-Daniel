
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
        }

        .main {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin: 0; /
        }

        .main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center; 
            border-radius: 0;

        }

        .main.second {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center; 
            margin-top: 0 px; 
        }
    </style>
</head>
<body>
        <div class="image-container">
            <figure>
                <br><br>
                <img src="./imagens/branco_1Camisa_bolso_duplo_manga_de_asa_de_morcego_colheita.webp" alt="Blusa 1 " width="200">
                <br><br>
                <figcaption>
                    <p6>Camisa Bolso Duplo</p6>  <br>                
                    <button class="btn efeito" style="background-color: green; color: white;">R$ 59,87</button>
                    <form action="filtros/excluir.php" method="post">
                    <input type="hidden" name="id_produto" value="">
                    <button type="submit"class="button" name="addcarrinho">Excluir</button> <br> <br>
                    </form>
                </figcaption>
            </figure> 
         </div>

         <div classe="item-carrinho-vazio">Seu carrinho está vazio!</div>
         <div classe="rodape">
            <h3>Total</h3>
         </div>
  
</body>
</html>

