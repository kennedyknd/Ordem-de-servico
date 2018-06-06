<?php
include_once('../cabecalho.php');
include_once('OrdemServico.php');
include_once('../cliente/Cliente.php');
include_once('../servico/Servico.php');
include_once('../situacao/Situacao.php');
include_once('../formaPagamento/FormaPagamento.php');
include_once('../metodoPagamento/MetodoPagamento.php');

$cliente = new Cliente();
$clientes = $cliente->recuperarDados();

$servico = new Servico();
$servicos= $servico->recuperarDados();

$situacao = new Situacao();
$situacoes = $situacao->recuperarDados();

$formaPagamento = new FormaPagamento();
$formaPagamentos = $formaPagamento->recuperarDados();

$metodoPagamento = new MetodoPagamento();
$metodoPagamentos = $metodoPagamento->recuperarDados();

$ordemServico = new OrdemServico();

if(!empty($_GET['id_ordemServico'])){
    $ordemServico->carregarPorId($_GET['id_ordemServico']);
}
?>
    <head>

        <title>Novo Cliente</title>

    </head>

    <h2>Dados do Cliente</h2>

    <div class="container">

        <input type="hidden" name="id_ordemServico" class="form-control" value="<?php echo $ordemServico->getIdOrdemServico();?>">

        <!-- area de campos do form -->
        <hr />

        <tr>
            <td><strong>ID Cliente: </strong> <?php echo $ordemServico->getIdCliente();?></td> <br/>
        </tr>

    </div>

<?php
include_once ('../rodape.php');
?>