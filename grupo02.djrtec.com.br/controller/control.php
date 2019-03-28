<?php
include_once '../model/Pessoa.php';

$objPessoa = new Pessoa();

$objPessoa->setEmail($_POST["inputEmail"]);
$objPessoa->setSenha($_POST["inputSenha"]);

$objPessoa->efetuarLogin();
