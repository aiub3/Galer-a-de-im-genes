<?php 
try {
	$conexion = new PDO('mysql:host=localhost;dbname=imagenes;charset=utf8',
	'root','');
} catch (PDOException $e) {
	echo 'Error: ' . $e;
}

$id = (isset($_GET['id'])) ? (int)$_GET['id'] : 1;

$statement4 = $conexion->prepare('SELECT SQL_CALC_FOUND_ROWS * FROM imagenes');
$statement4->execute();
$statement4->fetchAll();

$statement5 = $conexion->prepare('SELECT FOUND_ROWS() as total');
$statement5->execute();
$total_imagenes = $statement5->fetch()['total'];

$statement = $conexion->prepare('SELECT * FROM imagenes WHERE ID = :id');
$statement->execute(array(':id' => $id));
$imagenes = $statement->fetchAll();
$imagenes = $imagenes[0];

$statement2 = $conexion->prepare('SELECT * FROM imagenes WHERE ID = :id');
$statement2->execute(array(':id' => ($id + 1)));
$imagenes_siguientes = $statement2->fetchAll();
if ($id < $total_imagenes) {
$imagenes_siguientes = $imagenes_siguientes[0];
}

$statement3 = $conexion->prepare('SELECT * FROM imagenes WHERE ID = :id');
$statement3->execute(array(':id' => ($id - 1)));
$imagenes_anteriores = $statement3->fetchAll();
if ($id > 1) {
$imagenes_anteriores = $imagenes_anteriores[0];
}


require 'imageneshtml.php';
?>