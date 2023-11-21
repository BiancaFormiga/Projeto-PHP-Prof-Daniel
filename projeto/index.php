<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>

    <h1>Cadastrar Usuário</h1>
    <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha"><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
