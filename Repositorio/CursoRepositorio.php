<?php
class CursoRepositorio
{
function BuscarTodosOsCursos()
{
    $conexao = new mysqli("localhost", "root", "", "dbphp7");
    $resutaldo = $conexao->query("SELECT * FROM Curso;");
    $listaDeCursos = [];
     while($row = $resutaldo->fetch_array())
     {
       array_push($listaDeCursos, $row);
     }
    return $listaDeCursos;
}

function SalvarCurso($param)
{
    $nome = $param['nome'];
    $duracao = $param['duracao'];
    $link = '<iframe width="300" height="200" src='.$param['link'].' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

    $conexao = new mysqli("localhost", "root", "", "dbphp7");
$query = $conexao->prepare("INSERT INTO CURSO(NOME, DURACAO, LINK)
VALUES (?, ?, ?);");
                $query->bind_param("sss",
            $nome, $duracao, $link);
            //https://www.youtube.com/watch?v=JlE0pzESf5g
            //https://www.youtube.com/embed/JlE0pzESf5g
            if($query->execute()) 
          {
            return "Salvo com sucesso";
          }    
          else
            return "Não foi posível salvar os dados";  
}

function ExcluirCurso($param)
{
    $id = $param['id'];
    $conexao = new mysqli("localhost", "root", "", "dbphp7");
    $resutaldo = $conexao->query("DELETE  FROM Curso WHERE Id = $id;");
    if ($resutaldo == true) 
    {
        return "Excluido com sucesso";
    }
    else 
    return "Não foi possível excluir";
}
}

?>