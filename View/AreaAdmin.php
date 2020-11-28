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
  <title>Area administrativa</title>
  <meta charset="utf-8">
  <link href="/LoginPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-inverse">
    <a class="navbar-brand" href="#">Home administrativa</a>


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
<div>
<input type="button" class="btn btn-primary btn-lg" value="Cadastrar novo curso"/>
</div>
   

</div>





</body>
<script type="text/javascript" src="/LoginPHP/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/validacao.js"></script>

</html>