<?php

	class Endereco {
		
		private $estado;
		private $cidade;
		private $bairro;
		private $nomeRua;
		private $numResidencia;
		private $cep;
		private $complemento;
		
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
		
		public function cadastrarEndereco($estado, $cidade, $bairro, 
									 $rua, $numResidencia, $cep, $complemento){
			
			include_once 'conexao.php';
			
			// INSERT na tabela de endereço
			
			$stmt = $conn->prepare("INSERT INTO endereco (estado, cidade, bairro, rua, numero, cep, complemento,) VALUES(:ESTADO, :CIDADE, :BAIRRO, :RUA, :NUM, :CEP, :COMP)");
			
			$this->setEstado($estado);
			$this->setCidade($cidade);
			$this->setBairro($bairro);
			$this->setNomeRua($rua);
			$this->setNumResidencia($numResidencia);
			$this->setCep($cep);
			$this->setComplemento($complemento);
			
			$stmt->bindParam(":ESTADO", $this->getEstado());
			$stmt->bindParam(":CIDADE", $this->getCidade());
			$stmt->bindParam(":BAIRRO", $this->getBairro());
			$stmt->bindParam(":RUA", $this->getNomeRua());
			$stmt->bindParam(":NUM", $this->getNumResidencia());
			$stmt->bindParam(":CEP", $this->getCep());
			$stmt->bindParam(":COMP", $this->getComplemento());
			
			$stmt->execute();
		}
	}

?>