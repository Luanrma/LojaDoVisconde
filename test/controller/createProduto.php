<?php
session_start();
include_once '../model/Produto.php';
		$nomeProduto   = $_POST["inputNomeProduto"];
		$fornecedor    = $_POST["inputFornecedor"];
		$codProduto    = $_POST["inputCodProduto"];
		$ncm           = $_POST["inputNcm"];
		$codEan        = $_POST["inputEan"];
		$marca         = $_POST["inputMarca"];
		$precoVenda    = $_POST["inputPrecoVenda"];
		$precoCusto    = $_POST["inputPrecoCusto"];
		$situacao      = $_POST["inputSituacao"];
		$descricao     = $_POST["inputDescricao"];
		$categoria     = $_POST["inputCategoria"];

			$gravar = new Produto();
			$gravar->cadastrarProduto();
		}