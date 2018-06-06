<?php
include_once("OrdemServico.php");

$ordemServico = new OrdemServico();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_ordemServico'])) {
            $ordemServico->alterar($_POST);
        } else {
            $ordemServico->inserir($_POST);
        }
        break;
    case 'excluir':
        $ordemServico->excluir($_GET['id_ordemServico']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>