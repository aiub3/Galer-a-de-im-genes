<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,
maximum-scale=1.0,minimum-scale=1.0"/> 
<title>Imagenes</title>
<link rel="stylesheet" type="text/css" href="imagenes.css" />
</head>
<body>
<div class="contenedor">
<div class="img_principal">
	<p class="titulo"><?php echo $imagenes['titulo']; ?></p>
	<img alt="<?php echo $imagenes['titulo']; ?>" src="imagenes/<?php echo $imagenes['imagen']; ?>" />
	<p class="descripcion">Descripción: <br/>
	<?php echo $imagenes['descripcion']; ?></p>
</div>
<?php if($id > 1): ?>
<div class="img_anterior">
	<p class="atras"><a href="imagenes.php?id=<?php echo ($id - 1) ?>
	">Imagen anterior</a></p>
	<img alt="<?php echo $imagenes['titulo']; ?>" src="
	imagenes/<?php echo $imagenes_anteriores['imagen']; ?>" />
</div>
<?php endif; ?>
<?php if($id < $total_imagenes): ?>
<div class="img_siguiente">
	<p class="siguiente"><a href="imagenes.php?id=<?php echo ($id + 1) ?>
	">Imagen siguiente</a></p>
	<img alt="<?php echo $imagenes['titulo']; ?>" src="
	imagenes/<?php echo $imagenes_siguientes['imagen']; ?>" />
</div>
<?php endif; ?>
<p class="footer">Creado por _____ _______</p>
</div>
</body>
</html>