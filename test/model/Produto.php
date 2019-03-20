<?php
	class Produto {
		
		private $nomeProduto;
		private $fornecedor;
		private $codProduto;
		private $ncm;
		private $ean;
		private $marca;
		private $precoVenda;
		private $precoCusto;
		private $situacao;
		private $descricao;
		private $categoria;
		private $urlImgPequena;
		private $urlImgGrande;
		
		public function getNomeProduto(){
			return $this->nomeProduto;
		}
		public function setNomeProduto($nomeProduto){
			$this->nomeProduto = $nomeProduto;
		}
		public function getFornecedor(){
			return $this->fornecedor;
		}
		public function setFornecedor($fornecedor){
			$this->fornecedor = $fornecedor;
		}
		public function getCodProduto(){
			return $this->codProduto;
		}
		public function setCodProduto($codProduto){
			$this->codProduto = $codProduto;
		}
		public function getNcm(){
			return $this->ncm;
		}
		public function setNcm($ncm){
			$this->ncm = $ncm;
		}
		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}
		public function getPrecoVenda(){
			return $this->precoVenda;
		}
		public function setPrecoVenda($precoVenda){
			$this->precoVenda = $precoVenda;
		}
		public function getPrecoCusto(){
			return $this->precoCusto;
		} 
		public function setPrecoCusto($precoCusto){
			$this->precoCusto = $precoCusto;
		}
		public function getSituacao(){
			return $this->situacao;
		}
		public function setSituacao($situacao){
			$this->situacao = $situacao;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		public function getUrlImgPequena(){
			return $this->urlImgPequena;
		}
		public function setUrlImgPequena($urlImgPequena){
			$this->urlImgPequena = $urlImgPequena;
		}
		public function getUrlImgGrande(){
			return $this->urlImgGrande;
		}
		public function setUrlImgGrande($urlImgGrande){
			$this->urlImgGrande = $urlImgGrande;
		}
		
		public function mostrarImagem(){
			require_once 'conexao.php';

			$stmt = $conn->prepare("SELECT * FROM produto WHERE idProduto = 1");

			$stmt->execute();
			
			while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)):
				$imgPequena = $registros['imgPequena'];
				echo "<tr>";
				echo "<td>"."<img src=".$imgPequena."></td>";
				echo "</tr>";

			endwhile;
		}
		
		public function cadastrarProduto($nomeProduto, $fornecedor, $codProduto, $ncm, $codEan, $marca, $precoVenda, $precoCusto, $situacao, $descricao, $categoria){
			
			include_once 'conexao.php';

			$stmt = $conn->prepare("INSERT INTO produto (nomeProduto, fornecedor, codigoProduto, ncm, ean, marca, precoVenda, precoCusto, situacao, descricao, categoria) VALUES(:NPROD, :FORN, :CPROD, :NCM, :EAN, :MARC, :PVEN, :PCUST, :SITU, :DESC, :CAT)");
			
			$this->setNomeProduto($nomeProduto);
			$this->setFornecedor($fornecedor);
			$this->setCodProduto($codProduto);
			$this->setNcm($ncm);
			$this->setCodEan($codEan);
			$this->setMarca($marca);
			$this->setPrecoVenda($precoVenda);
			$this->setPrecoCusto($precoCusto);
			$this->setSituacao($situacao);
			$this->setDescricao($descricao);
			$this->setCategoria($categoria);
			
			$stmt->bindParam(":NPROD", $this->getNomeProduto());
			$stmt->bindParam(":FORN", $this->getFornecedor());
			$stmt->bindParam(":CPROD", $this->getCodProduto());
			$stmt->bindParam(":NCM", $this->getNcm());
			$stmt->bindParam(":EAN", $this->getEan());
			$stmt->bindParam(":MARC", $this->getMarca());
			$stmt->bindParam(":PVEN", $this->getPrecoVenda());
			$stmt->bindParam(":PCUST", $this->getPrecoCusto());
			$stmt->bindParam(":SITU", $this->getSituacao());
			$stmt->bindParam(":DESC", $this->getDescricao());
			$stmt->bindParam(":CAT", $this->getCategoria());
			
			$stmt->execute();
		}
	}