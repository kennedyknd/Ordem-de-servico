<?php
include_once("Cliente.php");
$cliente = new Cliente();

$clientes = $cliente->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Clientes</h1>
    <br>
    <header>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo cliente</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td>Ações</td>
            <td>Id</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Telefone</td>
            <td>Cidade</td>
            <td>UF</td>
        </tr>

        <?php foreach ($clientes as $cliente){
            echo "
            <tr>
                <td><a href='processamento.php?acao=excluir&id_clientes={$cliente['id_clientes']}' class=\"btn btn-sm btn-danger\">Excluir</a></td>
                <td>{$cliente['id_clientes']}</td>
                <td>{$cliente['nome']}</td>
                <td>{$cliente['cpf']}</td>
                <td>{$cliente['telefone']}</td>
                <td>{$cliente['cidade']}</td>
                <td>{$cliente['uf']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';