<?php
session_start();
$id = $_SESSION['idPessoa'];

require_once ('../config.php');
 
    $objCliente = new Cliente();

    $objCliente->setNomePessoa($_POST["inputNomePessoa"]);
    $objCliente->setEmail($_POST["inputEmail"]);
    $objCliente->setNascimento($_POST["inputNascimento"]);
    $objCliente->setRazaoSocial($_POST["inputRazaoSocial"]);
    
    $objCliente->atualizarCadastro($id);
