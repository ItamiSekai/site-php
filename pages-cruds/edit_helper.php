<?php
 // Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_full";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} 


// Consulta
$id = $_GET['id'];

$sql = "SELECT * FROM `usuario`, assinatura WHERE usuario.usuario_id = assinatura.usuario_id AND usuario.usuario_id = $id";

$result = $conn->query($sql);
$usuario = $result->fetch_assoc();



$conn->close();

?>