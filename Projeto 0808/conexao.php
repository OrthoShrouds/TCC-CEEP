<?php
function conectar()
{

    $host = 'localhost';
    $db = 'studiosbentcc';
    $user = 'root';
    $password = '';
    
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    return $pdo;
}
?>
