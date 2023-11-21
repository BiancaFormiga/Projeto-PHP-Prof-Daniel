<?php
session_start();
include_once("conexao1.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

if (!empty($nome) && !empty($data_nascimento) && !empty($cpf) && !empty($endereco)) {
    // Lógica de conexão e inserção no banco de dados
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if ($conn) {
        $result_usuario = "INSERT INTO perfil (nome, data_nascimento, cpf, endereco, created) 
                            VALUES ('$nome', '$data_nascimento', '$cpf', '$endereco', NOW())";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if ($resultado_usuario) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    } else {
        echo "Erro ao conectar ao banco de dados.";
    }
} else {
    echo "Por favor, preencha todos os campos obrigatórios.";
}
