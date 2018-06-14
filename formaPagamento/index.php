<?php
include_once("FormaPagamento.php");
$formaPagamento = new FormaPagamento();

$formaPagamentos = $formaPagamento->recuperarDados();

include_once '../cabecalho.php';
?>

    <head>

        <title>Forma de Pagamentos</title>

    </head>

    <h1 class="text-center">Forma de Pagamento</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Forma de Pagamento</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Tipo</td>
            <td>Descrição</td>
        </tr>

        <?php foreach ($formaPagamentos as $formaPagamento){
            echo "
            <tr>
                <td style='width: 120px'>
                    <a href='add.php?id_formaPagamento={$formaPagamento['id_formaPagamento']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_formaPagamento={$formaPagamento['id_formaPagamento']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$formaPagamento['id_formaPagamento']}</td>
                <td>{$formaPagamento['tipo']}</td>
                <td>{$formaPagamento['descricao']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';