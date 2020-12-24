<?php
if (isset($_GET['key']) && password_verify($_GET['key'], '$2y$10$O8pj2wXn4LlMtELYYYVoiuibN5wysvgxWPJjkFLMqkMOj1lIgK22S')) {
    $canplay = true;
    include 'navbar.php';
} else {
    $canplay = false;
    //header('location: /');
}

$code = '404';
$error = '404';
$message = 'Not Found';
$prefixurl = './img/error/';
$suffixurl = '.jpg';
$source_url = 'http' . ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<?php if ($canplay) { ?>
    <!DOCTYPE html>
    <html lang="pt_br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REBDOOMER</title>
    </head>

    <style>
        .navbar {
            background-image: url('/img/blood.jpg') !important;
        }

        .navbar-light {
            color: white !important;
        }
    </style>

    <script>
        document.getElementById('logo').src = '/img/doomguy.gif';
        document.getElementById('navbar').className = 'navbar navbar-expand-lg navbar-dark bg-dark text-light';
    </script>

    <body style="background-image:url(/img/estatica.gif); background-size: cover">
        <div class="container" style="margin-top:100px;">
            <div style="width: 100%; margin:auto;">
                <center>
                    <iframe src="https://archive.org/embed/The_Ultimate_Doom" width="560" height="384" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>
                </center>
            </div>
        </div>
    </body>

    </html>
<?php } else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title><?php echo "$code - $message"; ?></title>
        <!-- Se você chegou até essa mensagem, saiba que está no caminho certo, só falta mais um passo ;) -->
    </head>

    <style>
        .centralizar {
            position: absolute;
            top: 30%;
            left: 41%;
            margin: -100px 0 0 -150px;
        }

        @media only screen and (max-width: 768px) {
            .centralizar {
                position: absolute;
                top: 30%;
                left: 27%;
                margin: -100px 0 0 -150px;
            }
        }
    </style>

    <body style="background-color: black;">
        <div class="container centralizar">
            <img src="<?php echo $prefixurl;
                        echo $error;
                        echo $suffixurl; ?>" alt="">
        </div>
    </body>

    </html>

<?php } ?>