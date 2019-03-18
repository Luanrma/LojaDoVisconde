<?php
	class Produto {
		private $urlImgPequena;
		
		public function getUrlImgPequena(){
			return $this->urlImgPequena;
		}
		public function setUrlImgPequena($urlImgPequena){
			$this->urlImgPequena = $urlImgPequena;
		}
		
		public function mostrarImagem(){
			require_once 'conexao.php';

			$stmt = $conn->prepare("SELECT * FROM produtos WHERE idProduto = 1");

			$stmt->execute();
			
			while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)):
				$imgPequena = $registros['imgPequena'];
				echo "<tr>";
				echo "<td>"."<img src=".$imgPequena."></td>";
				echo "</tr>";

			endwhile;
		}
		public function cadastrarProduto(){
			include_once 'conexao.php';

			$conn->beginTransaction();

			$stmt = $conn->prepare("INSERT INTO produtos (nome, email, senha, nascimento, razaoSocial) VALUES(:LOGIN, :MAIL, :PASSWORD, :NASC, :RSOC)");
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
			
			if($rows == 1){
			$conn->commit();
			echo "Inserido com sucesso!";	
			} else {
				$conn->rollBack();
				echo "Falha ao inserir!";
			}
		}
	}