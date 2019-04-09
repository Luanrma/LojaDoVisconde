<?php session_start() ?>
<?php include_once "../_include/header.php"; ?>
<?php include_once "../_include/menu.php"; ?>

<div class="container mt-3">
    <table class="table table-striped">
        <thead>
        <div class="float-right">
            <?php
                if (isset($_SESSION['login'])) {
                    echo '<a href="consultaEndereco.php" class="btn btn-outline-secondary" role="button" aria-pressed="true">Consultar Endereço</a>';
                }
            ?>
        </div>
        <h5>Dados Pessoais</h5>
        <tr>
            <th>ID</th>
            <th>Perfil</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Nascimento</th>
        </tr>
        </thead>
        <tbody>
            <?php
                include_once "../controller/cadShow.php";
                if ($_SESSION['perfil'] == 2 || $_SESSION['perfil'] == 3) {
                    echo $objAdm->mostrarCadastro();
                } else {
                    echo $objCliente->mostrarCadastro();
                }
            ?>
        </tbody>
    </table>
</div>

<?php include_once "../_include/footer.php"; ?>