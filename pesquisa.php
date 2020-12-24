<?php
include 'navbar.php';

if (isset($_REQUEST['pesquisar'])) {
    $pesquisa = Busca('trabalhos', 'titulo', $_REQUEST['pesquisar']);
    $titulo = $_REQUEST['pesquisar'];
}else{
    $titulo = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscando <?php echo $titulo; ?> - <?php echo $sitename; ?></title>
</head>

<style>
    .resultado {
        width: 70vw;
        margin: auto;
    }

    @media only screen and (max-width: 992px) {
        .resultado {
            width: 100%;
            margin: auto;
        }
    }
</style>

<body>
<?php foreach($pesquisa as $item) { ?>
    <div style="width:100%;">
        <div class="jumbotron">
            <div class="card-body">
                <h5 class="card-title"><?php echo $item['titulo']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Jacob de Abrahão Holanda Lima, Igor Oliveira Reame</h6>
                <p class="card-subtitle mb-2 text-muted">Data de publicação: <?php echo date("d/m/Y", strtotime($item['data_publicacao'])); ?></p>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#col<?php echo $item['id']; ?>" aria-expanded="false" aria-controls="col<?php echo $item['id']; ?>">
                        Exibir descrição
                    </button>
                </p>
                <div class="collapse" id="col<?php echo $item['id']; ?>">
                    <div class="card card-body">
                        <p class="card-text"><?php echo $item['descricao']; ?></p>
                    </div>
                </div>

                <a href="pdfembed.php" class="card-link">Abrir documento</a>
                <a href="arquivos/<?php echo $item['id']; ?>.pdf" class="card-link">Download</a>
            </div>
        </div>
    </div>
<?php } ?>

</body>

</html>