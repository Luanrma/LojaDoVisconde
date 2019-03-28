<?php session_start() ?>
<?php include_once "../_include/header.php"; ?>
<?php include_once "../_include/menu.php"; ?>

<div class="container">
    <table class="table table-striped">
        <thead>
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
            require_once '../model/Pessoa.php';
            $mostrar = new Pessoa();
            echo $mostrar->mostrarCadastro();
            ?>
        </tbody>
    </table>
    <?php
    if (isset($_SESSION['login'])) {
        echo '<a href="consultaEndereco.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Consultar Endereço</a>';
    }
    ?>
</div>

<?php include_once "../_include/footer.php"; ?>