<?php
include_once("Situacao.php");
$situacao = new Situacao();

$situacoes = $situacao->recuperarDados();

include_once '../cabecalho.php';
?>

    <head>

        <title>Visualizar Situações</title>

    </head>

    <h1 class="text-center">Situação</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova Situação</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Serviço</td>
            <td>Observação</td>
        </tr>

        <?php foreach ($situacoes as $situacao){
            echo "
            <tr>
                <td>
                    <a href='add.php?id_situacao={$situacao['id_situacao']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_situacao={$situacao['id_situacao']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$situacao['id_situacao']}</td>
                <td>{$situacao['situacao']}</td>
                <td>{$situacao['descricao']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';