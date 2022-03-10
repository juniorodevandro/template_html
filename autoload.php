<?php
spl_autoload_register(function($class) {
    $file = $_SERVER["DOCUMENT_ROOT"] . '/TemplateHTML/lib/' . $class . '.class.php';
 
    if (file_exists($file)) {
        require_once $file;
    }
});