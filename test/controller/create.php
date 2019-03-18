<?php
include_once '../model/Pessoa.php';
		$nome          = $_POST["inputNome"];
		$email         = $_POST["inputEmail"];
		$senha         = $_POST["inputSenha"];
		$verificaSenha = $_POST["inputVerificaSenha"];
		$nascimento    = $_POST["inputNascimento"];
		$razaoSocial   = $_POST["inputRazaoSocial"];
		$estado        = $_POST["inputEstado"];
		$cidade        = $_POST["inputCidade"];
		$bairro        = $_POST["inputBairro"];
		$rua           = $_POST["inputRua"];
		$numResidencia = $_POST["inputNumResidencia"];
		$cep           = $_POST["inputCep"];
		$complemento   = $_POST["inputComplemento"];

		if($nome === NULL || $nome ===""){
			echo "Nome não inserido!";
		} else if($email === NULL || $email === ""){
			echo "Email não inserido!";
		} else if($senha === NULL || $senha === ""){
			echo "Senha não inserida!";
		} else if($senha != $verificaSenha) {
			echo "Senhas diferentes!";
		} else if($rua === NULL || $rua === ""){
			echo "Nome da rua não inserida!";
		} else {
			$gravar = new Pessoa();
			$gravar->efetuarCadastro($nome, $email, $senha, $nascimento, 
									 $razaoSocial, $estado, $cidade, $bairro, 
									 $rua, $numResidencia, $cep, $complemento);
		}