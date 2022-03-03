<?php
class head{
    private $conteudo;

    function __construct($lang, $conteudo){
        $this->conteudo = $conteudo;
    }

    function __toString(){
        return  '<head>' . 
                    $this->conteudo .
                '</head>';
    }
}