<?php
include_once("Cliente.php");

$cliente = new Cliente();

switch ($_GET['acao']){
    case 'salvar':

        $origem = $_FILES['foto']['tmp_name'];
        $destino = '../upload/cliente/' . $_FILES['foto']['name'];
        move_uploaded_file($origem, $destino);

        if(!empty($_POST['id_cliente'])) {
            $cliente->alterar($_POST);
        } else {
            $cliente->inserir($_POST);
        }
        break;
    case 'excluir':
        $cliente->excluir($_GET['id_cliente']);
        break;
    case 'verificar_cpf':
        $existe = $cliente->existeCpf($_GET['cpf']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3 class=\"bg-danger\">Já existe {$existe[0]['qtd']} cliente com o cpf {$_GET['cpf']} chamado {$existe[0]['nome']}, com o email {$existe[0]['email']} e o telefone {$existe[0]['telefone']}, por favor informe outro CPF</h3></div>";
            }
        }
        die;
        break;

    case 'verificar_rg':
        $existe = $cliente->existeRg($_GET['rg']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3 class=\"bg-danger\">Já existe {$existe[0]['qtd']} cliente com o rg {$_GET['rg']} chamado {$existe[0]['nome']}, com o email {$existe[0]['email']} e o telefone {$existe[0]['telefone']}, por favor informe outro RG</h3></div>";
            }
        }
        die;
        break;

}

// Redireciona para a página index

header('location: index.php');
?>