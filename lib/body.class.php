<?php

class body{
    private $conteudo;

    function __construct($conteudo){
        $this->conteudo = $conteudo;
    }

    function __toString(){
        return  '<body> ' . 
                    $this->conteudo . 
                '</body>';
    }
}