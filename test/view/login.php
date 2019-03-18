<?php include_once '../_include/header.php' ?>
<?php include_once '../_include/menu.php' ?>
<div class="container">
	<form action="../controller/control.php" method="post">
		<div class="form-group text-dark">
			<div class="form-row my-4">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label for="inputNome">Nome</label>
					<input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome">
				</div>
			</div>
			<div class="form-row mb-4">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label for="inputSenha">Senha</label>
					<input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="******">
				</div>
			</div>
			<hr>
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
