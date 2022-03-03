<?php

class ul{
    private $css;
    private $itens;

    public function __construct($classe, $itens){
        $this->css = $classe;
        $this->itens = $itens;
    }

    public function addItem($item){
        $this->itens = array_merge($this->itens, $item);
    }

    public function __toString(){
        $retorno = "<ul>";
        foreach ($this->itens as $item){
            $retorno .= $item;
        }
        $retorno .= "</ul>";
        return $retorno;
    }   
}
