<?php

$link = 'mysql:host=localhost;dbname=examen';

// La contraseña para phpmyadmin en xampp es vacio.
$usuario = 'root';
$pass = '';

try
{
    $pdo = new PDO($link, $usuario, $pass);
    print "Exito<br>";
}
catch (PDOException $e)
{
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>