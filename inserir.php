<?php
include 'navbar.php';

$array = [];

array_push($array, 'Kaio Maurilio Cabral Piola - 1140781823008 - GTI');
array_push($array, 'Jacob Abrahão de Holanda Lima - 1140781823001 - GTI');
array_push($array, 'Igor Oliveira Reame - 1140781913051 - LOG');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inserir - <?php echo $sitename; ?></title>
</head>

<script>
    $(function() {
        $('#chkfilter').on('keyup', function() {
            var query = this.value;
            query = query.toLowerCase();

            $('[id^="chk"]').each(function(i, elem) {
                if (elem.value.indexOf(query) != -1) {
                    $(this).closest('label').removeClass("esconde")
                } else {
                    $(this).closest('label').addClass("esconde");
                }
            });
        });
    });
</script>

<style>
    input {
        display: inline;
    }

    .esconde {
        display: none;
        position: absolute;
    }

    label {
        width: 100%;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <form style="width: 100%;" action="teste_inserir.php" method="POST" >
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Autor(es)</label>
                    <div class="col-sm-10">
                        <!-- -->
                        <input type="text" class="col-sm-12 form-control" id="chkfilter" placeholder="Digite aqui para pesquisar...">
                    </div>
                    <div class="row" style="display: flex; height: 100px; overflow: auto; padding-left:10px; margin-left:10px; margin-top:20px;">
                        <div class="col md-8">
                            <?php
                            foreach ($array as $i) {
                                echo '<label class="form-check-label"><input class="form-check-input" type="checkbox" name="chk[]" id="chk6" value="', strtolower($i), '"> ', $i, '</label>';
                            }
                            ?>
                        </div>
                        <!-- -->
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="desc" placeholder="Descrição do trabalho..." name="descricao"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Data de Publicação/Apresentação</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control datepicker" id="data" name="data">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Arquivo PDF</label>
                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Enviar</span>
                            </div>
                            <div class="custom-file col-sm-12">
                                <input type="file" accept="application/pdf" class="custom-file-input" id="inputGroupFile01" name="arquivo">
                                <label class="custom-file-label" for="inputGroupFile01">Escolha um arquivo</label>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-etevav">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>