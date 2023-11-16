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
            margin-bottom: 1px;
        }

        .center-input {
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container-form">
    <h1>Cadastro</h1>
    <form action="sucessocadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>
        <label for="email">Email:</label>
        <input type="text" name="email"><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" > <br>
        <input class="tamalho" type="submit" value="Enviar">
    </form>
</div>

