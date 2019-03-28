<?php session_start()  ?>
<?php include_once '../_include/header.php' ?>
<?php include_once '../_include/menu.php' ?>
<!-- INÍCIO FORMULÁRIO -->
<section id="formularioProduto" class="about-section text-center">

	<div class="container">
		<div class="row">
			<div class="col-12 text-center my-3">
				<h1 class="titulo display-4 text-dark">Cadastro de Produtos</h1>
			</div>
		</div>
		<hr>
		<form action="../controller/createProduto.php" method="post">
			<div class="form-group">
				<div class="form-row mb-4">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="inputNomeProduto">Nome do Produto</label>
						<input type="text" class="form-control" name="inputNomeProduto" id="inputNomeProduto" placeholder="Nome do produto">
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="inputFornecedor">Fornecedor</label>
						<input type="text" class="form-control" name="inputFornecedor" id="inputFornecedor" placeholder="Nome do Fornecedor">
					</div>
				</div>

				<div class="form-row mb-4">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<label for="inputCodProduto">Código do Produto</label>
						<input type="number_format" class="form-control" name="inputCodProduto" id="inputCodProduto" placeholder="Código do Produto">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<label for="inputNcm">NCM</label>
						<input type="number_format" class="form-control" name="inputNcm" id="inputNomeProduto" placeholder="NCM">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<label for="inputEan">Código GTIN/EAN</label>
						<input type="number_format" class="form-control" name="inputCodBarras" id="inputCodBarras" placeholder="Código...">
					</div>
				</div>

				<div class="form-row mb-4">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputMarca">Marca</label>
						<input type="text" class="form-control" name="inputMarca" id="inputMarca" placeholder="Marca">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputPrecoVenda">Preço de Venda</label>
						<input type="number_format" class="form-control" name="inputPrecoVenda" id="inputPrecoVenda" placeholder="Preço">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputPrecoCusto">Preço de Custo</label>
						<input type="number_format" class="form-control" name="inputPrecoCusto" id="inputPrecoCusto" placeholder="Custo">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputSituacao">Situação</label>
						<select id="inputSituacao" name="inputSituacao" class="form-control">
							<option selected>Ativo</option>
							<option>Inativo</option>
						</select>
					</div>
				</div>

				<hr>

				<div class="form-row mb-2">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<label for="inputDescricao">Descrição do Produto</label>
						<textarea class="form-control" type="text" name="inputDescricao" id="inputDescricao" placeholder="Escreva algo..." rows="5"></textarea>
					</div>
				</div>
				<div class="form-row mb-4">
					<div class="col-sm-3 col-md-3 col-lg-3">
						<label for="inputCategoria">Categoria</label>
						<select id="inputCategoria" name="inputCategoria" class="form-control">
							<option selected>Categoria...</option>
							<option>Amortecedor</option>
							<option>Suspensao</option>
							<option>Embreagem</option>
							<option>Freios</option>
							<option>Filtros</option>
							<option>Correias</option>
							<option>Eletrica</option>
							<option>Direcao</option>
							<option>Injecao</option>
							<option>Cabos</option>
							<option>Motor</option>
							<option>Radiador</option>
						</select>
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

<?php include_once '../_include/footer.php' ?>
