<?php
session_start();
include('../Repositorio/UsuariosRepositorio.php');
include('../Repositorio/CursoRepositorio.php');


$usuarioRepositorio = new UsuarioRepositorio();
$cursoRepositorio = new CursoRepositorio();
$cursos = $cursoRepositorio->BuscarTodosOsCursos();

$idUsuario = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <link href="/PlataformaDeCursosEmPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/PlataformaDeCursosEmPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/PlataformaDeCursosEmPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-inverse">
    <a class="navbar-brand" href="#">Home</a>


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
<?php
  $ultimolink = "";
   $count = 1;
  
  $html =  '<div class="row">';
     foreach ($cursos as $curso)
      {
        
        $key1 = $curso['Link'];
        
        if ($key1 != $ultimolink) 
        {
          
          while ($count < 4 && $key1 != $ultimolink) 
          {
            
            $html  .=
            '<form action="/PlataformaDeCursosEmPHP/Controller/MatriculaController.php" method="POST"
             class="col-md-3 te">
             <div>'. $key1.' 
             <input type="hidden" value='.'"'.$curso['Id'].'"'.'name="idCurso">
             <input type="hidden" value='.'"'.$idUsuario.'"'.'name="idUsuario">

             <input type=submit class="btn btn-primary" value="Efetuar Matrícula" name="escolher">
            
            </div>
            </form>';
            $count++;
            $ultimolink = $key1;
          }
         
        }
        
     }
     $html.= '</div>'; 
            echo $html;
?>

    
  </div>

</body>
<script type="text/javascript" src="/PlataformaDeCursosEmPHP/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/PlataformaDeCursosEmPHP/Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/PlataformaDeCursosEmPHP/Scripts/validacao.js"></script>

</html>