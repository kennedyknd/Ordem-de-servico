<?php
include_once('../cabecalho.php');
include_once 'FormaPagamento.php';

$formaPagamento = new FormaPagamento();

if(!empty($_GET['id_formaPagamento'])){
    $formaPagamento->carregarPorId($_GET['id_formaPagamento']);
}
?>

    <head>
        <title>Nova Forma de Pagamento</title>
    </head>

<div class="container">

    <h2>Nova Forma de Pagamento</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_formaPagamento" class="form-control" value="<?php echo $formaPagamento->getIdFormaPagamento();?>">

        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-6">
                <label for="tipo">Forma de Pagamento</label>
                <input type="text" class="form-control" value="<?php echo $formaPagamento->getTipo();?>" id="tipo" name="tipo" required>
            </div>

            <div class="form-group col-md-6">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" value="<?php echo $formaPagamento->getDescricao();?>" id="descricao" name="descricao" required>
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