<html>
<head>

    <link rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
    <script src="../js/bootstrap/js/bootstrap.min.js"></script>
    <!--    <script src="boostrap/js/main.js"></script>-->

    <style>
        .cabecalho {
            height: 100px;
        }
        .img1 {
            float: left;
        }
        .contato {
            height: 10em;
            position: relative }
        .contato p {
            margin: 0;
            position: absolute;
            top: 30%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
        p {
            font-weight: bold;
        }
        /*.direita {*/
            /*float: right;*/
        /*}*/
        .texto1 p{
            padding-left: 40px;
        }
        .texto2 p{
            padding-right: 40px;
        }
        .modal-footer p{
            font-weight: normal !important;
        }
    </style>

</head>

<!-- Fixed navbar -->
<body>
<div id="main" class="container">
    <header class="cabecalho">
        <div class="img1">
            <img src="../imagens/ks.png" width="300" height="90"/>
        </div>
        <div class="contato">
            <p><b>Contato 61 9 9199 8496 - 61 3082 2014</b></p>
        </div>
    </header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">KS Informática</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Início</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Clientes <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../clientes/add.php">Novo Cliente</a></li>
                            <li><a href="../clientes/index.php">Visualizar Clientes</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Ordem de Serviço <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../ordemServicos/add.php">Nova OS</a></li>
                            <li><a href="">Visualizar OS</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Administração <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../servicos/add.php">Novo Serviço</a></li>
                            <li><a href="../situacoes/add.php">Nova Situação</a></li>
                            <li><a href="../metodoPagamentos/add.php">Novo Método de Pagamento</a></li>
                            <li><a href="../formaPagamentos/add.php">Nova Forma de Pagamento</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="../servicos/add.php">Serviços</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>