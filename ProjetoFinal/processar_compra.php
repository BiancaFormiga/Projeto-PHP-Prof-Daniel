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
    <h1>Finalize a Sua Compa</h1>
    <form action="processar_comprabd.php" method="post">
        <div class="input-container">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome">
        </div>
        <div class="input-container">
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <div class="input-container">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf">
        </div>
        <div class="input-container">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco">
        </div>
        <label for="pagamento"> Selecione a Forma de Pagamento: </label>
        <select name="pagamento" >
            <option value="">Selecione uma Opção:</option>
            <option value="Pix">Pix</option>
            <option value="Boleto">Boleto</option>
            <option value="DCartão de Crédito">Cartão de Crédito</option>
            <option value="Cartão de Débito">Cartão de Débito</option> 
        </select> <br> 
        <div class="center-input">
            <input class="tamalho" type="submit" value="Enviar">
        </div>
    </form>

</div>
</body>
</html>

