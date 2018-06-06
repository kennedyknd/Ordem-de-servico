<?php
include_once('../cabecalho.php');
include_once 'MetodoPagamento.php';

$metodoPagamento = new MetodoPagamento();

if(!empty($_GET['id_metodoPagamento'])){
    $metodoPagamento->carregarPorId($_GET['id_metodoPagamento']);
}
?>

    <head>
        <title>Novo Método de Pagamento</title>
    </head>

<div class="container">

    <h2>Novo Método de Pagamento</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_metodoPagamento" class="form-control" value="<?php echo $metodoPagamento->getIdMetodoPagamento();?>">

        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-6">
                <label for="tipo">Forma de Pagamento</label>
                <input type="text" class="form-control" value="<?php echo $metodoPagamento->getTipo();?>" id="tipo" name="tipo" required>
            </div>

            <div class="form-group col-md-6">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" value="<?php echo $metodoPagamento->getDescricao();?>" id="descricao" name="descricao" required>
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