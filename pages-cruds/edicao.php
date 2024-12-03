<?php

// CONEXÃO COM BANCO DE DADOS 

// 1. Dados de conexão com o bd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_full";

// 2. Executar o código da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. Checar conexão com servidor
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} 

// 4. Fazer a consulta com o MySQL
$nome = $_POST['usuario']['nome'];
$email = $_POST['usuario']['email'];
$senha = $_POST['usuario']['senha'];
$id = $_POST['usuario']['usuario_id'];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "UPDATE `usuario` SET nome = ?, email = ?, senha = ? WHERE usuario_id = ?";
$conect = $conn->prepare($sql);
$conect->bind_param("sssi", $nome, $email, $senhaHash, $id);
$conect->execute();

if ($conect->affected_rows > 0) {
    echo "Dados do usuário atualizados com sucesso!";
} else {
    echo "Nenhum dado foi atualizado ou ocorreu um erro.";
}

// Atualiza a assinatura
$assinatura = $_POST['assinatura']['tipo_assinatura'];

$sql = "UPDATE assinatura SET tipo_assinatura = ? WHERE usuario_id = ?";
$conect = $conn->prepare($sql);
$conect->bind_param("si", $assinatura, $id);
$conect->execute();

if ($conect->affected_rows > 0) {
    echo "Assinatura atualizada com sucesso!";
} else {
    echo "Nenhuma assinatura foi atualizada ou ocorreu um erro.";
}

// 5. Fechar ou encerrar a conexão
$conect->close();
$conn->close();

?>
