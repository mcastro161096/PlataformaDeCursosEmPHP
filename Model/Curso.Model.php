<?php
class Curso
{
    public $Id;

    public $Nome;

    public $Duracao;

    public $Link;

    public function __construct($Nome, $Duracao, $Link)
    {
        $this->$Nome = $Nome;
        $this->$Duracao = $Duracao;
        $this->$Link = $Link;
    }
}

?>