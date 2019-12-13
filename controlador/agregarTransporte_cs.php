<?php
//////////////////////////////
//                      ♠ Crepes & Waffles ♠
//    Author:  Carlos Daniel Torres  < ct059489@gmail.com >
///////////////////////////

include_once("config/conexion.php");
include_once("clase/Transporte.class.php");

$tph = new Transporte(); 

		
if(isset($_POST['agregar']) && $_POST['agregar'] == 1)
{

	@$dataTrabajo->cedula = mysqli_real_escape_string(@$conexion,@$_POST['cedula']);

	
	if(mysqli_real_escape_string($conexion,@$_POST['busTrabajo']) == 1){
		$dataTrabajo->bus = mysqli_real_escape_string(@$conexion,@$_POST['busTrabajo']);
	}else{
		$dataTrabajo->bus = 0;
	}

	
	if(mysqli_real_escape_string($conexion,@$_POST['sistema_metroTrabajo']) == 1){
		$dataTrabajo->sistema_metro = mysqli_real_escape_string($conexion,@$_POST['sistema_metroTrabajo']);
		
	}else{
		$dataTrabajo->sistema_metro = 0;
	}

	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carroTrabajo']) == 1){
		$dataTrabajo->carro    		= mysqli_real_escape_string($conexion,@$_POST['carroTrabajo']);
	}else{
		$dataTrabajo->carro = 0;
	}

	
	if(mysqli_real_escape_string(@$conexion,@$_POST['motoTrabajo']) == 1){
		$dataTrabajo->moto  = mysqli_real_escape_string($conexion,@$_POST['motoTrabajo']);
	}else{
		$dataTrabajo->moto = 0;
	}

	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carro_compartidoTrabajo']) == 1){
		$dataTrabajo->carro_compartido = mysqli_real_escape_string($conexion,@$_POST['carro_compartidoTrabajo']);
	}else{
		$dataTrabajo->carro_compartido = 0;
	}

	
	if(mysqli_real_escape_string($conexion,@$_POST['moto_compartidaTrabajo']) == 1){
		$dataTrabajo->moto_compartida = mysqli_real_escape_string($conexion,@$_POST['moto_compartidaTrabajo']);
	}else{
		$dataTrabajo->moto_compartida = 0;
	}


	if(mysqli_real_escape_string($conexion,@$_POST['bicicletaTrabajo']) == 1){
			$dataTrabajo->bicicleta = mysqli_real_escape_string($conexion,@$_POST['bicicletaTrabajo']);
	}else{
		$dataTrabajo->bicicleta = 0;
	} 		


	if(mysqli_real_escape_string(@$conexion,@$_POST['caminarTrabajo']) == 1){
		$dataTrabajo->caminar = mysqli_real_escape_string($conexion,@$_POST['caminarTrabajo']);
	}else{
		$dataTrabajo->caminar = 0;
	}

	if (mysqli_real_escape_string(@$conexion,@$_POST['vehiculo_electricoTrabajo']) == 1){
		$dataTrabajo->vehiculo_electrico = mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoTrabajo']);
	}else{
		$dataTrabajo->vehiculo_electrico = 0;
	}				
	

	@$dataHogar->cedula = mysqli_real_escape_string(@$conexion,@$_POST['cedula']);

	if(mysqli_real_escape_string(@$conexion,@$_POST['busHogar']) == 1){
		$dataHogar->bus = mysqli_real_escape_string($conexion,$_POST['busHogar']);
	}else{
		$dataHogar->bus = 0;
	}
	
	if(mysqli_real_escape_string($conexion,@$_POST['sistema_metroHogar']) == 1){
		$dataHogar->sistema_metro = mysqli_real_escape_string($conexion,$_POST['sistema_metroHogar']);
	}else{
		$dataHogar->sistema_metro = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carroHogar']) == 1){
		$dataHogar->carro = mysqli_real_escape_string($conexion,$_POST['carroHogar']);
	}else{
		$dataHogar->carro = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['motoHogar']) == 1){
		$dataHogar->moto = mysqli_real_escape_string($conexion,$_POST['motoHogar']);
	}else{
		$dataHogar->moto = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carro_compartidoHogar']) == 1){
		$dataHogar->carro_compartido = mysqli_real_escape_string($conexion,$_POST['carro_compartidoHogar']);
	}else{
		$dataHogar->carro_compartido = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['moto_compartidaHogar']) == 1){
		$dataHogar->moto_compartida = mysqli_real_escape_string($conexion,$_POST['moto_compartidaHogar']);
	}else{
		$dataHogar->moto_compartida = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['bicicletaHogar']) == 1){
		$dataHogar->bicicleta = mysqli_real_escape_string($conexion,$_POST['bicicletaHogar']);
	}else{
		$dataHogar->bicicleta = 0;
	}
	
	if(mysqli_real_escape_string($conexion,@$_POST['caminarHogar']) == 1){
		$dataHogar->caminar = mysqli_real_escape_string($conexion,$_POST['caminarHogar']);
	}else{
		$dataHogar->caminar = 0;
	}

	if (mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoHogar']) == 1){
		
		$dataHogar->vehiculo_electrico = mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoHogar']);
	}else{
		$dataHogar->vehiculo_electrico = 0;
	}

	if($tph->agregarTransporte($dataTrabajo,$dataHogar, $conexion))
	{	
		echo "<script>alert('Transporte agregado exitosamente')</script>";	
		echo "<script>window.location.href='index.php'</script>";		
				
	}
	else
	{
		echo "<script>alert('El Transporte no se pudo agregar')</script>";	
		echo "<script>window.location.href='index.php'</script>";
		
	}
	
}
?>