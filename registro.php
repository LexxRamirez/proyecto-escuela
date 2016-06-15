<?php
    require("conexion.php");
?>
<!DOCTYPE html>
<html leng="utf-8">
<head>
<title>..::CE</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
</head>
<body>
<div id="mainwrap">	
    <div id="contenedor-sup" style="width:900px; margin: auto;">
    <h3>FICHA DE MATRICULA</h3>
    <h5><label>Centro Escolar Canton "La Canoa". Codigo: 13072 Distrito: 12-05</label></h5>
    <form>
    <table >
        <tr>
            <td width="200px">
                <label>Año:</label>
            </td>
            <td>
                <input type="text" name="anho" class="form-control" size="100%">
            </td>
        </tr>
        <tr>
            <td>
                <label>Grado: </label>
            </td>
            <td>
                <select name="grado" onchange="llenar()" id="grado" class="form-control">
                    <option value="">Seleccione</option>
                    <?php
                    $query=mysql_query("SELECT * FROM grado");
                    while($row=mysql_fetch_array($query))
                    {
                        echo "<option value='".$row[0]."'>".$row[1]."</option> ";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Matricula numero:</label>
            </td>
            <td>
                <input type="text" name="matriculaN" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Nombre del alumno(a):</label>
            </td>
            <td>
                <input type="text" name="nombre" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>NIE</label>
            </td>
            <td>
                <input type="text" name="nie" class="form-control">
            </td>
        </tr>
        <tr>
            <td width="200px">
                <label>Fecha de nacimiento:</label>
            </td>
            <td>
                <input type="text" name="fecha" class="form-control" size="36px">
            </td>
         </tr>
         <tr>
            <td>
                <label>Edad:</label>
            </td>
            <td>
                <input type="text" name="edad" class="form-control" size="37px">
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>
                <label>Año en el que estudio el ultimo grado:</label>
            </td>
            <td>
                <input type="text" name="ultimo" size="12px" class="form-control">
            </td>
            <td style=" width:200px">
                <label>Lugar de residencia:</label>
            </td>
            <td style=" width:200px">
               <select name="residencia" class="form-control">
                <option value="">Seleccione</option>
                <option value="rural">Rural</option>
                <option value="urbana">Urbana</option>
               </select> 
            </td>
        </tr>
            
        </tr>
        <tr>
            <td style="width:200px">
                <label >Municipio en el que esudio el ultimo año:</label>
            </td>
            <td>
                <input type="text" name="Muniultimo" class="form-control" size="40px">
            </td>
            <td>
                <label>Codigo:</label>
            </td>
            <td>
                <input type="text" name="codigo" class="form-control" size="40px">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tipo de discapacidad:</label>
            </td>
            <td>
                <input type="text" name="discapacidad" class="form-control" size="40px">
            </td>
            <td>
                <label>Tipo de educacion especial:</label>
            </td>
            <td>
                <input type="text" name="eduEspecial" class="form-control" size="40px">
            </td>
        </tr>
        <tr><td><br></td></tr>
        
    </table>
    <button class="btn btn-primary">Guardar</button>
</form>
    </div>
    <br>
        </div>
    </div>
</div>
</body>
</html>
