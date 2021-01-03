<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=0.9, user-scalable=0'>
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }
</style>


<body class="text-dark">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="./">
            <img class="img-fluid" style="max-width: 60px;" id="logo" src="https://etevav.com.br/new1/wp-content/uploads/2016/04/cropped-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login">Entrar</a>
                        <a class="dropdown-item" href="#">Cadastrar</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="time">Sobre</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="pesquisa.php" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" aria-label="Search" name="pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>

</body>

</html>