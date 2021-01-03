<?php
session_start();
include '../lib/user.php';
include '../lib/db.php';
include_once '../lib/functions.php';

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