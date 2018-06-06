<html>
<head>

    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/sweetalert2.all.js"></script>
    <script src="js/bootstrap/js/bootstrap.min.js"></script>
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
        .direita {
            float: right;
        }
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
            <img src="imagens/ks.png" width="300" height="90"/>
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
                            <li><a href="cliente/add.php">Novo Cliente</a></li>
                            <li><a href="cliente/index.php">Visualizar Clientes</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Ordem de Serviço <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ordemServico/add.php">Nova OS</a></li>
                            <li><a href="ordemServico/index.php">Visualizar OS</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Administração <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="servico/add.php">Novo Serviço</a></li>
                            <li><a href="situacao/add.php">Nova Situação</a></li>
                            <li><a href="metodoPagamento/add.php">Novo Método de Pagamento</a></li>
                            <li><a href="formaPagamento/add.php">Nova Forma de Pagamento</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Serviços</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container" style="margin-top: 60px;">

        <style>
            .texto2{
                float: right;
                padding-top: 40px;
            }
            .texto1{
                float: left;
            }
            .img2{
                float: right;
                padding-right: 90px;

            }
            .img3{
                float: left;
                padding-left: 40px;
                padding-top: 50px;
            }
        </style>

        <div class="texto1">
            <p>No mercado desde 2006, a Suporte Informática é especializada em soluções tecnológicas </p>
            <p>personalizadas com atendimento em todo o país, tanto para as empresas quanto para</p>
            <p>clientes residenciais.</p>
            <p>Desde serviços de redes de computadores, passando por desenvolvimento web e suporte </p>
            <p>técnico, oferecemos o que há de melhor e mais moderno na área.</p>
        </div>
        <div class="img2">
            <img src="imagens/comp1.png" width="250" height="170">
        </div>
        <div class="img3">
            <img src="imagens/comp2.png" width="250" height="170">
        </div>
        <div class="texto2">
            <p>Além da nossa transparência, praticamos diferenciação nos preços em relação ao mercado,</p>
            <p>visto que nossos projetos são completamente elaborados sob medida, oferecendo a tecnologia</p>
            <p>adaptada e realmente necessária para cada usuário, o que reduz o custo e aperfeiçoa as</p>
            <p>atividades operacionais.
        </div>

        <br/>
        <br/>
    </div>
</body>
</html>