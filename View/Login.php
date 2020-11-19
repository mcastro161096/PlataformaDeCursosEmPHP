<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link href="/LoginPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="container" style="margin-top: 40px">
    <div class="row">

      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">

          <div class="panel-body">

            <form method="POST" action="/LoginPHP/Controller/LoginController.php">

              <fieldset>
               
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"> </i>
                        </span>
                        <input type="email" required class="form-control input-lg" name="email" placeholder = "Informe seu Email"/>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"> </i>
                        </span>
                        <input type="password" required class="form-control input-lg" name="senha" placeholder = "Informe a senha"/>
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Continuar">
                      <input type="reset" class="btn-link pull-left" value="Limpar"/>
                      <a href="https://localhost/LoginPHP/View/Cadastro.php" class="pull-right">Criar conta</a>

                    </div>
                  </div>
                </div>
              </fieldset>

            </form>

          </div>
          <div class="panel-footer ">
          <?php 
          if (isset($_SESSION['msg'])) 
          {
            echo $_SESSION['msg'];
          }
           
          
          ?>  
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/validacao.js"></script>

</html>