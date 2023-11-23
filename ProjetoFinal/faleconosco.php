<div class="container-form">
    <h1>Fale Conosco</h1>
    <form action="faleconoscobd.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>
        
        <label for="email">Email:</label>
        <input type="text" name="email"><br>

        <!-- <label for="assunto">Assunto:</label>
        <input type="text" name="assunto"><br> -->

                
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
        
        <input class="tamalho" type="submit" value="Enviar Mensagem">
    </form>
</div>

