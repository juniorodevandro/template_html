<?php
class html{
    private $lang;
    private $conteudo;

    function __construct($doctype, $lang, $conteudo) {
        $this->doctype =$doctype;        
        $this->lang = $lang;
        $this->conteudo = $conteudo;
    }

    function __toString(){
        return  $this->doctype . 
                '<html lang="' . $this->lang . '">' .
                $this->conteudo . 
                '</html>';
    }

}



