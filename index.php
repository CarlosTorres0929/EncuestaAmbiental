<?php
include("controlador/agregarTransporte_cs.php");
?>

<!DOCTYPE html>
    <html lang="es">
        <head>
<style type="text/css">
    .grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 2fr 1fr;
}


</style>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
            <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <meta charset="utf-8" />
            <title>Encuesta</title>
            <link rel="shortcut icon" href="utilidades/logo.png" type="image/x-icon">
            </head>
            <body>
            <?php
            include("utilidades/header.php");
            ?> 
            <br>
   
            </div>
      <center>
       <img src="utilidades/banner.png"  width="1050px" height="350px" class="image fluid" alt="Responsive image">
   </center>
       <br>
      <div id="about"  class="container spacer about">
    <div class="row">
        <div class="col-md-12 mx-auto">
           <div class="card">
               <div class="card-body">
                   <form action="#"  name="agregar" id="agregar" method="POST" ">
                    <input type="hidden" name="agregar" id="agregar" value="1" />
                       <div class="form-group">
                       <input type="text" class="form-control" name="cedula" id="cedula" required="Este Campo es Obligatorio" placeholder="Ingrese Su Cedula" autofocus> 
                   </div>
                   <div class="form-group">
                    <center>
                       <label><strong style="color: black; font-size: 150%;">¿ COMO TE MOVILIZASTE PARA VENIR AYER AL TRABAJO ?</strong></label> 
                       </center>
                   </div>
                   
                <div class="thumbnail">
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="busTrabajo" id="busTrabajo" value="1">
                <label class="custom-control-label" for="busTrabajo">
                    <img src="utilidades/bus.png" width="80px">
                    BUS
                </label>
                </div>
                 <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="sistema_metroTrabajo" id="sistema_metroTrabajo" value="1">
                <label class="custom-control-label" for="sistema_metroTrabajo">
                    <img src="utilidades/metro.png" width="80px">
                    SISTEMA METRO
                </label>
                </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" name="carroTrabajo" id="carroTrabajo" value="1">
                    <label class="custom-control-label" for="carroTrabajo">
                    <img src="utilidades/carro.png" width="80px">
                        CARRO
                    </label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" name="motoTrabajo" id="motoTrabajo" value="1">
                    <label class="custom-control-label" for="motoTrabajo">
                    <img src="utilidades/moto.png" width="80px">
                    MOTO
                    </label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" name="carro_compartidoTrabajo" id="carro_compartidoTrabajo" value="1">
                    <label class="custom-control-label" for="carro_compartidoTrabajo">
                    <img src="utilidades/carrocompar.png" width="80px">
                    CARRO COMPARTIDO
                    </label>
                    </div>
                    </div>

                
                <div class="thumbnail">
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="moto_compartidaTrabajo" id="moto_compartidaTrabajo" value="1">
                <label class="custom-control-label" for="moto_compartidaTrabajo">
                <img src="utilidades/motocompar.png" width="80px">
                MOTO COMPARTIDA
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="bicicletaTrabajo" id="bicicletaTrabajo" value="1">
                <label class="custom-control-label" for="bicicletaTrabajo">
                <img src="utilidades/bici.png" width="80px">
                BICICLETA
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="caminarTrabajo" id="caminarTrabajo" value="1">
                <label class="custom-control-label" for="caminarTrabajo">
                    <img src="utilidades/caminando.png" width="80px">
                CAMINAR
                </label>
                </div>

                 <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="vehiculo_electricoTrabajo" id="vehiculo_electricoTrabajo" value="1">
                <label class="custom-control-label" for="vehiculo_electricoTrabajo">
                    <img src="utilidades/carroelect.png" width="80px">
                VEHICULO ELECTRICO
                </label>
                </div>
                </div>
                
                <div class="thumbnail">
                <div class="custom-control custom-checkbox custom-control-inline">  
                <input type="checkbox" class="custom-control-input" name="diasincarro_trabajo" id="diasincarro_trabajo" value="1">
                <label class="custom-control-label" for="diasincarro_trabajo">
                <img src="utilidades/diasincarro.png" width="80px">
                DIA SIN CARRO
                </label> 
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">  
                <input type="checkbox" class="custom-control-input" name="diasinmoto_trabajo" id="diasinmoto_trabajo" value="1">
                <label class="custom-control-label" for="diasinmoto_trabajo">
                <img src="utilidades/diasinmoto.png" width="80px">
                DIA SIN MOTO
                </label> 
                </div>

               <div class="md-form form-group mt-5">
                <input type="text" class="form-control" id="otro_trabajo" name="otro_trabajo" placeholder="OTRO">
                </div>
                </div>
                <br><br>
              

                <div class="form-group">
                <center>
                <label><strong style="color: black; font-size: 150%;">¿ COMO TE MOVILIZASTE AYER PARA IR A TU HOGAR ?</strong></label> 
                </center>
                </div>

                <div class="thumbnail">
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="busHogar" id="busHogar" value="1">
                <label class="custom-control-label" for="busHogar" >
                <img src="utilidades/bus.png" width="80px">
                BUS
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="sistema_metroHogar" id="sistema_metroHogar" value="1">
                <label class="custom-control-label" for="sistema_metroHogar">
                <img src="utilidades/metro.png" width="80px">
                SISTEMA METRO
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="carroHogar" id="carroHogar" value="1">
                <label class="custom-control-label" for="carroHogar">
                <img src="utilidades/carro.png" width="80px">
                CARRO
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="motoHogar" id="motoHogar" value="1">
                <label class="custom-control-label" for="motoHogar">
                <img src="utilidades/moto.png" width="80px">
                MOTO
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="carro_compartidoHogar" id="carro_compartidoHogar" value="1">
                <label class="custom-control-label" for="carro_compartidoHogar">
                <img src="utilidades/carrocompar.png" width="80px">
                CARRO COMPARTIDO
                </label>
                </div>
                </div>
                
                <div class="thumbnail">
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="moto_compartidaHogar" id="moto_compartidaHogar" value="1">
                <label class="custom-control-label" for="moto_compartidaHogar">
                <img src="utilidades/motocompar.png" width="80px">
                MOTO COMPARTIDA
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="bicicletaHogar" id="bicicletaHogar" value="1">
                <label class="custom-control-label" for="bicicletaHogar">
                <img src="utilidades/bici.png" width="80px">
                BICICLETA
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="caminarHogar" id="caminarHogar" value="1">
                <label class="custom-control-label" for="caminarHogar">
                <img src="utilidades/caminando.png" width="80px">
                CAMINAR
                </label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="vehiculo_electricoHogar" id="vehiculo_electricoHogar" value="1">
                <label class="custom-control-label" for="vehiculo_electricoHogar">
                <img src="utilidades/carroelect.png" width="80px">
                VEHICULO ELECTRICO
                </label>
                </div>
                </div>

                <div class="thumbnail">
                <div class="custom-control custom-checkbox custom-control-inline">  
                <input type="checkbox" class="custom-control-input" name="diasincarro_hogar" id="diasincarro_hogar" value="1">
                <label class="custom-control-label" for="diasincarro_hogar">
                <img src="utilidades/diasincarro.png" width="80px">
                DIA SIN CARRO
                </label> 
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">  
                <input type="checkbox" class="custom-control-input" name="diasinmoto_hogar" id="diasinmoto_hogar" value="1">
                <label class="custom-control-label" for="diasinmoto_hogar">
                <img src="utilidades/diasinmoto.png" width="80px">
                DIA SIN MOTO
                </label> 
                </div>
                  <!-- Material input -->
                <div class="md-form form-group mt-5">
                <input type="text" class="form-control" id="otro_hogar" name="otro_hogar" placeholder="OTRO">
                </div>
                </div>

              
                
                  <br>
                  <br>
                   
                
                <br>
                <br>
                <center>
                <input class="btn btn-lg btn-primary" type="submit" value="Enviar" href="index.php"/>
                <input class="btn btn-secondary btn-lg active" type="reset" value="Limpiar"/>
                </center>
                   </form>
               </div>
           </div> 
        </div>
    </div>
</div>

    <br>    
        <h1 align="center" style="color: #340e04; ">Gracias Guardián Ambiental</h1>
<br>
        <?php include("utilidades/footer.php");?>
    </body>
    </html>

    