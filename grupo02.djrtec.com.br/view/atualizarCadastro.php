<?php session_start() ?>
<?php 
    function __autoload($classe){
        include_once("../model/".$classe.".php");
    }
?>
<?php include_once "../_include/header.php"; ?>
<?php include_once "../_include/menu.php"; ?>

<!-- INÍCIO FORMULÁRIO -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-3">
            <h1 class="titulo display-4 text-dark">Dados Pessoais</h1>
        </div>
    </div>
    <?php
    if (isset($_SESSION['login'])) {
        $id = $_SESSION['idPessoa'];
        $statment = "SELECT *, perfil_usuario.tipoPessoa "
                . "FROM pessoa JOIN perfil_usuario "
                . "ON pessoa.fk_idPerfil = perfil_usuario.idPerfil "
                . "WHERE idPessoa = $id";
        
        $objPessoa = new Pessoa();
        $objPessoa->selectPessoa($statment);
    }
    ?>
    <hr>
    <form action="../controller/updateCliente.php" method="post">
        <div class="form-group text-dark">
            <div class="form-row mb-4">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="inputNomePessoa">Nome</label>
                    <input type="text" class="form-control" id="inputNomePessoa" name="inputNomePessoa" value="<?php echo $objPessoa->getNomePessoa() ?>">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo $objPessoa->getEmail() ?>">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <label for="inputNome">Nascimento</label>
                    <input type="date" class="form-control" id="inputNascimento" name="inputNascimento" value="<?php echo $objPessoa->getNascimento() ?>">
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <label for="inputRazaoSocial">CPF/CNPJ</label>
                    <input type="number_format" class="form-control" id="inputRazaoSocial" name="inputRazaoSocial" value="<?php echo $objPessoa->getRazaoSocial() ?>">
                </div>
            </div>
            <hr>
            <div class="form-row mb-3">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="consultaPessoa.php" class="btn btn-danger" role="button" aria-pressed="true">Voltar</a>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include_once "../_include/footer.php"; ?>
