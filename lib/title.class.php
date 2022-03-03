<?php
class title{
    private $title;

    function __construct($title){
        $this->title = $title;
    }

    function __toString(){
        return '<title>' . $this->title . '</title>';
    }
}