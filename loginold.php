<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/loading.css">
    <link rel="stylesheet" href="/css/bg.css">
    <script src="/js/pace.js"></script>
    <title>Entrar</title>
</head>

<style>
    .loginform {
        margin-top: 25vmin;
        max-width: 50vmin;
        background-image: linear-gradient(#FF00FF50, #FFFF0050);
        background-image: linear-gradient(#FFFFFF50, #00000050);
        box-shadow: 10px 10px #00000075;

        border-style: round;
        border-radius: 10px;
    }

    .fundo {
        background-image: url(./bg.png);
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media only screen and (max-width: 600px) {
        .loginform {
            margin-top: 30vmin;
            max-width: 80vmin;
        }

        .fundo {
            background-image: url(./bg.png);
            background-repeat: no-repeat;
            background-size: auto;
        }
    }
</style>

<body class="bg-dark text-light">
    <div class="loginform container">
        <form style="padding-top: 20px; padding-bottom: 20px;">
        <h2>Entrar</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome de usuário ou e-mail">
                <small id="emailHelp" class="form-text text-muted-light">Suas informações estão sempre seguras conosco! ;)</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Sua senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha de acesso">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Mantenha-me logado</label>
            </div>
            <button style="width: 100%; margin-top: 5vmin" type="submit" class="btn btn-light">Entrar</button>
        </form>
        
</body>

</html>