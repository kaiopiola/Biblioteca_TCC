<?php
include 'functions/trabalhos.php';

$getTrabalho = new Trabalho();
$trabalhos = $getTrabalho->getTrabalho($db);
echo count($trabalhos['id']);
//$trabalhos = $trabalhos['trabalho'];

?>

<div class="col-md-12">
    <div class="col-md-12">
        <h1>Trabalhos</h1>
    </div>
    <div class="col-md-12">
        <a href="?page=inserir_trabalho" class="btn btn-success">Adicionar trabalho</a>
    </div>

    <div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th style="width: 150px;">Título</th>
                    <th>Curso</th>
                    <th>Orientador</th>
                    <th>Data de Publicação</th>
                    <th>Arquivo</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
            <?php for($i=0; $i < count($trabalhos['id']); $i++) { ?>
                <tr>
                    <td><?php echo $trabalhos['id'][$i]; ?></td>
                    <td><?php echo $trabalhos['titulo'][$i]; ?></td>
                    <td><?php echo $trabalhos['curso'][$i]; ?></td>
                    <td><?php echo $trabalhos['orientador'][$i]; ?></td>
                    <td><?php echo $trabalhos['data_publicacao'][$i]; ?></td>
                    <td><?php echo $trabalhos['arquivo'][$i]; ?></td>
                    <td class="d-flex"><a href="#" class="btn btn-warning">Editar</a><a href="#" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>