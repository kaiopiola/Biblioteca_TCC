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
    <title>Inserir</title>
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
    <div style="margin: 20px;">
        <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="titulo" placeholder="Título">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Autor(es)</label>
                <div class="col-sm-10" style="margin-left:-15px">
                    <!-- -->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="chkfilter" placeholder="Digite aqui para pesquisar...">
                            </div>
                        </div>
                        <div class="row" style="display: flex; height: 100px; overflow: auto; padding-left:10px; margin-left:0px">
                            <div class="col md-8">
                                <?php
                                foreach ($array as $i) {
                                    echo '<label class="form-check-label"><input class="form-check-input" type="checkbox" name="chk" id="chk6" value="', strtolower($i), '"> ', $i, '</label>';
                                }
                                ?>
                            </div>
                        </div>
                    </div><!-- -->
                </div>
            </div>


            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="desc" placeholder="Descrição do trabalho..."></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Data de Publicação/Apresentação</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control datepicker" id="data">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Arquivo</label>
                <div class="col-sm-2">
                    <input type="file" accept="application/pdf" id="upload" name="filename">
                </div>
            </div>



            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>