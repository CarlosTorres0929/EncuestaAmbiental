<?php
include("controlador/agregarTransporte_cs.php");
?>

<!DOCTYPE html>
    <html lang="es">
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


            <meta charset="utf-8" />
            <title>Guardian Ambiental</title>
       
        </head>
        <body>
        <?php include("utilidades/header.php")?>
       <br>
       <center>
       <img src="utilidades/banner.png" width="800px" height="300px"  class="img-fluid" alt="Responsive image">
       </center>
       <br>
    <div class="row">
        <div class="col-md-7 mx-auto">
           <div class="card">
               <div class="card-body">
                   <form action="" name="agregar" id="agregar" method="POST">
                    <input type="hidden" name="agregar" id="agregar" value="1" />

                   <div class="form-group">
                       <label><strong>¿ COMO TE MOVILIZASTE PARA VENIR AYER AL TRABAJO ?</strong></label> 
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" name="cedula" id="cedula" required="Este Campo es Obligatorio" placeholder="Ingrese Su Cedula" autofocus> 
                   </div>
                <div class="custom-control custom-checkbox custom-control-inline">

                <input type="checkbox" class="custom-control-input" name="busTrabajo" id="busTrabajo" value="1">
                <label class="custom-control-label" for="busTrabajo">Bus</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="sistema_metroTrabajo" id="sistema_metroTrabajo" value="1">
                <label class="custom-control-label" for="sistema_metroTrabajo">Sistema Metro</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline" >
                <input type="checkbox" class="custom-control-input" name="carroTrabajo" id="carroTrabajo" value="1">
                <label class="custom-control-label" for="carroTrabajo">Carro</label>
                </div>
                
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="motoTrabajo" id="motoTrabajo" value="1">
                <label class="custom-control-label" for="motoTrabajo">Moto</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="carro_compartidoTrabajo" id="carro_compartidoTrabajo" value="1">
                <label class="custom-control-label" for="carro_compartidoTrabajo">Carro Compartido</label>
                </div>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="moto_compartidaTrabajo" id="moto_compartidaTrabajo" value="1">
                <label class="custom-control-label" for="moto_compartidaTrabajo">Moto Compartida</label>
                </div>
                
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="bicicletaTrabajo" id="bicicletaTrabajo" value="1">
                <label class="custom-control-label" for="bicicletaTrabajo">Bicicleta</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="caminarTrabajo" id="caminarTrabajo">
                <label class="custom-control-label" for="caminarTrabajo">Caminar</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="vehiculo_electricoTrabajo" id="vehiculo_electricoTrabajo">
                <label class="custom-control-label" for="vehiculo_electricoTrabajo">Vehiculo Electrico</label>
                </div>
                <br><br>
              

                  <div class="form-group">
                       <label><strong>¿ COMO TE MOVILIZASTE AYER PARA IR A TU HOGAR ?</strong></label> 
                   </div>
                     <div class="custom-control custom-checkbox custom-control-inline">

                <input type="checkbox" class="custom-control-input" name="busHogar" id="busHogar" value="1">
                <label class="custom-control-label" for="busHogar" >Bus</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="sistema_metroHogar" id="sistema_metroHogar" value="1">
                <label class="custom-control-label" for="sistema_metroHogar">Sistema Metro</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="carroHogar" id="carroHogar" value="1">
                <label class="custom-control-label" for="carroHogar">Carro</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="motoHogar" id="motoHogar" value="1">
                <label class="custom-control-label" for="motoHogar">Moto</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="carro_compartidoHogar" id="carro_compartidoHogar" value="1">
                <label class="custom-control-label" for="carro_compartidoHogar">Carro Compartido</label>
                </div>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="moto_compartidaHogar" id="moto_compartidaHogar" value="1">
                <label class="custom-control-label" for="moto_compartidaHogar">Moto Compartida</label>
                </div>
                
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="bicicletaHogar" id="bicicletaHogar" value="1">
                <label class="custom-control-label" for="bicicletaHogar">Bicicleta</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="caminarHogar" id="caminarHogar" value="1">
                <label class="custom-control-label" for="caminarHogar">Caminar</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="vehiculo_electricoHogar" id="vehiculo_electricoHogar" value="1">
                <label class="custom-control-label" for="vehiculo_electricoHogar">Vehiculo Electrico</label>
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


    <br>    
        <h1 align="center" style="color: #340e04; ">Gracias Guardián Ambiental</h1>
<br>
        <?php include("utilidades/footer.php");?>
    </body>
    </html>

    