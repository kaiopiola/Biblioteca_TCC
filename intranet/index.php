<?php
include '../include/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
</head>

<style>
    .borda-intranet {
        box-shadow: 10px 5px 5px black;
        border: 1px solid black;
        border-radius: 10px;
    }

    .btn {
        margin-right: 10px;
    }
</style>

<body>
    <div class="container" style="margin-top: 5rem;">
        <div class="row borda-intranet">
            <div class="col-md-12 d-flex" style="margin-top: 10px; margin-bottom: 10px;">
                <a href="?" class="btn btn-etevav">Início</a>
                <div class="dropdown">
                    <button class="btn btn-etevav dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $user['nome']; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Configurações</a>
                        <a class="dropdown-item" href="#">Alterar senha</a>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </div>
                <a href="?page=trabalhos" class="btn btn-etevav">Trabalhos</a>
                <a href="#" class="btn btn-etevav">Cursos</a>
                <a href="#" class="btn btn-etevav">Alunos</a>

            </div>

            <?php if (isset($_GET['page'])) { include $_GET['page'] . '.php'; } else { ?>
                <div class="col-md-12 d-flex justify-content-center">
                    <img class="img-fluid" src="https://precoltec.com.br/wp-content/uploads/2018/06/etevav_0.jpg" style="pointer-events: none; max-width:200px" alt="Logotipo ETEVAV">
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h1>Intranet</h1>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
include '../include/footer.php';
?>