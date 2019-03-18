<?php
	include_once 'Sql.php';
	class Pessoa extends Sql{
		private $nome;
		private $razaoSocial;
		private $nascimento;
		private $telefone;
		private $email;
		private $senha;
		private $estado;
		private $cidade;
		private $bairro;
		private $nomeRua;
		private $numResidencia;
		private $cep;
		private $complemento;
		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getRazaoSocial(){
			return $this->razaoSocial;
		}
		public function setRazaoSocial($razaoSocial){
			$this->razaoSocial = $razaoSocial;
		}
		public function getNascimento(){
			return $this->nascimento;
		}
		public function setNascimento($nascimento){
			$this->nascimento = $nascimento;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setSenha($senha){
			$this->senha = md5($senha);
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function setCidade($cidade){
			$this->cidade = $cidade;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function setBairro($bairro){
			$this->bairro = $bairro;
		}
		public function getNomeRua(){
			return $this->nomeRua;
		}
		public function setNomeRua($nomeRua){
			$this->nomeRua = $nomeRua;
		}
		public function getNumResidencia(){
			return $this->numResidencia;
		}
		public function setNumResidencia($numResidencia){
			$this->numResidencia = $numResidencia;
		}
		public function getCep(){
			return $this->cep;
		}
		public function setCep($cep){
			$this->cep = $cep;
		}
		public function getComplemento(){
			return $this->complemento;
		}
		public function setComplemento($complemento){
			$this->complemento = $complemento;
		}
		
		public function efetuarCadastro($nome, $email, $senha, $nascimento, 
									 $razaoSocial, $estado, $cidade, $bairro, 
									 $rua, $numResidencia, $cep, $complemento){

			include_once 'conexao.php';

			$conn->beginTransaction();
			
			// INSERT na tabela de cliente
			
			$stmt = $conn->prepare("INSERT INTO cliente (nome, email, senha, nascimento, razaoSocial) VALUES(:LOGIN, :MAIL, :PASSWORD, :NASC, :RSOC)");
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setSenha($senha);
			$this->setNascimento($nascimento);
			$this->setRazaoSocial($razaoSocial);
			
			$stmt->bindParam(":LOGIN", $this->getnome());
			$stmt->bindParam(":MAIL", $this->getEmail());
			$stmt->bindParam(":PASSWORD", $this->getSenha());
			$stmt->bindParam(":NASC", $this->getNascimento());
			$stmt->bindParam(":RSOC", $this->getRazaoSocial());
			
			$stmt->execute();
			
			$rows = $stmt->rowCount();
			
			// INSERT na tabela de endereço
			
			$stmt = $conn->prepare("INSERT INTO endereco (estado, cidade, bairro, rua, numero, complemento, cep) VALUES(:ESTADO, :CIDADE, :BAIRRO, :RUA, :NUM, :CEP, :COMP)");
			$this->setEstado($estado);
			$this->setCidade($cidade);
			$this->setBairro($bairro);
			$this->setNomeRua($rua);
			$this->setNumResidencia($numResidencia);
			$this->setCep($cep);
			$this->setComplemento($complemento);
			
			$stmt1->bindParam(":ESTADO", $this->getEstado());
			$stmt1->bindParam(":CIDADE", $this->getCidade());
			$stmt1->bindParam(":BAIRRO", $this->getBairro());
			$stmt1->bindParam(":RUA", $this->getNomeRua());
			$stmt1->bindParam(":NUM", $this->getNumResidencia());
			$stmt1->bindParam(":CEP", $this->getCep());
			$stmt1->bindParam(":COMP", $this->getComplemento());
			
			$stmt1->execute();
			
			$rows1 = $stmt->rowCount();
			
			if($rows == 1 && $rows1 == 1){
			$conn->commit();
			echo "Inserido com sucesso!";	
			} else {
				$conn->rollBack();
				echo "Falha ao inserir!";
			}
		}
		public function alterarCadastro($nome, $email, $senha, $rua){

			include_once 'conexao.php';

			$conn->beginTransaction();

			$stmt = $conn->prepare("INSERT INTO cliente (nome, email, senha) VALUES(:LOGIN, :MAIL, :PASSWORD)");
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setSenha($senha);
			
			$stmt->bindParam(":LOGIN", $this->getnome());
			$stmt->bindParam(":MAIL", $this->getEmail());
			$stmt->bindParam(":PASSWORD", $this->getSenha());
			$stmt->execute();	
			$rows = $stmt->rowCount();
			
			$stmt1 = $conn->prepare("INSERT INTO endereco (rua) VALUES(:RUA)");				
			$this->setNomeRua($rua);
			$stmt1->bindParam(":RUA", $this->getNomeRua());
			$stmt1->execute();
			$rows1 = $stmt1->rowCount();
			
			if($rows == 1 && $rows1 == 1){
			$conn->commit();
			echo "Inserido com sucesso!";	
			} else {
				$conn->rollBack();
				echo "Falha ao inserir!";
			}
		}
		
		public function atualizarCadastro(){
			require_once 'conexao.php';

			$stmt = $conn->prepare("SELECT * FROM cliente");

			$stmt->execute();
			
			while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)):
				$id    = $registros['id'];
				$nome  = $registros['nome'];
				$email = $registros['email'];
				$senha = $registros['senha'];
				echo "<tr>";
				echo "<td>$id</td><td>$nome</td><td>$email</td><td>$senha</td>";
				echo "</tr>";

			endwhile;	
		}
		
		public function efetuarLogin($email, $senha){	
			include_once 'conexao.php';  

			$stmt = $conn->prepare("SELECT email, senha FROM cliente VALUES(:MAIL, :PASSWORD)");

			$this->setEmail($email);
			$this->setSenha($senha);

			$stmt->bindParam(":MAIL", $this->getEmail());
			$stmt->bindParam(":PASSWORD", $this->getSenha());

			$stmt->execute();
			
			echo "Inserido com Sucesso!";
			
		}
	}
?>
