<?php
	include_once '../model/Produto.php';
	$estado        = $_POST["inputEstado"];
	$cidade        = $_POST["inputCidade"];
	$bairro        = $_POST["inputBairro"];
	$rua           = $_POST["inputRua"];
	$numResidencia = $_POST["inputNumResidencia"];
	$cep           = $_POST["inputCep"];
	$complemento   = $_POST["inputComplemento"];
	
	$gravar = new Endereco()();
	$gravar->cadastrarPessoa($estado, $cidade, $bairro, $rua, $numResidencia, $cep, $complemento);
?>