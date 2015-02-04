<?php
include_once('../../clases/conexion.php');
include_once('../../clases/producto.php');

	$operaciones=$_REQUEST['operaciones'];
	$producto_temporal = new producto($_REQUEST['id'],$_REQUEST['codigo'],$_REQUEST['nombre'],$_REQUEST['descripcion']);

	switch($operaciones)
	{
		case 'Agregar':
			$producto_temporal->inserprod();
		break;

		case 'Modificar':
			$producto_temporal->modprod();
		break;

		case 'Eliminar':
			$producto_temporal->suprprod();
		break;
	}

	header('Location:listado_producto.php');
?>