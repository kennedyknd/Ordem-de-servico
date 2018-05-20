<?php
include_once("Situacao.php");

$servico = new Situacao();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_servico'])) {
            $servico->alterar($_POST);
        } else {
            $servico->inserir($_POST);
        }
        break;
    case 'excluir':
        $servico->excluir($_GET['id_servico']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>