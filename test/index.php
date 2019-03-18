<?php include_once '_include/header.php' ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Produtos</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Cadastro
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="view/cadastroPessoa.php">Cadastro</a>
					<a class="dropdown-item" href="view/cadastroProduto.php">Produto</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view/login.php">Login</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/img/palio.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/img/24751_1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/img/24751_1.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<hr>

<div class="container">
	<div class="row align-items-center">
		<div id="produtos1">
			<h1>PRODUTOS 1</h1>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<table class="striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>senha</th>
						</tr>
					</thead>
					<tbody>
						<?php
                    		include_once 'controller/read.php';
                		?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<table class="striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>senha</th>
						</tr>
					</thead>
					<tbody>
						<?php
                    		include_once 'controller/read.php';
                		?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<table class="striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>senha</th>
						</tr>
					</thead>
					<tbody>
						<?php
                    		include_once 'controller/read.php';
                		?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row align-items-center">
		<div id="produtos2" class="col-sm-12">
			<h1>PRODUTOS 2</h1>
		</div>
	</div>
	<div class="row align-items-center">
		<div id="produtos3" class="col-sm-12">
			<h1>PRODUTOS 3</h1>
		</div>
	</div>
</div>

<?php include_once '_include/footer.php' ?>
