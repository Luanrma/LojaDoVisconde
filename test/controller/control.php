<?php
	include_once '../model/Pessoa.php';
	$email = $_POST["inputEmail"];
	$senha = $_POST["inputSenha"];

	/*if(empty($email) || empty($senha)) {
		$_SESSION['msgLogin'] = "<p class='center red-text'>".'Informe email e senha!'."</p>";
    	header('Location:../view/login.php');
    	exit();
	}*/

	$p1 = new Pessoa();
	$p1->efetuarLogin($email, $senha);
