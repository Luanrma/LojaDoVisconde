<?php session_start() ?>
<?php include_once '_include/header.php' ?>
<div class="d-block p-2 bg-dark text-white"> 
    <div class='mr-2 float-right sticky-top'>
        <?php
        if (isset($_SESSION['login'])) {
            echo '<p class="text-success">' . $_SESSION['login'] . '</p>';
        }
        ?>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
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
            <?php
            if ($_SESSION['perfil'] == 2 || $_SESSION['perfil'] == 3) {
                echo ' <li class="nav-item">
                                <a class="nav-link" href="view/cadastroProduto.php">Produtos</a>
                           </li>';
            }
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastro
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="view/cadastroPessoa.php">Cadastro</a>
                    <a class="dropdown-item" href="view/consultaPessoa.php">Consulta</a>
                </div>
            </li>
        </ul>
        <?php
        if (isset($_SESSION['login'])) {
            echo '<a class="btn btn-primary" href="controller/logout.php">Logout</a>';
        } else {
            echo '<a class="btn btn-primary" href="view/login.php" role="button">Login</a>';
        }
        ?>
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
                    <img src="assets/img/palio.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/palio.jpg" class="d-block w-100" alt="...">
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
    <div class="row align-items-start">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>
</div>
<?php include_once '_include/footer.php' ?>
