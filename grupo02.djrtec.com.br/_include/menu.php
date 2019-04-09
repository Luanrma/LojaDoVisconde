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
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if ($_SESSION['perfil'] == 2 || $_SESSION['perfil'] == 3) {
                echo '<li class="nav-item">
                                <a class="nav-link" href="cadastroProduto.php">Produtos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarConsulta" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Consultas
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarConsulta">';
                echo '<a class="dropdown-item" href="consultaPessoa.php">Clientes</a>';
                echo '<a class="dropdown-item" href="consultaEndereco.php">Endereço</a>';

                echo '</div>
                            </li>';
            }
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo '<a class="dropdown-item" href="consultaPessoa.php">Consulta</a>';
                    } else {
                        echo '<a class="dropdown-item" href="cadastroPessoa.php">Cadastro</a>';
                    }
                    ?>               
                </div>
            </li>
        </ul>
        <?php
        if (isset($_SESSION['login'])) {
            echo '<a class="btn btn-primary" href="../controller/logout.php">Logout</a>';
        } else {
            echo '<a class="btn btn-primary" href="login.php" role="button">Login</a>';
        }
        ?>
    </div>
</nav>
