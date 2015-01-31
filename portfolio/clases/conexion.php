<?php
class Conexion{

	var $host;
	var $user;
	var $password;
	var $db;
	var $conexion;

	function conexion()
	{
		$this->host="";
		$this->user="";
		$this->password="";
		$this->db="";
	}

	function conectar()
	{
		$this->conexion=mysql_connect($this->host,$this->user,$this->password);
		mysql_select_db($this->db,$this->conexion);
	}

	function desconectar()
	{
		mysql_close($this->conexion);
	}

	function ejecutar_sentencia($consulta)
	{
		$this->conectar();
		$resultados = mysql_query ($consulta, $this->conexion);

		if (preg_match("/insert/i", $consulta))
		$resultados = mysql_insert_id($this->conexion);

		$this->desconectar();
		return $resultados;
	}
}
?>