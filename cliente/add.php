<?php
include_once('Cliente.php');
include_once ('../Conexao.php');
include_once ('../cabecalho.php');

$conexao = new Conexao();
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

    <h2>Novo Cliente</h2>

    <form class="form-horizontal" method="post" action="processamento.php?acao=salvar">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-7">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group col-md-2">
                <label for="campo3">Data de Nascimento</label>
                <input type="date" class="form-control" id="datanasci" name="datanasci" required>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-7">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group col-md-3">
                <label for="rg">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" required>
            </div>
            <div class="form-group col-md-2">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" required>
            </div>
            <div class="form-group col-md-4">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label><br/>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="sexo" value="F" required> Feminino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="sexo" value="M" required> Masculino
                    </label>
                </div>
            </div>

        </div>

        <h3>Endereço</h3>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input class="form-control" name="cep" type="text" id="cep" value=""
                       onblur="pesquisacep(this.value);" required />
            </div>
            <div class="form-group col-md-4">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" readonly>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="uf">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="ibge">IBGE</label>
                <input type="text" class="form-control" id="ibge" name="" readonly>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="form-group col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" required>
            </div>

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