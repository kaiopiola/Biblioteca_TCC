<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@700&display=swap" rel="stylesheet">
	<title>Início - <?php echo $sitename; ?></title>
</head>

<style>
	.logo {
		font-family: 'Goldman', cursive;
		border-bottom: 5px solid blue;
	}
</style>

<body>
	<div class="jumbotron">
		<div class="card-body">
			<h3>Seja bem-vindo(a) à Biblioteca de Trabalhos Acadêmicos da ETEVAV!</h3>
			<span>É necessário estar logado em sua conta para poder acessar todo o conteúdo do site. <a href="login.php">Entre agora!</a></span>
		</div>
	</div>



	<br /><br /><br /><br />

	<a href="pesquisa">Pesquisas</a>
	<a href="inserir">inserir</a>


	<!--<h1><span class="logo">< kpsoft /></span></h1>-->


</body>

</html>