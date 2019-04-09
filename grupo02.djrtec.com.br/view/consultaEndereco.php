<?php session_start() ?>
<?php include_once "../_include/header.php"; ?>
<?php include_once "../_include/menu.php"; ?>

<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <div class="float-right">
            <?php
                if (isset($_SESSION['login'])) {
                    echo '<a href="consultaPessoa.php" class="btn btn-outline-secondary" role="button" aria-pressed="true">Consultar Cadastro</a>';
                }
            ?> 
        </div>
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
            include_once "../controller/cadShow.php";
            echo $objEndereco->mostrarEndereco();
            ?>
        </tbody>
    </table>
    <a href="cadastroEndereco.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Cadastro Endereço</a>
</div>

<?php include_once "../_include/footer.php"; ?>
