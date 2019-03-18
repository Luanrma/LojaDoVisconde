<?php include_once "../_include/header.php"; ?>
<?php include_once "../_include/menu.php"; ?>

<!-- INÍCIO FORMULÁRIO -->
<section id="formularioCliente" class="about-section">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center my-3">
				<h1 class="titulo display-4 text-dark">Dados Pessoais</h1>
			</div>
		</div>
		<hr>
		<form action="../controller/create.php" method="post">
			<div class="form-group text-dark">
				<div class="form-row mb-4">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="inputNome">Nome</label>
						<input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome">
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="inputEmail">E-mail</label>
						<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="nome@exemplo.com">
					</div>
				</div>
				<div class="form-row mb-4">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputSenha">Senha</label>
						<input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="******">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputVerificaSenha">Repita sua senha</label>
						<input type="password" class="form-control" id="inputVerificaSenha" name="inputVerificaSenha" placeholder="******">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputNome">Nascimento</label>
						<input type="date" class="form-control" id="inputNascimento" name="inputNascimento" placeholder="">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputRazaoSocial">CPF/CNPJ</label>
						<input type="number_format" class="form-control" id="inputRazaoSocial" name="inputRazaoSocial" placeholder="CPF/CNPJ">
					</div>
				</div>

				<div class="row">
					<div class="col-12 text-center my-3">
						<h1 class="titulo display-4 text-dark">Endereço</h1>
					</div>
				</div>
				<hr>
				<div class="form-row mb-4">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for="inputEstado">Estado</label>
						<select id="inputEstado" name="inputEstado" class="form-control">
							<option selected>SP</option>
							<option>PR</option>
							<option>SC</option>
							<option>RS</option>
						</select>
					</div>
					<div class="col-sm-5 col-md-5 col-lg-5">
						<label for="inputCidade">Cidade</label>
						<input type="text" class="form-control" id="inputCidade" name="inputCidade" placeholder="Cidade">
					</div>
					<div class="col-sm-5 col-md-5 col-lg-5">
						<label for="inputBairro">Bairro</label>
						<input type="text" class="form-control" id="inputBairro" name="inputBairro" placeholder="Bairro">
					</div>
				</div>
				<div class="form-row mb-4">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="inputRua">Rua</label>
						<input type="text" class="form-control" id="inputRua" name="inputRua" placeholder="Nome da rua">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for="inputNumResidencia">Rua</label>
						<input type="text" class="form-control" id="inputNumResidencia" name="inputNumResidencia" placeholder="Núemro da residência">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<label for="inputCep">CEP</label>
						<input type="number_format" id="inputCep" name="inputCep" class="form-control">
					</div>
				</div>
				
				<div class="form-row mb-2">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<label for="inputComplemento">Complemento</label>
						<textarea class="form-control" type="text" name="inputComplemento" id="inputComplemento" placeholder="Escreva algo..." rows="5"></textarea>
					</div>
				</div>
				<hr>
				<div class="form-row mb-3">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
						<a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Vamos lá!">Ajuda</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include_once "../_include/footer.php"; ?>
