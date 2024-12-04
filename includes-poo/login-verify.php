<?php
session_start(); 
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

    
    if ($usuario->verificaLogin($_POST['email'], $_POST['senha'])) {
        // Login bem-sucedido
        $id = $usuario->mostrarId($_POST['email'], $_POST['senha']);
        
        // Coletar os dados do usuário
        $usuario->coletaDadosPorId($id);
        
        // Armazenar o objeto completo na sessão
        $_SESSION['usuario'] = serialize($usuario);
        $_SESSION['tipo_assinatura'] = $usuario->getAssinatura(); 

        // Redirecionar para a página apropriada
        if ($_SESSION['tipo_assinatura'] == 'Diaria') {
            header("Location: ../pagina-noticias-diarias.php");
        } elseif ($_SESSION['tipo_assinatura'] == 'Semanal') {
            header("Location: ../pagina-noticias-semanais.php");
        } else {
            header("Location: ../index.php"); 
        }
        
        exit(); 
    } else {
        echo "Senha incorreta ou conta não existe";
    }

    $conn->close();
} else {
    echo 'Erro ao enviar formulário';
}
?>
