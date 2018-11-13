<?php
include_once '../usuario/Usuario.php';

$usuario = new Usuario();
$aUsuario = $usuario->recuperarDados();

include_once '../cabecalho.php';
?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Usuário <i class="fa fa-user-secret"></i></h3>
            </div>
        </div>
    </div>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <a class="btn btn-warning" href="formulario.php">Novo</a>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">

                        <table id="datatables-example"
                               class="table table-bordered table-hover table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th colspan="2" width="10%" style="text-align: center">Ações</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Tipo Perfil</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aUsuario as $usuario) { ?>
                                <tr>
                                    <td>
                                        <a href="formulario.php?id_usuario=<?= $usuario['id_usuario'] ?>" class="btn btn-sm btn-info">
                                            Alterar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="processamento.php?acao=excluir&id_usuario=<?= $usuario['id_usuario'] ?>" class="btn btn-sm btn-danger">
                                            Excluir
                                        </a>
                                    </td>
                                    <td><?= $usuario['nome'] ?></td>
                                    <td><?= $usuario['email'] ?></td>
                                    <td><?= $usuario['perfil'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<!---->
<!--<!-- Button trigger modal -->-->
<!--    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
<!--        Usuario-->
<!--    </button>-->
<!---->
<!--    <!-- Modal -->-->
<!--    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--        <div class="modal-dialog" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                    <h4 class="modal-title" id="myModalLabel">Usuario</h4>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    06/11/2018-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<?php
include_once '../rodape.php';

