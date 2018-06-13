<?php
include_once ('../cabecalho.php');
include_once('Cliente.php');

$cliente = new Cliente();

if(!empty($_GET['id_cliente'])){
    $cliente->carregarPorId($_GET['id_cliente']);
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

        <!-- Adicionando Javascript -->
        <script type="text/javascript" >

            function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('logradouro').value=("");
                document.getElementById('bairro').value=("");
                document.getElementById('cidade').value=("");
                document.getElementById('uf').value=("");
                document.getElementById('ibge').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('logradouro').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('cidade').value=(conteudo.localidade);
                    document.getElementById('uf').value=(conteudo.uf);
                    document.getElementById('ibge').value=(conteudo.ibge);
                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }

            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('logradouro').value="...";
                        document.getElementById('bairro').value="...";
                        document.getElementById('cidade').value="...";
                        document.getElementById('uf').value="...";
                        document.getElementById('ibge').value="...";

                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            };

        </script>

    </head>

    <div>

    <h2>Novo Cliente</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">

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
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getCidade();?>" id="cidade" name="cidade" readonly>
            </div>
            <div class="col-md-4">
                <label for="uf">UF</label>
                <input type="text" class="form-control" value="<?php echo $cliente->getUf();?>" id="uf" name="uf" readonly>
            </div>
            <div class="col-md-4">
                <label for="ibge">IBGE</label>
                <input type="text" class="form-control" id="ibge" name="" readonly>
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

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>

    </form>
    </div>
<?php
include_once ('../rodape.php');
?>