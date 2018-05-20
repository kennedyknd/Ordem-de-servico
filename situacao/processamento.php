<?php
include_once("Situacao.php");

$situacao = new Situacao();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_situacao'])) {
            $situacao->alterar($_POST);
        } else {
            $situacao->inserir($_POST);
        }
        break;
    case 'excluir':
        $situacao->excluir($_GET['id_situacao']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>