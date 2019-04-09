<?php
session_start();

require_once ('../config.php');

$objEndereco = new Endereco();

$objEndereco->setIdPessoa($_POST["inputIdPessoa"]);
$objEndereco->setEstado($_POST["inputEstado"]);
$objEndereco->setCidade($_POST["inputCidade"]);
$objEndereco->setBairro($_POST["inputBairro"]);
$objEndereco->setNomeRua($_POST["inputRua"]);
$objEndereco->setNumResidencia($_POST["inputNumResidencia"]);
$objEndereco->setCep($_POST["inputCep"]);
$objEndereco->setComplemento($_POST["inputComplemento"]);

$objEndereco->cadastrarEndereco();
?>