<?php include_once '../cabecalho.php'; ?>


        <form class="form-signin" action="processamento.php?acao=logar" method="post">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Login</h1>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" name="email" class="form-text" required>
                    <span class="bar"></span>
                    <label>E-mail</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="senha" class="form-text" required>
                    <span class="bar"></span>
                    <label>Senha</label>
                  </div>
                  <label class="">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Lembrar senha
                  </label>
                  <input type="submit" class="btn col-md-12" value="Entrar"/>
              </div>
          </div>
        </form>



<?php include_once '../rodape.php'; ?>