<?php
class meta{
    private $conteudo;
    
    function __construct($conteudo){
        $this->conteudo = $conteudo;
    }

    function __toString(){
        return '<meta ' . $this->conteudo . '>';
    }
}