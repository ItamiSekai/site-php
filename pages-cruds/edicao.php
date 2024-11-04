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
$nome = $_POST['usuario']['nome'];
$email = $_POST['usuario']['email'];
$senha = $_POST['usuario']['senha'];

$id = $_POST['usuario']['usuario_id'];

$sql = "UPDATE `usuario` SET nome = '$nome', `email` = '$email', senha = '$senha' WHERE `usuario`.`usuario_id` = $id; ";

$conn->query($sql);


$assinatura = $_POST['assinatura']['tipo_assinatura'];

$sql = "UPDATE assinatura SET tipo_assinatura = '$tipo_assinatura' WHERE usuario_id = $id";

$conn->query($sql);



// 5. Fechar ou encerrar a conexão
$conn->close();


?>


