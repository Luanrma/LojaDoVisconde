<?php
session_start();

 require_once ('../config.php');

    $id = $_SESSION['idPessoa'];
    
    $objAdm = new Administrador();
    $objCliente = new Cliente();
    $objEndereco = new Endereco();
?>