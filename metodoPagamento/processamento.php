<?php
include_once("MetodoPagamento.php");

$metodoPagamento = new MetodoPagamento();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_metodoPagamento'])) {
            $metodoPagamento->alterar($_POST);
        } else {
            $metodoPagamento->inserir($_POST);
        }
        break;
    case 'excluir':
        $metodoPagamento->excluir($_GET['id_metodoPagamento']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>