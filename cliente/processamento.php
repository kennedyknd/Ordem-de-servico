<?php
include_once("Cliente.php");

$cliente = new Cliente();

switch ($_GET['acao']){
    case 'salvar':
        $cliente->inserir($_POST);
        break;
    case 'excluir':
        $cliente->excluir($_GET['id_clientes']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>