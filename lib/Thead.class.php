<?php
    class Thead{
        private $classes;
        private $trs;
        
        public function __construct($vClasses, array $vTrs){
            $this->classes = $vClasses;
            $this->trs = $vTrs;
        }

        function addTrs($tr){
            $this->trs[] = $tr; 
        }

        function __toString(){
            $thead = "<thead ";

            if(!is_null($this->classes) && !empty($this->classes)){
                $thead .= "class= '" . $this->classes . "'";
            }
            $thead .= ">";
            foreach ($this->trs as $obj) {
                $thead .= $obj;
            }
            $thead .= "</thead>";
            return $thead;
        }
    }
?>