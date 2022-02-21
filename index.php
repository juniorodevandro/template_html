<?php
require "classes/autoload.php";

$doctype = new doctype();
$body = new body("<h1>Junior</h1>");
$meta = new meta('charset="UTF-8"');
$meta2 = new meta('http-equiv="X-UA-Compatible" content="IE=edge"');
$meta3 = new meta('name="viewport" content="width=device-width, initial-scale=1.0"');
$title = new title('Pagina');

$html = new html("pr-br",($meta . $meta2 . $meta3 . $title . $body));

echo $doctype;
echo $html;