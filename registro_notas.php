<?php
require("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>..::CE</title>
</head>
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
<script type="text/javascript">
var p1 = 0.1;
var p2 = 0.15;
function llenar(serc)
{
	if (serc == "")
	{
		return;
	}
	else
	{
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
				document.getElementById("notas").innerHTML =xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET", "traer.php?q="+serc,true);
		xmlhttp.send();
	}
}
function prom(id)
{
	var n1 = document.getElementById("NA1"+id).value;
	var n2 = document.getElementById("NA2"+id).value;
	var n3 = document.getElementById("NA3"+id).value;
	if(n1 == "")
	{
		n1=0;
		}
	if(n2 == "")
	{
		n2=0;
		}
	if(n3 == "")
	{
		n3=0;
		}	
	var promed = (parseFloat(n1)*p1 + parseFloat(n2)*p1 + parseFloat(n3)*p2);
	document.getElementById("PROM"+id).value = parseFloat(promed).toFixed(2); 
	}
function porc(porcentaje){
	 	if (porcentaje == 3)
			{
			p2 = 0.1;
			}
		else
		{
			p2 = 0.15;
			}
	}
</script>
<body>
	<form method="POST">
	<div id="contenedor" style="width:1024px; margin: auto;">
	<h3 style="text-align:center;"><label>Cuadro de registro de evaluaciones de los aprendizajes por trimestre</label></h3>
	<table style="margin:auto;">
		<tr>
			<td>
				<label>Asignatura: </label>
			</td>
			<td>
				<select name="asignatura">
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
				<select name="grado" onchange="llenar(this.value)">
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
			<td>
				<label>Periodo: </label>
			</td>
			<td>
				<input name="periodo" type="number" onkeyup="porc(this.value)" step="any">
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
<table style="border: 1px solid black; width:100%; text-align:center" border="1">
		<tr>
			<td rowspan="4" style="width:70px;">
				No
			</td>
			<td rowspan="4" style="width:500px;">
				<label>Nombre de los/las alumnos/as</label>
			</td>
			<td colspan="4" align="center">
				<label>Actividad1 (35%)</label>
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				<label>Actividad integradora</label>
			</td>
			<td rowspan="3" style="width:100px;">
				<label>Total</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>R1</label>
			</td>
			<td>
				<label>R2</label>
			</td>
			<td>
				<label>R3</label>
			</td>
		</tr>
		<tr>
			<td style="width:100px;">
				<label>10%</label>
			</td>
			<td style="width:100px;">
				<label>10%</label>
			</td>
			<td style="width:100px;">
				<label>15%</label>
			</td>
		</tr>
	</table>

	</div>
	<div id="notas" style="width:1024px; margin: auto;">
		</div>
		<button type='submit' >Enviar</button>
		</form>
</body>
</html>
<?php
if($_POST)
{
	$count = 0;
	$querya = mysql_query("SELECT id_alumno FROM alumnos WHERE id_grado = '$_POST[grado]' ");
	while($rowa = mysql_fetch_array($querya))
	{
		$val1="n1".$rowa[0];
		$val2="n2".$rowa[0];
		$val3="n3".$rowa[0];
		$val4="n4".$rowa[0];
		$nota1=$_POST[$val1];
		$nota2=$_POST[$val2];
		$nota3=$_POST[$val3];
		$promedio=$_POST[$val4];
		$nota=$nota1."-".$nota2."-".$nota3;
		$sql = mysql_query("INSERT INTO notas (id, periodo, id_materia, id_grado, id_docente, id_alumno, nota1, promedio) VALUES 
		(NULL, '$_POST[periodo]', '$_POST[asignatura]', '$_POST[grado]', '1', '$rowa[0]', '$nota','$promedio')");
		if($sql)
		{
			$count = count+1;
			}
			else
			{
				echo mysql_error();
				}
		}
		if(mysql_num_rows($querya) == $count)
		{
			echo "<script>alert('Exito se realizaron $count inserciones');</script>";
			}
}
?>
