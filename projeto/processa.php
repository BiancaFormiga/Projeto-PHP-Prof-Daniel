<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

if (!empty($nome) && !empty($email)) {
    $result_usuario = "INSERT INTO usuario (nome, email, senha,created) VALUES ('$nome', '$email',  '$senha_hash', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if ($resultado_usuario) {
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar o usuário: " . mysqli_error($conn) . "</p>";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Nome e email são campos obrigatórios</p>";
    header("Location: index.php");
    exit();
}
?>
