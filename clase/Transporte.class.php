<?php
//////////////////////////////
//                      ♠ Crepes & Waffles ♠
//    Author:  Carlos Daniel Torres  < ct059489@gmail.com >
///////////////////////////

class Transporte
{
	
var $id;
var $cedula_hogar;
var $bus;
var $sistema_metro;
var $carro;
var $moto;
var $carro_compartido;
var $moto_compartida;
var $bicicleta;
var $caminar;
var $vehiculo_electrico;

	function Transporte()
	{
		 $id = 0;
		 $cedula = 0;
		 $bus = false;
		 $sistema_metro = false;
		 $carro = false;
		 $moto = false;
		 $carro_compartido = false;
		 $moto_compartida = false;
		 $bicicleta = false;
		 $caminar = false;
		 $vehiculo_electrico = false;
	}

	////////////////////////////////////////////////////////////////////////////////////
	// agregarTransporte: Esta funcion es la responsable de agregar un transporte a la B.D
	////////////////////////////////////////////////////////////////////////////////////
	function agregarTransporte($dataTrabajo, $dataHogar, $conexion)
	{

		$sql1 = "
		 INSERT INTO  transporte_trabajo (
		`id` ,
		`cedula` ,
		`bus` ,
		`sistema_metro` ,
		`carro`,
		`moto` ,
		`carro_compartido`,
		`moto_compartida`,
		`bicicleta`,
		`caminar`,
		`vehiculo_electrico`,
		`fecha_registro`  
		)
		VALUES (
		'NULL' , '".$dataTrabajo->cedula."','".$dataTrabajo->bus."', '".$dataTrabajo->sistema_metro."',  '".$dataTrabajo->carro."','".$dataTrabajo->moto."','".$dataTrabajo->carro_compartido."','".$dataTrabajo->moto_compartida."','".$dataTrabajo->bicicleta."','".$dataTrabajo->caminar."','".$dataTrabajo->vehiculo_electrico."', '".date("Y-m-d")."')";
	
		$conexion->query($sql1);
		
		 $sql = "
		 INSERT INTO  transporte_hogar (
		`id` ,
		`cedula` ,
		`bus` ,
		`sistema_metro` ,
		`carro`,
		`moto` ,
		`carro_compartido`,
		`moto_compartida`,
		`bicicleta`,
		`caminar`,
		`vehiculo_electrico`,
		`fecha_registro` 
		)
		VALUES (
		'NULL' , '".$dataHogar->cedula."','".$dataHogar->bus."', '".$dataHogar->sistema_metro."',  '".$dataHogar->carro."','".$dataHogar->moto."','".$dataHogar->carro_compartido."','".$dataHogar->moto_compartida."','".$dataHogar->bicicleta."','".$dataHogar->caminar."','".$dataHogar->vehiculo_electrico."', '".date("Y-m-d")."')";

		
		return $conexion->query($sql);
		
		
	}
}

?>