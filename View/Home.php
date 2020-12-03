<?php
session_start();
include('../Repositorio/UsuariosRepositorio.php');
include('../Repositorio/CursoRepositorio.php');

$usuarioRepositorio = new UsuarioRepositorio();
$cursoRepositorio = new CursoRepositorio();
$row = $usuarioRepositorio->BuscaDadosDoUsuarioLogado($_SESSION['email'], $_SESSION['senha']);
$_SESSION['id']= $row['Id'];
$_SESSION['nome'] = $row['Nome'];
$_SESSION['sobrenome'] = $row['Sobrenome'];
$_SESSION['datanascimento'] = $row['DataNascimento'];
$_SESSION['escolaridade'] = $row['Escolaridade'];
$_SESSION['profissao'] = $row['Profissao'];
$cursos = $cursoRepositorio->BuscarCursosMatriculado($row['Id']);
$idUsuario = $_SESSION['id'];
$nomeUsuario = $row['Nome'];


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
    <h3>Seus Cursos:</h3>
    <a href="https://localhost/PlataformaDeCursosEmPHP/View/EscolherCurso.php" class="btn btn-success">Escolher Curso</a>
    <?php
    $ultimolink = "";
   $count = 1;
   $nomeBotao = "";
  
  $html =  '<div class="row">';
     foreach ($cursos as $curso)
      {
        
        $key1 = $curso['Link'];
        
        if ($key1 != $ultimolink) 
        {
          
          while ($count < 4 && $key1 != $ultimolink) 
          {
            if ($curso['Situacao'] == "Cursando") 
            {
              $nomeBotao = "Concluir";
            }

            if ($curso['Situacao'] == "Concluído") 
            {
              $nomeBotao = "Emitir Certificado";
            }
            
            $html  .=
            '<form action="/PlataformaDeCursosEmPHP/Controller/MatriculaController.php" method="POST"
             class="col-md-3 te">
             <div>'. $key1.' 
             <input type="hidden" value='.'"'.$curso['Id'].'"'.'name="idCurso">
             <input type="hidden" value='.'"'.$idUsuario.'"'.'name="idUsuario">
             <input type="hidden" value='.'"'.$nomeUsuario.'"'.'name="nomeUsuario">
             <input type="hidden" value='.'"'.$curso['Nome'].'"'.'name="idUsuario">
             <input type="hidden" value='.'"'.$curso['Duracao'].'"'.'name="idUsuario">
             <input type=submit class="btn btn-primary" value='.'"'.$nomeBotao.'"'.' name='.'"'.$nomeBotao.'"'.'>
             <label>'.$curso['Situacao'].'</label>

            
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