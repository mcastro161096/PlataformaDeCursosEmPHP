<?php
include('../View/Login.php');
include('../Repositorio/UsuariosRepositorio.php');
$dados = $_POST;
$usuarioRepositorio = new UsuarioRepositorio();

    if (!isset($dados['deslogar'])) 
    {
        $usuario = $usuarioRepositorio->VerificarCredenciais($dados['email'], $dados['senha']);

        if ($usuario == "valido")
        {
            
                    $_SESSION['logado'] = "true";
                        $_SESSION['email'] = $dados['email'];
                            $_SESSION['senha'] = $dados['senha'];
                                
                        header('Location: /LoginPHP/View/Home.php');
        }
        elseif ("administrador")
        {
            $_SESSION['logado'] = "true";
                        $_SESSION['email'] = $dados['email'];
                            $_SESSION['senha'] = $dados['senha'];
            header('Location: /PlataformaDeCursosEmPHP/View/AreaAdmin.php');
        }
        else
        {
            $_SESSION['msg'] = $usuario;
                 header("Refresh: 0; url=../View/Login.php");
        }
    }
    else 
    {
        Deslogar();
    }


function Deslogar()
{
    session_destroy();
        header("Refresh: 0; url=../View/Login.php");
}



?>