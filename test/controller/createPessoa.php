<?php
session_start();
include_once '../model/Pessoa.php';
		$nome          = $_POST["inputNome"];
		$email         = $_POST["inputEmail"];
		$senha         = $_POST["inputSenha"];
		$verificaSenha = $_POST["inputVerificaSenha"];
		$nascimento    = $_POST["inputNascimento"];
		$razaoSocial   = $_POST["inputRazaoSocial"];
		
		if($nome === NULL || $nome ===""){
			echo "Nome não inserido!";
		} else if($email === NULL || $email === ""){
			echo "Email não inserido!";
		} else if($senha === NULL || $senha === ""){
			echo "Senha não inserida!";
		} else if($senha != $verificaSenha) {
			echo "Senhas diferentes!";
		} else {
			$gravar = new Pessoa();
			$gravar->cadastrarPessoa($nome, $email, $senha, $nascimento, $razaoSocial);
		}
?>