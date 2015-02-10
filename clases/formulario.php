<?php
include_once("producto.php");

if(isset($_REQUEST['id']))
	{
		$boton='<button type="button" name="operaciones" class="btn btn-warning">Modificar</button>';
	}
else
	{
		$id=0;
		$operaciones='Agregar';
		$boton='';
	}

	$producto_final=new Producto($id,'','','');
?>