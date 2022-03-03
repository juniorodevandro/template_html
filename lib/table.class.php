<?php

class table{
    function __construct($prColumnName = array(), $prTable = array(), $vLinePage, $vClass){
        $this->ColumnName = $prColumnName;        
        $this->Table = $prTable;
        $this->LinePage = $vLinePage;
        $this->Class = $vClass;
    }

    function __toString() {
        $Result = '<table border="1" ';

        if(!is_null($this->Class)){
            $Result .= 'class= "' . $this->Class . '"';
        }
        $Result .= '>';
        
        if(!empty($this->ColumnName)) {
            foreach($this->ColumnName as $vColumnName){
                $Result .= '<th>' . $vColumnName . '</th>';
            }
        }
        
        for($i=0; $i <= $this->LinePage - 1; $i++) { 
            $Result .= '<tr>'; 

            for($j=0; $j <=   count($this->Table) - 1; $j++) { 
                $Result .= '<td>' .$this->Table[$i] [$j] . '</td>';                    
            }
            $Result .= '</tr>';

            if ($j <= count($this->Table) - 1) {
                break;
            }
        }                   
        
        $Result .= '</table>';

        return $Result;
    }
}