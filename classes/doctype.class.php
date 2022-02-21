<?php

class doctype{
    private $doctype;

    function __construct(){
        $this->doctype = "<!DOCTYPE html>";
    }

    function __toString(){
        return $this->doctype; 
    }
}