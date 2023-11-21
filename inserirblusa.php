<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blusas</title>
</head>
<body>

<h1> Cadastrar Blusas: 

</h1> <br><br>
<form action="inserirblusabd.php" method="post" enctype = "multipart/form-data">

        <label for="foto">Foto</label>
        <input type="file" name="foto"><br><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br><br>
        
        <label for="preco">Preço:</label>
        <input type="text" name="preco"><br><br>            
               
        
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>