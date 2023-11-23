<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo Fino</title>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/quem-sou.css">
    <link rel="stylesheet" href="./css/clientes.css">
    <style>
        .top-right-images {
            position: absolute;
            top: 0;
            right: 0;
            margin-top: 10px; 
        }

        .menu-logo {
            width: 50px;
            margin-right: 10px; 
        }
    </style>
</head>
<body>
        <h1 style="color: black; font-family: 'Georgia'">ESTILO FINO</h1>
        
    <div>
        <div id="header">
            <?php
                include_once("menu.php");
            ?>
        </div>
        <div class="top-right-images">
              <a href="?pg=perfil">
                <img src="./imagens/perfil.png" alt="" class="menu-logo">
            </a>
        </div>
    </div>
</body>
</html>
