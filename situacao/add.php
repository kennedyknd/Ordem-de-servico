<?php
include_once('../cabecalho.php');
include_once 'Situacao.php';

$situacao = new Situacao();

if(!empty($_GET['id_situacao'])){
    $situacao->carregarPorId($_GET['id_situacao']);
}
?>

    <head>
        <title>Situação</title>
    </head>

<div>

    <h2>Situação</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_situacao" class="form-control" value="<?php echo $situacao->getIdSituacao();?>">

        <!-- area de campos do form -->
        <hr />
        <div class="row form-group">
            <div class="col-md-6">
                <label for="situacao">Situação</label>
                <input type="text" class="form-control" value="<?php echo $situacao->getSituacao();?>" id="situacao" name="situacao" required>
            </div>

            <div class="col-md-6">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" value="<?php echo $situacao->getDescricao();?>" id="descricao" name="descricao" required>
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