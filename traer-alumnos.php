<?php
	include("conexion.php");

	$lista = $_GET["q"];
	$tabla ="<table style='width:100%; text-align:center;' class=\"table table-hover table-bordered\">
		<thead >
		<tr class=\"success\">
			<td rowspan=\"1\" style=\"width:70px;\">
				<label>N°</label>
			</td>
			<td rowspan=\"1\" style=\"width:500px;\">
				<label>Nombre de los/las alumnos/as</label>
			</td>
			<td colspan=\"1\" align=\"center\">
				<label>Aciones</label>
			</td>
		</tr>
		
		</thead>";
	
	$query=mysql_query("SELECT * FROM alumnos WHERE id_grado ='$lista'");
	while ($row = mysql_fetch_array($query)) {
		$tabla = $tabla."
			<tr>
				<td>".$row[0]."</td>
				<td>".$row[3]."</td>
				<td>
				<select style='width:70px;'>
				<option value=''>Menu</option>
				<option value='1' onclick='ver($row[0],1)'>Modificar</option>
				<option value='2' onclick='ver($row[0],2)'>Eliminar</option>
				</select>
				</td> 
			</tr>
		";

	}
	$compo = $compo."</table>";
	echo $tabla;
?>