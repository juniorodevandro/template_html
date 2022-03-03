<?php
require "autoload.php";

$CollumnName = ['Nome', 'Número Asc', 'Número Desc', 'Número Asc'];

// Utilizei uma matriz para representar a tabela.
$Table = [
    0 => ['Linha1', '1', '4', '1'],
    1 => ['Linha2', '2', '3', '2'],
    2 => ['Linha3', '3', '2', '3'],
    3 => ['Linha4', '4', '1', '4'],
];


$Doctype = new doctype();
$Meta = new meta('charset="UTF-8"');
$Meta2 = new meta('http-equiv="X-UA-Compatible" content="IE=edge"');
$Meta3 = new meta('name="viewport" content="width=device-width, initial-scale=1.0"');
$Title = new title('Página');
$Table = new table($CollumnName, $Table, 1, '');
$Body = new body("<h1>Tabela</h1>" . $Table);

$Html = new html($Doctype, "pr-br", ($Meta . $Meta2 . $Meta3 . $Title . $Body));

echo $Html;
?>


