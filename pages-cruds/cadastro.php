<?php
$usuario = $_POST['usuario'];
$assinatura = $_POST['assinatura'];

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
$nome = $_POST['usuario']['nome'];
$email = $_POST['usuario']['email'];
$senha = $_POST['usuario']['senha'];

$sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";

$conn->query($sql);

// Ler consulta
$usuario_id = $conn->insert_id;

$assinatura = $_POST['assinatura']['tipo_assinatura'];

$sql = "INSERT INTO `assinatura` (`usuario_id`, `tipo_assinatura`) VALUES ('$usuario_id', '$assinatura')";

$conn->query($sql);



// 5. Fechar ou encerrar a conexão
$conn->close();

echo 'Dados foram enviados com sucesso!';

?>

