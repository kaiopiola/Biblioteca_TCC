<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="./js/pdfobject.js"></script>
    <script>
        PDFObject.embed("./itil.pdf", "#example1");
    </script>
    <title>Título do Documento - TCC</title>
</head>

<style>
    .pdfobject-container {
        height: 30rem;
        border: 1rem solid rgba(0, 0, 0, .1);
    }
</style>

<body>
    <div class="title">
        <h1>Título do Documento</h1>
        <h6 class="card-subtitle mb-2 text-muted"><b>Autores: </b>Jacob de Abrahão Holanda Lima, Igor Oliveira Reame</h6>
    </div>
    <div style="height:90vmin">
        <object data="pdf/itil.pdf" type="application/pdf" width="100%" height="100%">
            <p>Seu navegador não suporta exibir PDF :c <br> <b> <a href="pdf/itil.pdf">Clique aqui para baixá-lo!</a></b></p>
        </object>
    </div>
</body>

</html>