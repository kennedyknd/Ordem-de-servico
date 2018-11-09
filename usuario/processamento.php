<?php
session_start();
include_once 'Usuario.php';
include_once '../perfil/Perfil.php';

$usuario = new usuario();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_usuario'])) {
            $usuario->alterar($_POST);
        } else {
            $usuario->inserir($_POST);
        }
        break;
    case 'excluir':
        $usuario->excluir($_GET['id_usuario']);
        break;
    case 'logar':
        $usuario->logar($_POST);
        if (!empty($_SESSION['usuario'])) {
            switch ($_SESSION['usuario']['id_usuario']) {
                case Perfil::PERFIL_ADMINISTRADOR:
                    header('location: index.php');
                case Perfil::PERFIL_MESARIO:
                    header('location: index.php');
                case Perfil::PERFIL_CHEFE:
                    header('location: index.php');
                case Perfil::PERFIL_ELEITOR:
                    header('location: index.php');
            }
        }
        break;
    case 'deslogar':
        $usuario->deslogar();
        break;
}

header('location: index.php');