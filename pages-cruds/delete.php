<?php
// Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_full";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter ID do item a ser excluído
$id = $_GET['id'] ?? null; // Usando null coalescing para evitar undefined index

if ($id === null) {
    die("ID não foi passado para a exclusão.");
}

// Prevenir SQL Injection
$id = intval($id);

// Primeiro, deletar da tabela assinatura
$sql2 = "DELETE FROM `assinatura` WHERE usuario_id = ?";
$stmt2 = $conn->prepare($sql2);
$stmt2->bind_param("i", $id);
$stmt2->execute();

// Depois, deletar da tabela usuario
$sql1 = "DELETE FROM `usuario` WHERE usuario_id = ?";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("i", $id);
$stmt1->execute();

// Verificar se a exclusão foi bem-sucedida
if ($stmt1->affected_rows > 0) {
    header('Location: confirm-delete.php?message=Usuário excluído com sucesso');
    exit;
} else {
    echo "Erro ao excluir o registro: " . $conn->error;
}

// Fechar a conexão
$stmt1->close();
$stmt2->close();
$conn->close();
?>
