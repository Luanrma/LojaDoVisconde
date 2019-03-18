<?php include_once '../_include/header.php' ?>
<?php include_once '../_include/menu.php' ?>
<!-- INÍCIO FORMULÁRIO -->
<section id="formulario" class="about-section text-center">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="titulo display-4 text-dark">Cadastrar</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form action="create.php" method="post">

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-lg-12 mb-2">
                                <label for="inputEmail">Seu e-mail</label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="nome@exemplo.com">
                            </div>
                        </div>
                        <div class="form-row text-dark">
                            <div class="col-sm-6">
                                <label for="inputLogin">Login</label>
                                <input type="text" class="form-control" name="inputLogin" id="inputLogin" placeholder="Nome">
                            </div>

                            <div class="col-sm-6">
                                <label for="inputSenha">Senha</label>
                                <input type="password" class="form-control" name="inputSenha" id="inputSenha" placeholder="*******">
                            </div>
                        </div>
                    </div>

                    <div class="form-row text-dark">
                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">Desejo receber novidades por e-mail
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a tabindex="0" class="btn btn-secondary ml-2" role="button">Esqueci minha senha</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once '../_include/footer.php' ?>
