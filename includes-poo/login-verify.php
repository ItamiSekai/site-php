<?php
session_start(); // Inicia a sessão
require_once '../libraries/classes/user.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_full";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Passando os dados para um novo objeto, da classe Usuario
    $usuario = new Usuario($conn);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);

    // Consulta ao banco para verificar as credenciais

    if ($usuario->verificaLogin($_POST['email'], $_POST['senha'])) {
        // Login bem-sucedido
        $usuario->setId($_SESSION['user_id']); // Armazena o ID na sessão
        header("Location: ../poo-dashboard.php"); // Redireciona para a próxima página
        exit();
    }
    else{
        echo "Senha incorreta ou conta nao existe";
    }

    $conn->close();
}
else{
    echo 'Erro ao enviar formulario';
}
?>
