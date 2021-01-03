<?php
include 'include/header.php';

if (isset($_POST['email'])) {
    $getUserData = new User();
    $dados = $getUserData->Login($db, $_POST['email'], $_POST['senha']);

    echo @$dados['user']['nome'];
    echo '<br>';
    echo password_hash($_POST['senha'], PASSWORD_BCRYPT);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fa/css/all.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Entrar - <?php echo $sitename; ?></title>
</head>

<body>
    <div class="container centralizar">
        <div class="row">
            <h1 class="titulo-linha"><span class="titulo-texto">Login</span></h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="https://precoltec.com.br/wp-content/uploads/2018/06/etevav_0.jpg" style="pointer-events: none;" alt="Logotipo ETEVAV">
            </div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Login</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <small id="emailHelp" class="form-text text-muted">Suas informações estão seguras conosco ;)</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                    </div>
                    <button type="submit" class="btn btn-etevav">Entrar</button>
                    <a href="./" class="btn btn-etevav text-light">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>