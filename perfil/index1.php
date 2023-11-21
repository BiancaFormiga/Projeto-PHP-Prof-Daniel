<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do usuário</title>
</head>
<body>
    <h1>Perfil do Usuário</h1>
    <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

     <form method="POST" action="processa1.php">

    <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder = "Digite o seu nome completo"><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" placeholder = "Digite sua data de nascimento"><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="123.456.789-00"><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" placeholder = "Digite o seu endereço"><br><br>

        <input type="submit" value="Enviar">
</form>
</body>
</html>
