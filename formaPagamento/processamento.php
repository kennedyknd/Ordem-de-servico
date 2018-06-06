<?php
include_once("FormaPagamento.php");

$formaPagamento = new FormaPagamento();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_formaPagamento'])) {
            $formaPagamento->alterar($_POST);
        } else {
            $formaPagamento->inserir($_POST);
        }
        break;
    case 'excluir':
        $formaPagamento->excluir($_GET['id_formaPagamento']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>