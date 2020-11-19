<?php


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <link href="/LoginPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>




  <div class="container ">

    <form action="/LoginPHP/Controller/CadastroController.php" method="POST">
      <div class="form-group">
        <h3>Seus dados:</h3>
        <div class="input-group ">
          <label>Nome</label>
          <input type="text" required class="form-control input-lg" name="nome" />
        </div>

        <div class="input-group ">
          <label>Sobrenome</label>
          <input type="text" required class="form-control input-lg" name="sobrenome" />
        </div>

        <div class="input-group ">
          <label>Data de nascimento</label>
          <input type="date" required class="form-control input-lg" name="datanascimento" />
        </div>

        <div class="input-group ">
          <label>Escolaridade</label>
          <input type="text" required class="form-control input-lg" name="escolaridade" />
        </div>

        <div class="input-group ">
          <label>Profissão</label>
          <input type="text" required class="form-control input-lg" name="profissao" />
        </div>

        <div class="input-group ">
          <label>Login</label>
          <input type="email" required class="form-control input-lg" placeholder="Deve ser seu email" name="login" />
        </div>

        <div class="input-group ">
          <label>Senha</label>
          <input type="password" required class="form-control input-lg" name="senha" />
        </div>
      </div>

        <input type="submit" class="btn btn-primary btn-lg" name="criar" value="Criar" />
    </form>

  </div>





</body>
<script type="text/javascript" src="/LoginPHP/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/validacao.js"></script>

</html>