<?php
require_once ('../config.php');

$objPessoa = new Pessoa();

$objPessoa->setEmail($_POST["inputEmail"]);
$objPessoa->setSenha($_POST["inputSenha"]);

$objPessoa->efetuarLogin();
