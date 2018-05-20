<?php
include_once("Cliente.php");

$cliente = new Cliente();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_cliente'])) {
            $cliente->alterar($_POST);
        } else {
            $cliente->inserir($_POST);
        }
        break;
    case 'excluir':
        $cliente->excluir($_GET['id_cliente']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>