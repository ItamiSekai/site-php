<?php

session_start();
require_once 'libraries/classes/user.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_full";

$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão com servidor
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} 

// Verifica se o usuário já está logado
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // Redireciona para a página de dados do usuário
    exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    $usuario = new Usuario($dbname);
    $usuario->setEmail($email);
    $usuario->setSenha($senha); // Aqui você pode definir a senha apenas para verificação

    // Verifica se o login foi bem-sucedido
    if ($usuario->mostrarId($email, $senha)) { // Metodo errado,mudar assim que possivel
        $_SESSION['user_id'] = $usuario->mostrarId($email, $senha); // Armazena o ID do usuário na sessão
        header("Location: dashboard.php"); // Redireciona para a página de dados do usuário
        exit();
    } else {
        echo "Email ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
