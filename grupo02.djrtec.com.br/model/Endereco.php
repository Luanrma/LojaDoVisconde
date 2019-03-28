<?php

class Endereco {

    private $estado;
    private $cidade;
    private $bairro;
    private $nomeRua;
    private $numResidencia;
    private $cep;
    private $complemento;
    private $idPessoa;
    
    public  function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getNomeRua() {
        return $this->nomeRua;
    }
    public function setNomeRua($nomeRua) {
        $this->nomeRua = $nomeRua;
    }

    public function getNumResidencia() {
        return $this->numResidencia;
    }
    public function setNumResidencia($numResidencia) {
        $this->numResidencia = $numResidencia;
    }

    public function getCep() {
        return $this->cep;
    }
    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getComplemento() {
        return $this->complemento;
    }
    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
    
    public function getIdPessoa(){
        return $this->idPessoa;
    }
    public function setIdPessoa($idPessoa){
        $this->idPessoa = $idPessoa;
    }
    
    public function cadastrarEndereco() {

        include_once 'conexao.php';

        $stmt = $conn->prepare("INSERT INTO endereco (estado, cidade, bairro, rua, numero, cep, complemento, fk_idPessoa) "
                . "VALUES(:estado, :cidade, :bairro, :rua, :numero, :cep, :complemento, :fk_idPessoa)");
         
        $stmt->bindParam(":estado", $this->getEstado());
        $stmt->bindParam(":cidade", $this->getCidade());
        $stmt->bindParam(":bairro", $this->getBairro());
        $stmt->bindParam(":rua", $this->getNomeRua());
        $stmt->bindParam(":numero", $this->getNumResidencia());
        $stmt->bindParam(":cep", $this->getCep());
        $stmt->bindParam(":complemento", $this->getComplemento());
        $stmt->bindParam(":fk_idPessoa", $this->getIdPessoa());
        
        $stmt->execute();
        
        header('Location:../view/cadastroEndereco.php');
        exit();
    }
    
    public function mostrarEndereco() {
        
        include_once 'conexao.php';
        $id = $_SESSION['idPessoa'];
        $stmt = $conn->prepare("SELECT * FROM endereco WHERE fk_idPessoa = $id");
        $stmt->execute();

        if ($stmt->rowCount() != 0) {
            while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                $this->setEstado($registros['estado']);
                $this->setCidade($registros['cidade']);
                $this->setBairro($registros['bairro']);
                $this->setNomeRua($registros['rua']);
                $this->setNumResidencia($registros['numero']);
                $this->setCep($registros['cep']);
                $this->setComplemento($registros['complemento']);
                $this->setIdPessoa($registros['fk_idPessoa']);

                echo "<tr>";
                echo "<td>". $this->getEstado() ."</td><td>". $this->getCidade() ."</td>";
                echo "<td>". $this->getBairro() ."</td><td>". $this->getNomeRua() ."</td>";
                echo "<td>". $this->getNumResidencia() ."</td><td>". $this->getComplemento() ."</td>";
                echo "</tr>";
            }
        }
    }
}
?>