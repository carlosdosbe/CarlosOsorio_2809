<?php

include_once 'examen.php';

$consulta = 'SELECT * FROM alumnos';
$resultado = $pdo->prepare($consulta);
$resultado->execute();
$data = $resultado->fetch();

var_dump($data);

echo '<br><hr>';

echo "Nombre: ";
echo ($data['nombre']);

echo '<br><br>';

echo "ID: ";
echo ($data['id']);

?>