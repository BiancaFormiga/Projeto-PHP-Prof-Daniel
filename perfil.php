<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="./css/form.css">

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
    <h1>Perfil</h1>
            <label for="nome">Nome</label>
            <label for="email">Email</label>
            <label for="senha">Senha</label>
            <label for="endereço">Endereço</label>

</div>