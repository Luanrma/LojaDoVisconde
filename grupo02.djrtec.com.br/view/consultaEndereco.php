<?php session_start() ?>
<?php include_once "../_include/header.php"; ?>
<?php include_once "../_include/menu.php"; ?>

<div class="container">
    <table class="table table-striped">
        <thead>
        <h5>Endereço</h5>
        <tr>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Complemento</th>
        </tr>
        </thead>
        <tbody>
            <?php
            require_once '../model/Endereco.php';
            $showEndereco = new Endereco();
            echo $showEndereco->mostrarEndereco();
            ?>
        </tbody>
    </table>
    <a href="consultaPessoa.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Consultar Cadastro</a>;
</div>

<?php include_once "../_include/footer.php"; ?>
