<?php
include_once("Servico.php");
$servico = new Servico();

$servicos = $servico->recuperarDados();

include_once '../cabecalho.php';
?>

    <head>

        <title>Visualizar Serviços</title>

    </head>

    <h1 class="text-center">Serviços</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Serviço</a>
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

        <?php foreach ($servicos as $servico){
            echo "
            <tr>
                <td>
                    <a href='add.php?id_servico={$servico['id_servico']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_servico={$servico['id_servico']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                </td>
                <td>{$servico['id_servico']}</td>
                <td>{$servico['servico']}</td>
                <td>{$servico['observacao']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';