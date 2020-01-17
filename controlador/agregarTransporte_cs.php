<?php
//////////////////////////////
//                      ♠ Crepes & Waffles ♠
//    Author:  Carlos Daniel Torres  < ct059489@gmail.com >
///////////////////////////

// incluimos la conexion con la base de datos y la clase con la funcion sql
include_once("config/conexion.php");
include_once("clase/Transporte.class.php");

// generamos un nuevo objeto de la clase Transporte
$tph = new Transporte(); 
// creamos la condicion para nuestro formulario agregar		
if(isset($_POST['agregar']) && $_POST['agregar'] == 1)
{
	$total = 0;  // creamos una variable para realizar las validaciones con el puntaje

// creamos las condiciones para cada campo que llenaremos en el formulario
	@$dataTrabajo->cedula = mysqli_real_escape_string(@$conexion,@$_POST['cedula']);

	
	if(mysqli_real_escape_string($conexion,@$_POST['busTrabajo']) == 1){
		$dataTrabajo->bus = mysqli_real_escape_string(@$conexion,@$_POST['busTrabajo']);
		$total += 1;
	}else{
		$dataTrabajo->bus = 0;
	}

	
	if(mysqli_real_escape_string($conexion,@$_POST['sistema_metroTrabajo']) == 1){
		$dataTrabajo->sistema_metro = mysqli_real_escape_string($conexion,@$_POST['sistema_metroTrabajo']);
		$total += 2;
		
	}else{
		$dataTrabajo->sistema_metro = 0;
	}

	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carroTrabajo']) == 1){
		$dataTrabajo->carro    		= mysqli_real_escape_string($conexion,@$_POST['carroTrabajo']);
		$total += 1;
	}else{
		$dataTrabajo->carro = 0;
	}

	
	if(mysqli_real_escape_string(@$conexion,@$_POST['motoTrabajo']) == 1){
		$dataTrabajo->moto  = mysqli_real_escape_string($conexion,@$_POST['motoTrabajo']);
		$total += 1;
	}else{
		$dataTrabajo->moto = 0;
	}

	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carro_compartidoTrabajo']) == 1){
		$dataTrabajo->carro_compartido = mysqli_real_escape_string($conexion,@$_POST['carro_compartidoTrabajo']);
		$total += 1;
	}else{
		$dataTrabajo->carro_compartido = 0;
	}

	
	if(mysqli_real_escape_string($conexion,@$_POST['moto_compartidaTrabajo']) == 1){
		$dataTrabajo->moto_compartida = mysqli_real_escape_string($conexion,@$_POST['moto_compartidaTrabajo']);
		$total += 1;
	}else{
		$dataTrabajo->moto_compartida = 0;
	}


	if(mysqli_real_escape_string($conexion,@$_POST['bicicletaTrabajo']) == 1){
			$dataTrabajo->bicicleta = mysqli_real_escape_string($conexion,@$_POST['bicicletaTrabajo']);
			$total += 8;
	}else{
		$dataTrabajo->bicicleta = 0;
	} 		


	if(mysqli_real_escape_string(@$conexion,@$_POST['caminarTrabajo']) == 1){
		$dataTrabajo->caminar = mysqli_real_escape_string($conexion,@$_POST['caminarTrabajo']);
		$total += 10;
	}else{
		$dataTrabajo->caminar = 0;
	}

	if (mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoTrabajo']) == 1){	
		$dataTrabajo->vehiculo_electrico = mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoTrabajo']);
		$total += 8;
	}else{
		$dataTrabajo->vehiculo_electrico = 0;
	}				
	
	if (mysqli_real_escape_string($conexion,@$_POST['diasincarro_trabajo']) == 1){	
		$dataTrabajo->diasincarro = mysqli_real_escape_string($conexion,@$_POST['diasincarro_trabajo']);
		$total += 9;
	}else{
		$dataTrabajo->diasincarro = 0;
	}

	if (mysqli_real_escape_string($conexion,@$_POST['diasinmoto_trabajo']) == 1){	
		$dataTrabajo->diasinmoto = mysqli_real_escape_string($conexion,@$_POST['diasinmoto_trabajo']);
		$total += 9;
	}else{
		$dataTrabajo->diasinmoto = 0;
	}

			
	$dataTrabajo->otro = mysqli_real_escape_string($conexion,@$_POST['otro_trabajo']);

// creamos las condiciones para el puntaje de cada encuesta

	if($dataTrabajo->sistema_metro  && $dataTrabajo->caminar ){
		$total = 4;
	}
	if($dataTrabajo->sistema_metro  && $dataTrabajo->bicicleta ){
		$total = 4;
	}
	if($dataTrabajo->sistema_metro  && $dataTrabajo->carro){
		$total = 2;
	}
	if($dataTrabajo->sistema_metro  && $dataTrabajo->moto ){
		$total = 2;
	}
	if($dataTrabajo->sistema_metro  && $dataTrabajo->bus ){
		$total = 3;
	}
	if($dataTrabajo->sistema_metro  && $dataTrabajo->carro_compartido ){
		$total = 2;
	}

	if($dataTrabajo->bus  && $dataTrabajo->caminar ){
		$total = 3;
	}
	if($dataTrabajo->bus && $dataTrabajo->bicicleta ){
		$total = 3;
	}

	if($dataTrabajo->bus && $dataTrabajo->carro ){
		$total = 1;
	}

	if($dataTrabajo->bus && $dataTrabajo->moto ){
		$total = 1;
	}

	if($dataTrabajo->bus && $dataTrabajo->carro_compartido ){
		$total = 2;
	}

	if($dataTrabajo->bus && $dataTrabajo->moto_compartida ){
		$total = 2;
	}

	if($dataTrabajo->bicicleta && $dataTrabajo->caminar ){
		$total = 9;
	}

	if($dataTrabajo->bicicleta && $dataTrabajo->moto ){
		$total = 2;
	}

	if($dataTrabajo->bicicleta && $dataTrabajo->carro ){
		$total = 2;
	}

	if($dataTrabajo->bicicleta && $dataTrabajo->carro_compartido ){
		$total = 2;
	}

	if($dataTrabajo->bicicleta && $dataTrabajo->moto_compartida ){
		$total = 2;
	}

	if($dataTrabajo->caminar && $dataTrabajo->moto ){
					$total = 2;
				}

		if($dataTrabajo->caminar && $dataTrabajo->carro ){
					$total = 2;
				}
		if($dataTrabajo->caminar && $dataTrabajo->carro_compartido ){
					$total = 2;
				}

		if($dataTrabajo->carro && $dataTrabajo->moto ){
					$total = 1;
				}
		if($dataTrabajo->carro && $dataTrabajo->carro_compartido ){
					$total = 2;
				}
		if($dataTrabajo->moto && $dataTrabajo->carro_compartido ){
					$total = 2;
				}

		if($dataTrabajo->moto && $dataTrabajo->moto_compartida ){
					$total = 2;
				}

	$dataTrabajo->total = $total;


	$totalh = 0;

	@$dataHogar->cedula = mysqli_real_escape_string(@$conexion,@$_POST['cedula']);

	if(mysqli_real_escape_string(@$conexion,@$_POST['busHogar']) == 1){
		$dataHogar->bus = mysqli_real_escape_string($conexion,$_POST['busHogar']);
		$totalh += 1;
	}else{
		$dataHogar->bus = 0;
	}
	
	if(mysqli_real_escape_string($conexion,@$_POST['sistema_metroHogar']) == 1){
		$dataHogar->sistema_metro = mysqli_real_escape_string($conexion,$_POST['sistema_metroHogar']);
		$totalh += 2;
	}else{
		$dataHogar->sistema_metro = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carroHogar']) == 1){
		$dataHogar->carro = mysqli_real_escape_string($conexion,$_POST['carroHogar']);
		$totalh += 1;
	}else{
		$dataHogar->carro = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['motoHogar']) == 1){
		$dataHogar->moto = mysqli_real_escape_string($conexion,$_POST['motoHogar']);
		$totalh += 1;
	}else{
		$dataHogar->moto = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['carro_compartidoHogar']) == 1){
		$dataHogar->carro_compartido = mysqli_real_escape_string($conexion,$_POST['carro_compartidoHogar']);
		$totalh += 1;
	}else{
		$dataHogar->carro_compartido = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['moto_compartidaHogar']) == 1){
		$dataHogar->moto_compartida = mysqli_real_escape_string($conexion,$_POST['moto_compartidaHogar']);
		$totalh += 1;
	}else{
		$dataHogar->moto_compartida = 0;
	}
	
	if(mysqli_real_escape_string(@$conexion,@$_POST['bicicletaHogar']) == 1){
		$dataHogar->bicicleta = mysqli_real_escape_string($conexion,$_POST['bicicletaHogar']);
		$totalh += 8;
	}else{
		$dataHogar->bicicleta = 0;
	}
	
	if(mysqli_real_escape_string($conexion,@$_POST['caminarHogar']) == 1){
		$dataHogar->caminar = mysqli_real_escape_string($conexion,$_POST['caminarHogar']);
		$totalh += 10;
	}else{
		$dataHogar->caminar = 0;
	}

	if (mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoHogar']) == 1){
		
		$dataHogar->vehiculo_electrico = mysqli_real_escape_string($conexion,@$_POST['vehiculo_electricoHogar']);
		$totalh += 8;
	}else{
		$dataHogar->vehiculo_electrico = 0;
	}

		if (mysqli_real_escape_string($conexion,@$_POST['diasincarro_hogar']) == 1){	
		$dataHogar->diasincarro = mysqli_real_escape_string($conexion,@$_POST['diasincarro_hogar']);
		$totalh += 9;
	}else{
		$dataHogar->diasincarro = 0;
	}

	if (mysqli_real_escape_string($conexion,@$_POST['diasinmoto_hogar']) == 1){	
		$dataHogar->diasinmoto = mysqli_real_escape_string($conexion,@$_POST['diasinmoto_hogar']);
		$totalh += 9;
	}else{
		$dataHogar->diasinmoto = 0;
	}

		$dataHogar->otro = mysqli_real_escape_string($conexion,@$_POST['otro_hogar']);

		if($dataHogar->sistema_metro  && $dataHogar->caminar ){
		$totalh = 4;
		}
		if($dataHogar->sistema_metro  && $dataHogar->bicicleta ){
			$totalh = 4;
		}
		if($dataHogar->sistema_metro  && $dataHogar->carro){
			$totalh = 2;
		}
		if($dataHogar->sistema_metro  && $dataHogar->moto ){
			$totalh = 2;
		}
		if($dataHogar->sistema_metro  && $dataHogar->bus ){
			$totalh = 3;
		}
		if($dataHogar->sistema_metro  && $dataHogar->carro_compartido ){
			$totalh = 2;
		}
		if($dataHogar->sistema_metro  && $dataHogar->moto_compartida ){
			$totalh = 2;
		}

		if($dataHogar->bus  && $dataHogar->caminar ){
			$totalh = 3;
		}
		if($dataHogar->bus && $dataHogar->bicicleta ){
			$totalh = 3;
		}

		if($dataHogar->bus && $dataHogar->carro ){
			$totalh = 1;
		}

		if($dataHogar->bus && $dataHogar->moto ){
			$totalh = 1;
		}

		if($dataHogar->bus && $dataHogar->carro_compartido ){
			$totalh = 2;
		}

		if($dataHogar->bus && $dataHogar->moto_compartida ){
			$totalh = 2;
		}

		if($dataHogar->bicicleta && $dataHogar->caminar ){
			$totalh = 9;
		}

		if($dataHogar->bicicleta && $dataHogar->moto ){
					$totalh = 2;
				}

		if($dataHogar->bicicleta && $dataHogar->carro ){
					$totalh = 2;
				}

		if($dataHogar->bicicleta && $dataHogar->carro_compartido ){
					$totalh = 2;
				}
		if($dataHogar->bicicleta && $dataHogar->moto_compartida ){
					$totalh = 2;
				}

		if($dataHogar->caminar && $dataHogar->moto ){
					$totalh = 2;
				}

		if($dataHogar->caminar && $dataHogar->carro ){
					$totalh = 2;
				}
		if($dataHogar->caminar && $dataHogar->carro_compartido ){
					$totalh = 2;
				}
		if($dataHogar->caminar && $dataHogar->moto_compartida ){
					$totalh = 2;
				}

		if($dataHogar->carro && $dataHogar->moto ){
					$totalh = 1;
				}
		if($dataHogar->carro && $dataHogar->carro_compartido ){
					$totalh = 2;
				}
		if($dataHogar->carro && $dataHogar->moto_compartida ){
					$totalh = 2;
				}
		if($dataHogar->moto && $dataHogar->carro_compartido ){
					$totalh = 2;
				}
		if($dataHogar->moto && $dataHogar->moto_compartida ){
					$totalh = 2;
				}


		$dataHogar->totalh = $totalh;
	
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