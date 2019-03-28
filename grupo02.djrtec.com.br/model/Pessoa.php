<?php

class Pessoa {
    
    private $idPessoa;
    private $tipoPessoa;
    private $nomePessoa;
    private $razaoSocial;
    private $nascimento;
    private $telefone;
    private $email;
    private $senha;
    
    public function getTipoPessoa() {
        return $this->tipoPessoa;
    }
    
    public function setTipoPessoa($tipoPessoa) {
        $this->tipoPessoa = $tipoPessoa;
    }
    
    public function getIdPessoa() {
        return $this->idPessoa;
    }
    
    public function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }
    
    public function getNomePessoa() {
        return $this->nomePessoa;
    }

    public function setNomePessoa($nomePessoa) {
        $this->nomePessoa = $nomePessoa;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = md5($senha);
    }

    public function cadastrarPessoa() {

        include_once 'conexao.php';

        $stmt = $conn->prepare("INSERT INTO pessoa (fk_idPerfil, nomePessoa, email, senha, nascimento, razaoSocial) "
                . "VALUES(1, :nome, :email, :senha, :nascimento, :razaoSocial)");

        $stmt->bindParam(":nome", $this->getNomePessoa());
        $stmt->bindParam(":email", $this->getEmail());
        $stmt->bindParam(":senha", $this->getSenha());
        $stmt->bindParam(":nascimento", $this->getNascimento());
        $stmt->bindParam(":razaoSocial", $this->getRazaoSocial());

        $stmt->execute();

        header('Location:../view/login.php');
        exit();
    }

    public function mostrarCadastro() {

        include_once 'conexao.php';
        $id = $_SESSION['idPessoa'];
        $stmt = $conn->prepare("SELECT *, perfil_usuario.tipoPessoa "
                . "FROM pessoa JOIN perfil_usuario "
                . "ON pessoa.fk_idPerfil = perfil_usuario.idPerfil "
                . "WHERE idPessoa = $id");
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
            while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                $this->setIdPessoa($registros['idPessoa']);
                $this->setTipoPessoa($registros['tipoPessoa']);
                $this->setNomePessoa($registros['nomePessoa']);
                $this->setEmail($registros['email']);
                $this->setRazaoSocial($registros['razaoSocial']);
                $this->setNascimento($registros['nascimento']);

                echo "<tr>";
                echo "<td>". $this->getIdPessoa() ."</td><td>". $this->getTipoPessoa() ."</td>";
                echo "<td>". $this->getNomePessoa() ."</td><td>". $this->getEmail() ."</td>";
                echo "<td>". $this->getRazaoSocial() ."</td><td>". $this->getNascimento() ."</td>";
                echo "</tr>";
            }
        }
    }

    public function atualizarCadastro() {
        
    }

    public function efetuarLogin() {
        session_start();
        include_once 'conexao.php';

        $stmt = $conn->prepare("SELECT * FROM pessoa WHERE email = :EMAIL and senha = :SENHA");

        $stmt->bindParam(":EMAIL", $this->getEmail());
        $stmt->bindParam(":SENHA", $this->getSenha());
        
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
            while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = $registros['idPessoa'];
                $nome = $registros["nomePessoa"];
                $tipo = $registros["fk_idPerfil"];
            }
            $_SESSION['login'] = 'Bem vindo ' . $nome . '!';
            $_SESSION['idPessoa'] = $id;
            $_SESSION['tipo'] = $tipo;
            header('Location:../index.php');
            exit();
        } else {
            $_SESSION['falhaLogin'] = 'Login ou Senha inválida!';
            header('Location:../view/login.php');
            exit();
        }
    }
}
?>
