<?php
session_start();
include_once("conexao3.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    if (!empty($nome) && !empty($email)) {
        $result_usuario = "INSERT INTO conosco (nome, email, assunto, mensagem, created) 
                           VALUES ('$nome', '$email', '$assunto', '$mensagem', NOW())";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if ($resultado_usuario) {
            $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
            header("Location: index3.php");
            exit();
        } else {
            $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar o usuário: " . mysqli_error($conn) . "</p>";
            header("Location: index3.php");
            exit();
        }
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Nome e email são campos obrigatórios</p>";
        header("Location: index3.php");
        exit();
    }
}
?>
