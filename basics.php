<?php
session_start();
include 'lib/user.php';
include 'lib/db.php';
include_once 'lib/functions.php';

$sitename = 'Biblioteca de Trabalhos Acadêmicos ETEVAV';
$actual_link = basename($_SERVER['REQUEST_URI']);

$getUserData = new User();
if (isset($_SESSION['id'])) {
    $user = $getUserData->getUser($db, $_SESSION['id']);
    $user['nome'] = $user['user'];
}


?>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <meta name='viewport' content='width=device-width, initial-scale=0.9, user-scalable=0'>
    <link rel="stylesheet" href="/amz/css/amazing-fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <div class="row">
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="position: fixed; bottom: 0; width:100%; z-index: 999">
            <strong>Aceita uns biscoitos?</strong> Aqui não nos importamos se é biscoito ou bolacha, pegue um! ^-^
            <button type="button" class="close" style="float:right" data-dismiss="alert" aria-label="Close">
                Aceito!
            </button>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>