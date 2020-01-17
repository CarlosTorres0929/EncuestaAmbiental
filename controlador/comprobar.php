<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

<?php

require('config/conexion.php');
sleep(1);
if (isset($_POST)) {
    @$cedula = (string)$_POST['cedula'];
 
    @$result = $conexion->query(
        'SELECT * FROM empleados WHERE cedula = "'.strtolower($cedula).'"'
    );
 
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario no disponible.</div>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}
?>
<script type="text/javascript">
$(document).ready(function() {  
    $('#cedula').on('blur', function() {
        $('#result-cedula').html('<img src="images/loader.gif" />').fadeOut(1000);
 
        var cedula = $(this).val();       
        var dataString = 'cedula='+cedula;
 
        $.ajax({
            type: "POST",
            url: "comprobar.php",
            data: dataString,
            success: function(data) {
                $('#result-cedula').fadeIn(1000).html(data);
            }
        });
    });              
});    