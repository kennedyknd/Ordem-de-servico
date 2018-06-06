<?php
include_once("OrdemServico.php");
include_once('../cliente/Cliente.php');
include_once('../servico/Servico.php');
include_once('../situacao/Situacao.php');
include_once('../formaPagamento/FormaPagamento.php');
include_once('../metodoPagamento/MetodoPagamento.php');

$ordemServico = new OrdemServico();

$ordemServicos = $ordemServico->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Ordem de Serviços</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Nova OS</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Cliente</td>
            <td>Serviço</td>
            <td>Custo</td>
            <td>Observacoes</td>
            <td>Situação</td>
        </tr>

        <?php foreach ($ordemServicos as $ordemServico){
            echo "
            <tr>
                <td>
                    <a href='add.php?id_ordemServico={$ordemServico['id_ordemServico']}' class=\"btn btn-sm btn-warning\">Editar</a>
                    <a href='processamento.php?acao=excluir&id_ordemServico={$ordemServico['id_ordemServico']}' class=\"btn btn-sm btn-danger\">Excluir</a>
                    <a href='view.php?id_ordemServico={$ordemServico['id_ordemServico']}' class=\"btn btn-sm btn-info\">Visualizar</a>
                </td>
                <td>{$ordemServico['id_ordemServico']}</td>
                <td>{$ordemServico['id_cliente']}</td>
                <td>{$ordemServico['id_servico']}</td>
                <td>{$ordemServico['custo']}</td>
                <td>{$ordemServico['observacao']}</td>
                <td>{$ordemServico['id_situacao']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';