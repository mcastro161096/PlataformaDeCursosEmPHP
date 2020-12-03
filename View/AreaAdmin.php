<?php
session_start();
include('../Repositorio/UsuariosRepositorio.php');
include('../Repositorio/CursoRepositorio.php');

$usuarioRepositorio = new UsuarioRepositorio();
$cursoRepositorio = new CursoRepositorio();
$cursos = $cursoRepositorio->BuscarTodosOsCursos();
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
  <link href="/PlataformaDeCursosEmPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/PlataformaDeCursosEmPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/PlataformaDeCursosEmPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-inverse">
    <a class="navbar-brand" href="#">Home administrativa</a>


    <div class="collapse navbar-collapse pull-right" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <form action="/PlataformaDeCursosEmPHP/Controller/LoginController.php" method="POST">
          <input type="submit" class="nav-link pull-right" name="deslogar" href="#" value="Sair" />
          </form>
        </li>
      </ul>

    </div>
  </nav>


<div class="container ">
<div>
<a href="https://localhost/PlataformaDeCursosEmPHP/View/CadastroDeCurso.php" class="btn btn-primary btn-lg">Cadastrar novo curso</a>
</div>
   <?php for($i = 0; $i < count($cursos); $i++)
   {
    $curso = $cursos['Link'];
    $key = array_keys($cursos, "Link");
      echo '<div class="row">'.$key.'</div>';
//     function verificar(array $array)
// {
//     $keys = array();

//     foreach ($array as $key => $value) {
//         $keys[] = $key;

//         if (is_array($value)) {
//             $keys = array_merge($keys, verificar($value));
//         }
//     }

//     return $keys;
// }

// $valores = verificar($cursos);
// print_r($valores); 
     
   }
  ?>

</div>





</body>
<script type="text/javascript" src="/PlataformaDeCursosEmPHP/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/PlataformaDeCursosEmPHP/Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/PlataformaDeCursosEmPHP/Scripts/validacao.js"></script>

</html>