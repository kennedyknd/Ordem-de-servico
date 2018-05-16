<?php
include_once('../cabecalho.php');
?>

    <head>
        <title>Novo Serviço</title>
    </head>

<div class="container">

    <h2>Novo Serviço</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-6">
                <label for="servico">Serviço</label>
                <input type="text" class="form-control" id="servico" name="servico" required>
            </div>

            <div class="form-group col-md-6">
                <label for="observacao">Observação</label>
                <input type="text" class="form-control" id="observacao" name="observacao" required>
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>
</div>

<?php
include_once('../rodape.php');
?>