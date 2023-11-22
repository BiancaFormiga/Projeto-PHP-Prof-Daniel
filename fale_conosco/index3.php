<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
</head>
<body>

    <h1>Fale Conosco</h1>
    <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
     <form method="POST" action="processa3.php">
     <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

        <label for="assunto">Assunto</label>
        <select name="assunto">
            <option value="">Selecione uma Opção</option>
            <option value="Sugestão">Sugestão</option>
            <option value="Dúvida">Dúvida</option>
            <option value="Reclamação">Reclamação</option> 
            <option value="Rastreio">Rastreio</option> 
            <option value="Devolução">Devolução</option> 

            </select> <br> 
        
        <label for="mensagem">Mensagem</label> <br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea> <br>
        
        <input class="tamalho" type="submit" value="Enviar Dados">
    </form>
    </form>

</body>
</html>
