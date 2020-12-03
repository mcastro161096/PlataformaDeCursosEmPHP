<?php
class CursoRepositorio
{
function BuscarTodosOsCursos()
{
    $conexao = new mysqli("localhost", "root", "", "dbphp7");
    $listaDeCursos = $conexao->query("SELECT * FROM Curso;");
    $row = $listaDeCursos->fetch_array();
    return $row;
}

function SalvarCurso($param)
{
    $conexao = new mysqli("localhost", "root", "", "dbphp7");
$query = $conexao->prepare("INSERT INTO CURSO(NOME, DURACAO, LINK)
VALUES (?, ?, ?);");
                $query->bind_param("sss",
            $param['nome'], $param['duracao'], '<iframe width="300" height="200" src='.$param['link'].' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            //https://www.youtube.com/watch?v=JlE0pzESf5g
            //https://www.youtube.com/embed/JlE0pzESf5g
}
}

?>