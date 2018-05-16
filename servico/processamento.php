<?php
include_once("Servico.php");

$servico = new Servico();

switch ($_GET['acao']){
    case 'salvar':
        $servico->inserir($_POST);
        break;
    case 'excluir':
        $servico->excluir($_GET['id_servicos']);
        break;
    case 'editar':
        $servico->editar($_POST, $_GET['id_servicos']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>