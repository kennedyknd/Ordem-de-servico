<?php
include_once ('../cabecalho.php');
include_once('Cliente.php');

$cliente = new Cliente();

if(!empty($_GET['id_cliente'])){
    $cliente->carregarPorId($_GET['id_cliente']);
}
?>
    <head>

        <title>Cliente</title>

        <script>

            $(function () {
                $('#telefone').mask('(99) 9999-9999');
                $('#celular').mask('(99) 99999-9999');
                // $('#cep').mask('99.999-999');
                $('#cpf').mask('999.999.999-99');
            })
        </script>

        <script>
            $(function(){
                $('#cep').change(function(){
                    $cep = $('#cep').val();

                    //FALTA PODER HABILITAR MASCARA AQUI!!

                    $.ajax({
                        url: 'https://viacep.com.br/ws/' + $cep +'/json/',
                        success: function (dados) {
                            $('#logradouro').val(dados.logradouro)
                            $('#bairro').val(dados.bairro)
                            $('#uf').val(dados.uf)
                            $('#localidade').val(dados.localidade)
                        }
                    });

                });

                $('#cpf').change(function() {
                    $cpf = $('#cpf').val();
                    $.ajax({
                        url: 'processamento.php?acao=verificar_cpf&cpf='+$cpf,
                        success: function (dados) {
                            if (dados){
                                // alert(dados);
                                $('#mensagemCpf').html(dados);
                                $('#cpf').val(' ');
                            }
                        }
                    });
                })

                $('#rg').change(function() {
                    $rg = $('#rg').val();
                    $.ajax({
                        url: 'processamento.php?acao=verificar_rg&rg='+$rg,
                        success: function (dados) {
                            if (dados){
                                // alert(dados);
                                $('#mensagemRg').html(dados);
                                $('#rg').val(' ');
                            }
                        }
                    });
                });

            })
        </script>

    </head>

    <div>

        <div id="mensagemCpf">

        </div>
        <div id="mensagemRg">

        </div>

    <h2>Cliente</h2>

        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="processamento.php?acao=salvar">

        <input type="hidden" name="id_cliente" class="form-control" value="<?php echo $cliente->getIdCliente();?>">

        <!-- area de campos do form -->
        <hr />
        <div class="row form-group">
            <div class="col-md-7">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getNome();?>" id="nome" name="nome" required>
            </div>

            <div class="col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getCpf();?>" id="cpf" name="cpf" required>
            </div>
            <div class="col-md-2">
                <label for="campo3">Data de Nascimento</label>
                <input type="date" class="form-control" value="<?php echo $cliente->getDatanasci();?>" id="datanasci" name="datanasci" required>
            </div>

        </div>
        <div class="row form-group">
            <div class="col-md-7">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="<?php echo $cliente->getEmail();?>" id="email" name="email" required>
            </div>

            <div class="col-md-3">
                <label for="rg">RG</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getRg();?>" id="rg" name="rg" required>
            </div>
            <div class="col-md-2">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getTelefone();?>" id="telefone" name="telefone" required>
            </div>

        </div>

        <div class="row form-group">
            <div class="col-md-4">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getCelular();?>" id="celular" name="celular" required>
            </div>
            <div class="col-md-4">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label><br/>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="sexo" value="F" required <?= (($cliente->getSexo())=='F')?'Checked':''?>> Feminino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="sexo" value="M" required <?= (($cliente->getSexo())=='M')?'Checked':''?>> Masculino
                    </label>
                </div>
            </div>

        </div>

        <h3>Endereço</h3>

        <div class="row form-group">
            <div class="col-md-4">
                <label for="cep">CEP</label>
                <input class="form-control" value="<?php echo $cliente->getCep();?>" name="cep" type="text" id="cep" value=""
                       onblur="pesquisacep(this.value);" required />
            </div>
            <div class="col-md-4">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getLogradouro();?>" id="logradouro" name="logradouro" readonly>
            </div>
            <div class="col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getBairro();?>" id="bairro" name="bairro" readonly>
            </div>

        </div>

        <div class="row form-group">
            <div class="col-md-4">
                <label for="localidade">Localidade</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getLocalidade();?>" id="localidade" name="localidade" readonly>
            </div>
            <div class="col-md-4">
                <label for="uf">UF</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getUf();?>" id="uf" name="uf" readonly>
            </div>

        </div>

        <div class="row form-group">
            <div class="col-md-4">
                <label for="numero">Número</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getNumero();?>" id="numero" name="numero" required>
            </div>
            <div class="col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getComplemento();?>" id="complemento" name="complemento" required>
            </div>
        </div>
            <br/>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <label>Inserir Imagem</label>
                        <input type="file" class="form-text" id="foto" name="foto" value="<?php echo $cliente->getFoto(); ?>">
                    </div>
                </div>

            </div>
        <br/>
        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>

    </form>
    </div>
<?php
include_once ('../rodape.php');
?>