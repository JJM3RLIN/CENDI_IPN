<?php
function conectarDb(): mysqli{
    //Conectarnos a la DB
$db = new mysqli('localhost', 'root', 'Merlin1709', 'cendi');
//Para quwe acepte caracteres
$db ->set_charset('utf8');

if(!$db){
    echo 'El servidor no responde';
    exit;
}
return $db;
}