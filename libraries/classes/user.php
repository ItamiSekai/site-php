<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $assinatura;
    private $db;

    // Construct 
    public function __construct($db){
        $this->db = $db;
    }

    // Metodos
    public function verificaLogin($email, $senha){
        $senhaHash = '';
        $id = '';
        $tipoAssinatura = '';

        $conect= $this->db->prepare("SELECT id, senha, tipo_assinatura FROM usuario 
        LEFT JOIN assinatura ON usuario.id = assinatura.usuario_id
        WHERE email = ?");
        $conect->bind_param("s", $email);
        $conect->execute();
        $conect->bind_result($id, $senhaHash, $tipoAssinatura);

        // Caso consiga resultado
        if($conect->fetch()){
            if(password_verify($senha, $senhaHash)){
            $conect->close();
            // Armazene o tipo de assinatura na sessão
            $_SESSION['tipo_assinatura'] = $tipoAssinatura;
            return 1;
            }
        }

        return 0;
    }

    public function insereUsuario() {
        $conect= $this->db->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
        $conect->bind_param("ssss", $this->nome, $this->email, $this->senha);
        $conect->execute();
        $this->id = $conect->insert_id;
        $conect->close();
    }

    public function coletaDadosPorId($id) {
        $conect = $this->db->prepare("SELECT id, nome, email FROM usuario WHERE id = ?");
        $conect->bind_param("i", $id);
        $conect->execute();
        $result = $conect->get_result();

        if ($row = $result->fetch_assoc()) {
            $this->id = $row['id'];
            $this->nome = $row['nome'];
            $this->email = $row['email'];
        }
        

        $conect = $this->db->prepare("SELECT tipo_assinatura FROM assinatura WHERE usuario_id = ?");
        $conect->bind_param("i", $id);
        $conect->execute();
        $result = $conect->get_result();

        if ($row = $result->fetch_assoc()) {
            $this->assinatura = $row['tipo_assinatura'];
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
        $conect= $this->db->prepare("SELECT id, senha FROM usuario WHERE email = ?");
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

    public function getName(){
        return $this->nome;
    }
    public function getId(){
        return $this->id;
    }
    public function getAssinatura(){
        return $this->assinatura;
    }
    
}

?>