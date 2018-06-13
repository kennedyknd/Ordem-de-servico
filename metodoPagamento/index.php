<?php
include_once("MetodoPagamento.php");
$metodoPagamento = new MetodoPagamento();

$metodoPagamentos = $metodoPagamento->recuperarDados();

include_once '../cabecalho.php';
?>

    <head>

        <title>Método de Pagamentos</title>

    </head>

    <h1 class="text-center">Método de Pagamento</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Método de Pagamento</a>
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

        <?php foreach ($metodoPagamentos as $metodoPagamento){
            echo "
            <tr>
                <td>
                    <a href='add.php?id_metodoPagamento={$metodoPagamento['id_metodoPagamento']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_metodoPagamento={$metodoPagamento['id_metodoPagamento']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$metodoPagamento['id_metodoPagamento']}</td>
                <td>{$metodoPagamento['tipo']}</td>
                <td>{$metodoPagamento['descricao']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';