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
                document.getElementById('localidade').value=("");
                document.getElementById('uf').value=("");
                document.getElementById('ibge').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('logradouro').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('localidade').value=(conteudo.localidade);
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
                        document.getElementById('localidade').value="...";
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

    <div class="container">

    <h2>Dados do Cliente</h2>


        <input type="hidden" name="id_cliente" class="form-control" value="<?php echo $cliente->getIdCliente();?>">

        <!-- area de campos do form -->
        <hr />

        <tr>
            <td><strong>Nome: </strong> <?php echo $cliente->getNome();?></td> <br/>
            <td><strong>Data de Nascimento: </strong> <?php echo $cliente->getDatanasci();?></td> <br/>
            <td><strong>Email: </strong> <?php echo $cliente->getEmail();?></td> <br/>
            <td><strong>CPF: </strong> <?php echo $cliente->getCpf();?></td> <br/>
            <td><strong>Telefone: </strong> <?php echo $cliente->getTelefone();?></td> <br/>
            <td><strong>Celular: </strong> <?php echo $cliente->getCelular();?></td> <br/>
            <td><strong>RG: </strong> <?php echo $cliente->getRg();?></td> <br/>
            <td><strong>Sexo: </strong> <?php $sex = $cliente->getSexo(); if ( $sex == 'M' ) { echo 'Masculino' ;} else { echo 'Feminino';}?></td> <br/>
            <h3>Endereço</h3>
            <td><strong>CEP: </strong> <?php echo $cliente->getCep();?></td> <br/>
            <td><strong>Logradouro: </strong> <?php echo $cliente->getLogradouro();?></td> <br/>
            <td><strong>Bairro: </strong> <?php echo $cliente->getBairro();?></td> <br/>
            <td><strong>Localidade: </strong> <?php echo $cliente->getLocalidade();?></td> <br/>
            <td><strong>UF: </strong> <?php echo $cliente->getUf();?></td> <br/>
            <td><strong>Número: </strong> <?php echo $cliente->getNumero();?></td> <br/>
            <td><strong>Complemento: </strong> <?php echo $cliente->getComplemento();?></td> <br/>
        </tr>

    </div>

<?php
include_once ('../rodape.php');
?>