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

        <script>

            $(function () {
                $('#telefone').mask('(99) 9999-9999');
                $('#celular').mask('(99) 99999-9999');
                $('#cep').mask('99.999-999');
                $('#cpf').mask('999.999.999-99');
            })
        </script>

    </head>

    <h2>Nova Ordem de Serviço</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_ordemServico" class="form-control" value="<?php echo $ordemServico->getIdOrdemServico();?>">

        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-4">
                <label for="id_cliente" class="control-label">Cliente</label>

                <select name="id_cliente" id="id_cliente" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($clientes as $cliente){
                        echo "<option value='{$cliente['id_cliente']}'>{$cliente['nome']}</option>";
                    } ?>
                </select>

            </div>

            <div class="form-group col-md-4">
                <label for="custo">Custo</label>
                <input type="number" class="form-control" value="<?php echo $ordemServico->getCusto();?>" id="custo" name="custo" required>
            </div>
            <div class="form-group col-md-4">
                <label for="observacao">Observações</label>
                <input type="text" class="form-control" value="<?php echo $ordemServico->getObservacao();?>" id="observacao" name="observacao" required>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="id_servico" class="control-label">Serviço</label>

                <select name="id_servico" id="id_servico" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($servicos as $servico){
                        echo "<option value='{$servico['id_servico']}'>{$servico['servico']}</option>";
                    } ?>
                </select>

            </div>

            <div class="form-group col-md-4">
                <label for="id_formaPagamento" class="control-label">Forma Pagamento</label>

                <select name="id_formaPagamento" id="id_formaPagamento" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($formaPagamentos as $formaPagamento){
                        echo "<option value='{$formaPagamento['id_formaPagamento']}'>{$formaPagamento['tipo']}</option>";
                    } ?>
                </select>

            </div>
            <div class="form-group col-md-4">
                <label for="id_metodoPagamento" class="control-label">Método Pagamento</label>

                <select name="id_metodoPagamento" id="id_metodoPagamento" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($metodoPagamentos as $metodoPagamento){
                        echo "<option value='{$metodoPagamento['id_metodoPagamento']}'>{$metodoPagamento['tipo']}</option>";
                    } ?>
                </select>

            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="id_situacao" class="control-label">Situação</label>

                <select name="id_situacao" id="id_situacao" class="form-control">
                    <option>Selecione</option>

                    <?php foreach ($situacoes as $situacao){
                        echo "<option value='{$situacao['id_situacao']}'>{$situacao['situacao']}</option>";
                    } ?>
                </select>

            </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>

<?php
include_once ('../rodape.php');
?>