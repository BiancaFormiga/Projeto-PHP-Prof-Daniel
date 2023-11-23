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
    <div class="main">
        <img src="./imagens/imagem-inicio.png" alt="Imagem Início">
    </div>

    <div class="main second">
        <img src="./imagens/imagem_2_inicial.png" alt="Imagem Início" >
    </div>
</body>
</html>

