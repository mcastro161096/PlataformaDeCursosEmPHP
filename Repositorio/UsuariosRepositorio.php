<?php
class UsuarioRepositorio
{
    function Cadastrar(Usuario $usuario)
    {
        $conexao = new mysqli("localhost", "root", "", "dbphp7");
            $query = $conexao->prepare("INSERT INTO Usuarios 
                (Login, Senha, Nome, Sobrenome, DataNascimento, Escolaridade, Profissao) 
                    VALUES (?, ?, ?, ?, ?, ?, ?);");
                $query->bind_param("sssssss",$usuario->Login,
                    $usuario->Senha, $usuario->Nome, $usuario->Sobrenome, $usuario->DataNascimento,
                         $usuario->Escolaridade, $usuario->Profissao);

          
          if($query->execute()) 
          {
            return "Salvo com sucesso";
          }    
          else
            return "Não foi posível salvar os dados";         
    }

    function VerificarCredenciais($login, $senha)
    {
        $conexao = new mysqli("localhost", "root", "", "dbphp7");
            $result = $conexao->query("SELECT Login, Senha FROM Usuarios where Login = '$login';");
                $row = $result->fetch_array();  

            if ($row != null) 
            {
                    
                        $loginEncontrado = $row['Login'];
                        $senhaEncontrada = $row['Senha'];
                            if ($loginEncontrado == $login) 
                            {
                                if ($senhaEncontrada == $senha)
                                {
                                    if($loginEncontrado == "admin@gmail.com")
                                    {
                                        return "administrador";
                                    }
                                   return "valido";
                                }
                                return "Usuário ou senha inválidos.";
                            }

                
            }
            else
                return "Usuário não existe, clique em 'Criar conta'";

    }

    function BuscaDadosDoUsuarioLogado($login, $senha)
    {
        $conexao = new mysqli("localhost", "root", "", "dbphp7");
            $result = $conexao->query("SELECT * FROM Usuarios where Login = '$login';");
                $row = $result->fetch_array();  

                return $row;
    }


}
    



?>