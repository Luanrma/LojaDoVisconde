<?php session_start() ?>
<?php include_once '../_include/header.php' ?>
<?php include_once '../_include/menu.php' ?>
<div class="container">
    <form action="../controller/cadShow.php" method="post">
        <div class="form-group text-dark">
            <div class="form-row mb-3">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Logar</button>
                    <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Vamos lá!">Ajuda</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include_once '../_include/footer.php' ?>