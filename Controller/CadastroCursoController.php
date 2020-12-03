<?php
include('../Repositorio/CursoRepositorio.php');

$cursoRepositorio = new CursoRepositorio();
$param =$_POST;
$result = $cursoRepositorio->SalvarCurso($param);

?>