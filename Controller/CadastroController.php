<?php
include('../View/Login.php');
include('../Repositorio/UsuariosRepositorio.php');
include('../Model/UsuarioModel.php');

$dados = $_POST;
$usuarioRepositorio = new UsuarioRepositorio();

    $usuario = new Usuario($dados['nome'], $dados['sobrenome'],
    $dados['datanascimento'], $dados['escolaridade'], $dados['profissao'], $dados['login'], $dados['senha'],);
    $result = $usuarioRepositorio->Cadastrar($usuario);

    if($result == "Salvo com sucesso")
    { 
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$result.  você será redirecionado(a) para efetuar login!')
        window.location.href='../View/Login.php';
        </SCRIPT>");
        
        session_destroy();
        
    }
    else
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$result')
        window.location.href='../View/Cadastro.php';
        </SCRIPT>");
    }


?>