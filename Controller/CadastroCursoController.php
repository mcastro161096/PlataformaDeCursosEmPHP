<?php
include('../Repositorio/CursoRepositorio.php');

$cursoRepositorio = new CursoRepositorio();
$param =$_POST;
if(isset($param['excluir']))
{
$result = $cursoRepositorio->ExcluirCurso($param);
if ($result == "Excluido com sucesso") 
    {
        header('Location: /PlataformaDeCursosEmPHP/View/AreaAdmin.php');
    }
}
if(isset($param['editar']))
{
    
}
else
if(isset($param['salvar']))
{
    $result = $cursoRepositorio->SalvarCurso($param); 

    if ($result == "Salvo com sucesso") 
    {
        header('Location: /PlataformaDeCursosEmPHP/View/AreaAdmin.php');
    }
}

?>