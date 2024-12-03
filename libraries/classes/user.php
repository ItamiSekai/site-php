<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $db;

    // Construct 
    public function __construct($db){
        $this->db = $db;
    }

    // Metodos
    public function verificaSenha($senha){
        return password_verify($senha, $this->senha);
    }

    public function insereUsuario() {
        $conect= $this->db->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
        $conect->bind_param("ssss", $this->nome, $this->email, $this->senha);
        $conect->execute();
        $this->id = $conect->insert_id;
        $conect->close();
    }

    public function consultaPorId($id) {
        $conect = $this->db->prepare("SELECT id, nome, email, senha FROM usuario WHERE id = ?");
        $conect->bind_param("i", $id);
        $conect->execute();
        $result = $conect->get_result();

        if ($row = $result->fetch_assoc()) {
            $this->id = $row['id'];
            $this->nome = $row['nome'];
            $this->email = $row['email'];
            $this->senha = $row['senha'];
        }
        $conect->close();
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }


    public function mostrarId($email, $senha){
        $id = null;
        $senhaHash = '';

        // Prepara SQL
        $conect= $this->db->prepare("SELECT usuario_id, senha FROM usuario WHERE email = ?");
        $conect->bind_param("s", $email);
        $conect->execute();
        $conect->bind_result($id, $senhaHash);

        // Verifica se conseguiu resultados
        if($conect->fetch()){
            // Desfaz o hash, verificando se a senha esta correta
            if(password_verify($senha, $senhaHash)){
                $conect->close();
                // Retorna ID caso esteja tudo certo
                return $id;
            }
        }
        // Caso nao consiga, retorna nulo
        $conect->close();
        return null;
    }

}

?>