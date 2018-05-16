<?php
include_once('../cabecalho.php');

$servico = new Servico();

$servicos = $servico->recuperarDados();
?>

    <head>
        <title>Editar Serviço</title>
    </head>

<div class="container">

    <h2>Atualizar Serviço</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=editar">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-6">
                <label for="servico">Serviço</label>
                <input type="text" class="form-control" id="servico" name="servico" <?php echo $servico['servico']; ?> required>
            </div>

            <div class="form-group col-md-6">
                <label for="observacao">Observação</label>
                <input type="text" class="form-control" id="observacao" name="observacao" <?php echo $servico['observacao']; ?> required>
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