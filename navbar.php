<?php
include 'basics.php';
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

    @keyframes move_wave {
        0% {
            transform: translateX(0) translateZ(0) scaleY(1)
        }

        50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55)
        }

        100% {
            transform: translateX(-50%) translateZ(0) scaleY(1)
        }
    }

    .waveWrapper {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
    }

    .waveWrapperInner {
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 100%;
        bottom: -1px;
        background-image: linear-gradient(to top, #86377b 20%, #27273c 80%);
    }

    .bgTop {
        z-index: -5;
        opacity: 0.5;
    }

    .bgMiddle {
        z-index: -10;
        opacity: 0.7;
    }

    .bgBottom {
        z-index: -15;
    }

    .wave {
        position: absolute;
        left: 0;
        width: 200%;
        height: 100%;
        background-repeat: repeat no-repeat;
        background-position: 0 bottom;
        transform-origin: center bottom;
    }

    .waveTop {
        background-size: 50% 100px;
    }

    .waveAnimation .waveTop {
        animation: move-wave 3s;
        -webkit-animation: move-wave 3s;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .waveMiddle {
        background-size: 50% 120px;
    }

    .waveAnimation .waveMiddle {
        animation: move_wave 10s linear infinite;
    }

    .waveBottom {
        background-size: 50% 100px;
    }

    .waveAnimation .waveBottom {
        animation: move_wave 15s linear infinite;
    }

    @keyframes rotation {
        from {
            transform: rotate(-20deg);
        }

        to {
            transform: rotate(20deg);
        }
    }

    .rotate {
        animation: rotation 2s infinite alternate;
    }

    .barco {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        bottom: -60vh;
        top: 0;
        margin: auto;
        max-width: 300px;
        z-index: -1;
    }
</style>


<body class="text-dark">

    <!--<div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
        </div>

        <div>
            <img class="rotate barco" src="img/barco.png" alt="">
        </div>

        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
        </div>
    </div>-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./"><img class="img-fluid" style="max-width: 60px;" src="https://etevav.com.br/new1/wp-content/uploads/2016/04/cropped-logo.png" alt=""></a>
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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>