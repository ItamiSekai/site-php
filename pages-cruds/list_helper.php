<?php
 // Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_full";


$conn = new mysqli($servername, $username, $password, $dbname);


// Consulta


$sql = "SELECT * FROM `usuario`";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $data[] = $row;
}


$conn->close();

?>