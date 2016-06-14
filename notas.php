<?php
require("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>..::CE</title>
	<script type="text/javascript">
		function llenar()
		{
			var s = document.getElementById("asignatura").value;
			var serc = document.getElementById("grado").value;
			if (serc == "")
			{
				//alert("No ha seleccionado un grado");
			}
			if (s == "")
			{
				//alert("No ha seleccionado una materia");
			}
			
				if (window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
				else 
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
					if (xmlhttp.readyState ==4 & xmlhttp.status == 200)
					{
						document.getElementById("nota_general").innerHTML =xmlhttp.responseText;
					}
				}
				xmlhttp.open("GET", "traer1.php?q="+serc+"&s="+s,true);
				xmlhttp.send();
			}
	</script>
</head>
<body>
	<style>
	input[type=number]::-webkit-outer-spin-button,
	input[type=number]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	input[type=number] {
		-moz-appearance:textfield;
	}
	</style>
	<div id="contenedor" style="width:1024px; margin: auto;">
	<h3 style="text-align:center;"><label>Cuadro de registro de evaluaciones de los aprendizajes por trimestre</label></h3>
	<table style="margin:auto;">
		<tr>
			<td>
				<label>Asignatura: </label>
			</td>
			<td>
				<select name="asignatura" id="asignatura" onchange="llenar()">
					<option value="">Seleccione</option>
					<?php
					$querys=mysql_query("SELECT * FROM materia");
					while($rows=mysql_fetch_array($querys))
					{
						echo "<option value='".$rows[0]."'>".$rows[1]."</option> ";
						}
					?>
				</select>
			</td>
			<td>
				<label>Grado: </label>
			</td>
			<td>
				<select name="grado" onchange="llenar()" id="grado">
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
	</table>
	<table style="margin:auto;">
		<tr>
			<td>
				<label>Profesor:</label>
			</td>
			<td>
				<input name="docente" type="text">
			</td>
		</tr>
	</table>
	<br>
	<table style="border: 1px solid black" border="1">
		<tr>
			<td rowspan="4" style="width: 25px;">
				N°
			</td>
			<td rowspan="4" style="width: 284px;">
				<label>Nombre de los/las alumnos/as</label>
			</td>
			<td colspan="4">
				<label>Actividad1 (35%)</label>
			</td>
			<td colspan="4">
				<label>Actividad2 (35%)</label>
			</td>
			<td colspan="4">
				<label>Actividad3 (30%)</label>
			</td>
			<td colspan="1" rowspan="4" style="width: 55px;">
				<label>Nota final</label>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<label>Actividad integradora</label>
			</td>
			<td rowspan="3">
				<label>Total</label>
			</td>
			<td colspan="3">
				<label>Actividad Cotidiana</label>
			</td>
			<td rowspan="3">
				<label>Total</label>
			</td>
			<td colspan="3">
				<label>Actividad Examenes</label>
			</td>
			<td rowspan="3">
				<label>Total</label>
			</td>
		</tr>
		<tr>
			<td style="width: 45px;">
				<label>R1</label>
			</td>
			<td style="width: 45px;">
				<label>R2</label>
			</td>
			<td style="width: 45px;">
				<label>R3</label>
			</td>
			<td style="width: 45px;">
				<label>R1</label>
			</td>
			<td style="width: 45px;">
				<label>R2</label>
			</td>
			<td style="width: 45px;">
				<label>R3</label>
			</td>
			<td style="width: 45px;">
				<label>R1</label>
			</td>
			<td style="width: 45px;">
				<label>R2</label>
			</td>
			<td style="width: 45px;">
				<label>R3</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>10%</label>
			</td>
			<td>
				<label>10%</label>
			</td>
			<td>
				<label>15%</label>
			</td>
			<td>
				<label>10%</label>
			</td>
			<td>
				<label>10%</label>
			</td>
			<td>
				<label>15%</label>
			</td>
			<td>
				<label>10%</label>
			</td>
			<td>
				<label>10%</label>
			</td>
			<td>
				<label>10%</label>
			</td>
		</tr>
	</table>
	</div>
	<div id="nota_general" style="width:1024px; margin: auto;">
		</div>
</body>
</html>
