<?php

// CONEXÃO COM BANCO DE DADOS 
// 1. Dados de conexão com o bd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_full";

// 2. Executar o codigo da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. Checar conexão com servidor
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} 

// 4. Fazer a consulta com o MySQL
$usuario = $_POST['usuario'];
$assinatura = $_POST['assinatura'];

$nome = $_POST['usuario']['nome'];
$email = $_POST['usuario']['email'];
$senha = $_POST['usuario']['senha'];

// Hash Senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT); 

// Insere os dados no banco, usando o hash da senha
$sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senhaHash')";

if ($conn->query($sql) === TRUE) {
    // Ler consulta
    $usuario_id = $conn->insert_id;

    $assinatura = $_POST['assinatura']['tipo_assinatura'];

    $sql = "INSERT INTO `assinatura` (`usuario_id`, `tipo_assinatura`) VALUES ('$usuario_id', '$assinatura')";

    if ($conn->query($sql) === TRUE) {
        echo 'Dados foram enviados com sucesso!';
    } else {
        echo 'Erro ao inserir dados de assinatura: ' . $conn->error;
    }
} else {
    echo 'Erro ao inserir dados de usuário: ' . $conn->error;
}

// 5. Fechar ou encerrar a conexão
$conn->close();
?>
