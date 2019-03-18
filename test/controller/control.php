<?php
include_once '../model/Pessoa.php';
$nome     = isset(filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS));
$senha    = isset(filter_input(INPUT_POST, 'inputSenha', FILTER_SANITIZE_SPECIAL_CHARS));

$p1 = new Pessoa();
$p1->alterarCadastro($nome, $email, $senha, $rua);