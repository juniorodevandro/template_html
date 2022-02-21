<?php
class html{
    private $lang;
    private $conteudo;

    function __construct($lang, $conteudo){
        $this->lang = $lang;
        $this->conteudo = $conteudo;
    }

    function __toString(){
        return '<html lang="' . $this->lang . '">' .
                $this->conteudo . 
                '</html>';
    }

}



