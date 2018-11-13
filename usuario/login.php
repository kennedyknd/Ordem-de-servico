<?php include_once '../cabecalho.php'; ?>


        <form class="form-signin" action="processamento.php?acao=logar" method="post">
          <div class="panel periodic-login">
              <span class="atomic-number">28</span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Mi</h1>
                  <p class="atomic-mass">14.072110</p>
                  <p class="element-name">Miminium</p>

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
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="reg.html">| Signup</a>
                </div>
          </div>
        </form>



<?php include_once '../rodape.php'; ?>