<?php

session_start();

include_once 'Usuario.php';
include_once '../perfil/Perfil.php';

$usuario = new Usuario();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_usuario'])) {
//            print_r($_POST);die;
            $usuario->alterar($_POST);
        } else {
//            print_r($_POST);die;
            $usuario->inserir($_POST);
        }
    break;
    case 'excluir':
        $usuario->excluir($_GET['id_usuario']);
    break;
    case 'logar':
        $usuario->logar($_POST);

        if(!empty($_SESSION['usuario'])){

            switch ($_SESSION['usuario']['id_perfil']){
                case Perfil::PERFIL_ADMINISTRADOR:
                    header('location: index.php');
                    die;
                case Perfil::PERFIL_ATENDENTE:
                    header('location: ../index.php');
                    die;
                default:
                    header('location: ../index.php');
                    die;
            }
        }


    break;
    case 'deslogar':
        $usuario->deslogar();
        header('location: login.php');
    break;
}
//echo 444;
//echo '<pre>'; print_r($_SESSION['usuario']['id_perfil']); die;
header('location: index.php');
