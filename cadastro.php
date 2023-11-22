<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        .container-form {
            text-align: center;
        }

        .container-form form {
            display: inline-block;
            text-align: left;
        }

        .container-form label,
        .container-form input {
            display: block;
            margin-bottom: 10px; 
        }

        .input-container {
            width: 200px; 
            margin: 0 auto; 
        }

        .center-input {
            margin: 0 auto;
        }

        .senha-container {
            text-align: center;
        }

        .senha-container input[type="password"] {
            width: 100%;
            box-sizing: border-box;
        }
        h1 {
            margin-bottom: 2px;
        }
    </style>
</head>
<body>
<div class="container-form">
    <h1>Cadastro</h1>
    <form action="sucessocadastro.php" method="post">
        <div class="input-container">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
        </div>
        <div class="input-container">
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <div class="input-container senha-container">
            <label for="senha">Senha:</label>
            <input type="password" name="senha">
        </div>
        <div class="center-input">
            <input class="tamalho" type="submit" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>

