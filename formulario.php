<?php
include ("conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>..::CE</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>         --> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>  
    <script>
         $(document).ready(function() {
         $('select').material_select();
      });
    </script>
  </head>
  <body>
    <div style="width:500px; margin:auto">
    <form align="center" class="col s12">
      <h3 align="center">Registro de Docente</h3>
      <br>
     <div class="row">
      <div class="input-field col s12">
        <input name="nombre" id="nombre" type="text" class="validate"> 
        <label  for="first_name2">Nombre:</label> 
      </div>
      <div class="input-field col s12">
        <input name="direccion" id="direccion" size="50px" type="text" class="validate"> 
        <label class="active" for="first_name">Dirección:</label> 
      </div>
      <div class="input-field col s12">
        <input name="telefono" id="telefono" size="50px" type="text" class="validate"> 
        <label class="active" for="first_name">Telefono:</label> 
      </div>
      <div class="input-field col s12">
        <input name="dui" id="dui" type="text" class="validate"> 
        <label class="active" for="last_name">DUI:</label> 
      </div>
      <div class="row">
               <label>Grado:</label>
               <select>
                  <option value="" disabled selected>Seleccione</option>
                  <?php
                    $query=mysql_query("SELECT * FROM grado");
                    while($row=mysql_fetch_array($query))
                    {
                      echo "<option value='".$row[0]."'>".$row[1]."</option> ";
                      }
                    ?>
               </select>               
            </div>
       <div class="row">
      <div class="input-field col s12">
        <input name="password"type="password" type="text" class="validate"> 
        <label class="active" for="password">Contraseña:</label> 
      </div>
      </div>
      </div>
    </form>
    </div>

    
  </body>
</html>
