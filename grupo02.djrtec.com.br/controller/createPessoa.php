<?php

require_once ('../config.php');

$senha = $_POST["inputSenha"];
$verificaSenha = $_POST["inputVerificaSenha"];

if ($senha === $verificaSenha) {
    $objPessoa = new Pessoa();

    $objPessoa->setNomePessoa($_POST["inputNomePessoa"]);
    $objPessoa->setEmail($_POST["inputEmail"]);
    $objPessoa->setSenha($_POST["inputSenha"]);
    $objPessoa->setNascimento($_POST["inputNascimento"]);
    $objPessoa->setRazaoSocial($_POST["inputRazaoSocial"]);
    
    $objPessoa->cadastrarPessoa();
} else {
    header('Location:../view/cadastroPessoa.php');
}