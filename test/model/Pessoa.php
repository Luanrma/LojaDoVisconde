<?php
	class Pessoa {
		private $nome;
		private $razaoSocial;
		private $nascimento;
		private $telefone;
		private $email;
		private $senha;
		
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

		
		public function cadastrarPessoa($nome, $email, $senha, $nascimento, $razaoSocial) {

			include_once 'conexao.php';
			
			// INSERT na tabela de cliente
			
			$stmt = $conn->prepare("INSERT INTO pessoa (nomePessoa, email, senha, nascimento, razaoSocial) VALUES(:LOGIN, :MAIL, :PASSWORD, :NASC, :RSOC)");
			
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
		}
		
		public function alterarCadastro($nome, $email, $senha, $rua){

			include_once 'conexao.php';

			$stmt = $conn->prepare("INSERT INTO cliente (nome, email, senha) VALUES(:LOGIN, :MAIL, :PASSWORD)");
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setSenha($senha);
			
			$stmt->bindParam(":LOGIN", $this->getnome());
			$stmt->bindParam(":MAIL", $this->getEmail());
			$stmt->bindParam(":PASSWORD", $this->getSenha());
			$stmt->execute();	
			
			$stmt1 = $conn->prepare("INSERT INTO endereco (rua) VALUES(:RUA)");				
			$this->setNomeRua($rua);
			$stmt->bindParam(":RUA", $this->getNomeRua());
			$stmt->execute();
		}
		
		public function atualizarCadastro(){
			require_once 'conexao.php';

			$stmt = $conn->prepare("SELECT * FROM pessoa");

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

			$stmt = $conn->prepare("SELECT * FROM pessoa WHERE email = :MAIL and senha = :PASSWORD", array(
							":MAIL"=>$email,
							":PASSWORD"=>$senha
						));
			
			$this->setEmail($email);
			$this->setSenha($senha);

			$stmt->bindParam(":MAIL", $this->getEmail());
			$stmt->bindParam(":PASSWORD", $this->getSenha());

			$stmt->execute();
			
			$row = $stmt->rowCount();
			
			if($row != 0) {
				
				session_start();
				
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$nome = $row["nomePessoa"];
				}
				
				$_SESSION['nomePessoa'] = $nome;
				header('Location:../index.php');
				exit();	
				
			} else if($email == 'adm' and $senha == 123456) {
				$_SESSION['login'] = "<p class='center green-text'>".'Bem vindo '. $_SESSION['nomePessoa'].'!'."</p>";
				header('Location:../index.php');
				exit();

			} else {
				$_SESSION['msgLogin'] = "<p class='center red-text'>".'Login ou Senha incorreto!'."</p>";
				header('Location:../view/login.php');
				exit();
			}
		}
	}
?>
