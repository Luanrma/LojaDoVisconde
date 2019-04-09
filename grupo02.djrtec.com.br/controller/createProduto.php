<?php

require_once ('../config.php');

$objProduto = new Produto();
        
$objProduto->setNomeProduto($_POST["inputNomeProduto"]);
$objProduto->setFornecedor($_POST["inputFornecedor"]);
$objProduto->setCodProduto($_POST["inputCodProduto"]);
$objProduto->setNcm($_POST["inputNcm"]);
$objProduto->setEan($_POST["inputEan"]);
$objProduto->setMarca($_POST["inputMarca"]);
$objProduto->setPrecoVenda($_POST["inputPrecoVenda"]);
$objProduto->setPrecoCusto($_POST["inputPrecoCusto"]);
$objProduto->setSituacao($_POST["inputSituacao"]);
$objProduto->setDescricao($_POST["inputDescricao"]);
$objProduto->setCategoria($_POST["inputCategoria"]);

$objProduto->cadastrarProduto();
