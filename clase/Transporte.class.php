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
var $diasincarro;
var $diasinmoto;
var $otro;

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
		 $diasincarro = false;
		 $diasinmoto = false;
		 $otro = "";
	}

	////////////////////////////////////////////////////////////////////////////////////
	// agregarTransporte: Esta funcion es la responsable de agregar un transporte a la B.D
	////////////////////////////////////////////////////////////////////////////////////
	function agregarTransporte($dataTrabajo, $dataHogar, $conexion)
	{

		 $sql2 = "SELECT id_empleado FROM EMPLEADOS WHERE cedula = ".$dataTrabajo->cedula;
		
		 $consult = $conexion->query($sql2);
		 $data = array();
		 $i = 0;
		

		while($row=mysqli_fetch_array($consult))
		{
			@$data[$i]->id_empleado = $row['id_empleado'];

			$i++;				
		}	
		
		if($data[0]->id_empleado != null){
			
		$sql1 = "
		 INSERT INTO  transporte_trabajo (
		`id` ,
		`cedula` ,
		`id_empleado`,
		`bus` ,
		`sistema_metro` ,
		`carro`,
		`moto` ,
		`carro_compartido`,
		`moto_compartida`,
		`bicicleta`,
		`caminar`,
		`vehiculo_electrico`,
		`diasincarro`,
		`diasinmoto`,
		`otro`,
		`fecha_registro`,
		`total` 
		)
		VALUES (
		'NULL' , '".$dataTrabajo->cedula."','".$data[0]->id_empleado."','".$dataTrabajo->bus."', '".$dataTrabajo->sistema_metro."',  '".$dataTrabajo->carro."','".$dataTrabajo->moto."','".$dataTrabajo->carro_compartido."','".$dataTrabajo->moto_compartida."','".$dataTrabajo->bicicleta."','".$dataTrabajo->caminar."','".$dataTrabajo->vehiculo_electrico."','".$dataTrabajo->diasincarro."','".$dataTrabajo->diasinmoto."','".$dataTrabajo->otro."', '".date("Y-m-d")."', '".$dataTrabajo->total."')";
	
		$conexion->query($sql1);
		
		 $sql = "
		 INSERT INTO  transporte_hogar (
		`id` ,
		`cedula` ,
		`id_empleado`,
		`bus` ,
		`sistema_metro` ,
		`carro`,
		`moto` ,
		`carro_compartido`,
		`moto_compartida`,
		`bicicleta`,
		`caminar`,
		`vehiculo_electrico`,
		`diasincarro`,
		`diasinmoto`,
		`otro`,
		`fecha_registro` 
		)
		VALUES (
		'NULL' , '".$dataHogar->cedula."','".$data[0]->id_empleado."','".$dataHogar->bus."', '".$dataHogar->sistema_metro."',  '".$dataHogar->carro."','".$dataHogar->moto."','".$dataHogar->carro_compartido."','".$dataHogar->moto_compartida."','".$dataHogar->bicicleta."','".$dataHogar->caminar."','".$dataHogar->vehiculo_electrico."','".$dataHogar->diasincarro."','".$dataHogar->diasinmoto."','".$dataHogar->otro."', '".date("Y-m-d")."')";

		
		return $conexion->query($sql);
	}	
		
	}
}

?>