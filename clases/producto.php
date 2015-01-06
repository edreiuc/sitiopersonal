<?php
include_once ("conexion.php");

class Producto
{

	$id;
	$codigo;
	$nombre;
	$descripcion;

	public function Producto ($idpro, $codpro, $nompro, $despro)
	{
		$this->idpro=$id;
		$this->codpro=$codigo;
		$this->nompro=$nombre;
		$this->despro=$descripcion;
		//$this->imgpro=$imagen;
	}

	public function inserprod()
	{
		$sql="INSERT INTO producto (codigo, nombre, descripcion) VALUES (
			".$this->codigo.",
			'".$this->nombre."',
			".$this->descripcion.");";
		echo $sql();
		$con=new Conexion();
		$con->ejecutar_sentencia($sql);
	}

	public function modprod()
	{
		$sql="UPDATE producto SET 
		codigo=".$this->codigo.",
		nombre='".$this->nombre."',
		descripcion='".$this->descripcion."'
		WHERE id=".$thi->id.";";
		echo $sql();
		$con=new Conexion();
		$con->ejecutar_sentencia($sql);
	}

	public function suprprod()
	{
		$sql="DELETE FROM producto WHERE id=".$this->id.";";
		$con=new Conexion();
		$con->ejecutar_sentencia($sql);
	}

	
}
?>