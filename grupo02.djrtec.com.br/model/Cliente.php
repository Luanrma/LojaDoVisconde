<?php
require_once 'Pessoa.php';
class Cliente extends Pessoa {
    
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
                echo "<td>" . $this->getIdPessoa() . "</td><td>" . $this->getTipoPessoa() . "</td>";
                echo "<td>" . $this->getNomePessoa() . "</td><td>" . $this->getEmail() . "</td>";
                echo "<td>" . $this->getRazaoSocial() . "</td><td>" . $this->getNascimento() . "</td>";
                echo "<td><a href='atualizarCadastro.php'><i class='far fa-edit'></i></a></td>";
                echo "<td><a href='atualizarCadastro.php'><i class='far fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
        }
    }
    
    public function atualizarCadastro($id) {
        include_once 'conexao.php';
        $stmt = $conn->prepare("UPDATE pessoa set "
                . "nomePessoa = :NOME, email = :EMAIL, nascimento = :NASCIMENTO, razaoSocial = :CPF "
                . "WHERE idPessoa = $id");
        $stmt->execute(array(
            ':NOME' => $this->getNomePessoa(),
            ':EMAIL' => $this->getEmail(),
            ':NASCIMENTO' => $this->getNascimento(),
            ':CPF' => $this->getRazaoSocial()
        ));

        if ($stmt->rowCount() != 0) {
            header('Location:../view/consultaPessoa.php');
        }
    }
}
