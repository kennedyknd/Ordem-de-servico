<?php
include_once 'Usuario.php';

$usuario = new usuario();
$aUsuario = $usuario->recuperarDados();

include_once '../cabecalho.php';
?>

    <body id="mimin" class="dashboard">

    <div class="container">

        <form class="form-signin" action="processamento.php?acao=logar" method="post">
            <div class="panel periodic-login">
                <span class="atomic-number"></span>
                <div class="panel-body text-center">
                    <h1 class="atomic-symbol">Login</h1>
                    <p class="element-name">Digite suas credenciais</p>

                    <i class="icons icon-arrow-down"></i>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" required="" name="email">
                        <span class="bar"></span>
                        <label>E-mail</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" required="" name="senha">
                        <span class="bar"></span>
                        <label>Senha</label>
                    </div>
                    <label class="">
                        <div class="icheckbox_flat-aero" style="position: relative;"><input type="checkbox"
                                                                                            class="icheck pull-left"
                                                                                            name="checkbox1"
                                                                                            style="position: absolute; opacity: 100%;">
                            <ins class="iCheck-helper"
                                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        <p>Lembrar-me</p>
                    </label>
                    <input type="submit" class="btn col-md-12" value="Login">
                    <input type="reset" class="btn col-md-12" value="Limpar">
                </div>
            </div>
        </form>

    </div>
    <!-- custom -->
    <script src="../tema/asset/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-aero',
                radioClass: 'iradio_flat-aero'
            });
        });
    </script>
<?php
include_once '../rodape.php';