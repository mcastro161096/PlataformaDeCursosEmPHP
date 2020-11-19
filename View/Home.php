<?php
session_start();
include('../Repositorio/UsuariosRepositorio.php');
$usuarioRepositorio = new UsuarioRepositorio();
$row = $usuarioRepositorio->BuscaDadosDoUsuarioLogado($_SESSION['email'], $_SESSION['senha']);
$_SESSION['nome'] = $row['Nome'];
$_SESSION['sobrenome'] = $row['Sobrenome'];
$_SESSION['datanascimento'] = $row['DataNascimento'];
$_SESSION['escolaridade'] = $row['Escolaridade'];
$_SESSION['profissao'] = $row['Profissao'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <link href="/LoginPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-inverse">
    <a class="navbar-brand" href="#">Home</a>


    <div class="collapse navbar-collapse pull-right" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <form action="/LoginPHP/Controller/LoginController.php" method="POST">
          <input type="submit" class="nav-link pull-right" name="deslogar" href="#" value="Sair" />
          </form>
        </li>
      </ul>

    </div>
  </nav>


  <div class="container ">

    <div class="form-group">
      <h3>Seus dados:</h3>
      <div class="input-group ">
        <label>Nome</label>
        <input type="text" class="form-control input-lg" value="<?php echo $_SESSION['nome'] ?>" readonly />
      </div>

      <div class="input-group ">
        <label>Sobrenome</label>
        <input type="text" class="form-control input-lg" value="<?php echo $_SESSION['sobrenome'] ?>" readonly />
      </div>

      <div class="input-group ">
        <label>Data de nascimento</label>
        <input type="text" class="form-control input-lg" value="<?php echo $_SESSION['datanascimento'] ?>" readonly />
      </div>

      <div class="input-group ">
        <label>Escolaridade</label>
        <input type="text" class="form-control input-lg" value="<?php echo $_SESSION['escolaridade'] ?>" readonly />
      </div>

      <div class="input-group ">
        <label>Profissão</label>
        <input type="text" class="form-control input-lg" value="<?php echo $_SESSION['profissao'] ?>" readonly />
      </div>
    </div>

  </div>





</body>
<script type="text/javascript" src="/LoginPHP/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/validacao.js"></script>

</html>