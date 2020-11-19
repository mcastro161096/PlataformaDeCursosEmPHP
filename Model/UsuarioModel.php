<?php
class Usuario
{
    private $Id;

    public $Login;

    public $Senha;

    public $Nome;

    public $Sobrenome;

    public $DataNascimento;

    public $Escolaridade;

    public $Profissao;

    public $DataCadastro;

    public function __construct( $Nome, $Sobrenome, $DataNascimento, $Escolaridade, $Profissao, $Login, $Senha)
    {
        $this->Login = $Login;
        $this->Senha = $Senha;
        $this->Nome = $Nome;
        $this->Sobrenome = $Sobrenome;
        $this->DataNascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Profissao = $Profissao;
    }
    
    public function getLogin()
    {
        return $this->Login;
    }

   
    public function setLogin($Login)
    {
        $this->Login = $Login;

    }

   
    public function getSenha()
    {
        return $this->Senha;
    }

    
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

    }

    
    public function getNome()
    {
        return $this->Nome;
    }

    
    public function setNome($Nome)
    {
        $this->Nome = $Nome;

    }

    
    public function getSobrenome()
    {
        return $this->Sobrenome;
    }

    
    public function setSobrenome($Sobrenome)
    {
        $this->Sobrenome = $Sobrenome;

    }

    
    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }

    
    public function setDataNascimento($DataNascimento)
    {
        $this->DataNascimento = $DataNascimento;

    }

    
    public function getEscolaridade()
    {
        return $this->Escolaridade;
    }

    
    public function setEscolaridade($Escolaridade)
    {
        $this->Escolaridade = $Escolaridade;

    }

    
    public function getProfissao()
    {
        return $this->Profissao;
    }

    
    public function setProfissao($Profissao)
    {
        $this->Profissao = $Profissao;

    }
}

?>