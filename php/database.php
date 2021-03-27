<?php

function conexionSQL(){
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'FullStack';

	$link = new mysqli($server,$username,$password,$database);
	if($link->connect_error) {
		$error = "Error de conexion: ".$link->connect_errno
				."Mensaje: ".$link->connect_error;
		die($error);
	}else{
		$q = "SET CHARACTER SET UTF8";
		$link->query($q);
		return $link;
	}
}
?>