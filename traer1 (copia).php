<?php
	include("conexion.php");
	$tabla = "<table style=\"width:1024px; margin: auto;\" border>";
	$periodo1 = "0</td>
	<td style=\"width:30px;\">0</td>
	<td style=\"width:30px;\">0</td>
	<td style=\"width:42px;\">0";
	$periodo2 = "0</td>
	<td style=\"width:30px;\">0</td>
	<td style=\"width:30px;\">0</td>
	<td style=\"width:42px;\">0";
	$periodo3 = "0</td>
	<td style=\"width:30px;\">0</td>
	<td style=\"width:30px;\">0</td>
	<td style=\"width:42px;\">0";
	$p1= 0;
	$p2= 0;
	$p3= 0;
	if($_GET["s"] != "" && $_GET["q"]!="")
	{
		$q = $_GET["q"];
		$s = $_GET["s"];
		$query=mysql_query("SELECT alumnos.id_alumno, alumnos.nombre, notas.periodo1, notas.periodo2, notas.periodo3, materia.id_materia, materia.materia, grado.id_grado, grado.nombre_grado FROM alumnos, notas, materia, grado WHERE alumnos.id_alumno=notas.id_alumno AND materia.id_materia=notas.id_materia AND grado.id_grado=notas.id_grado AND notas.id_grado = '$q' AND notas.id_materia='$s'");
	
		}
	else if($_GET["q"] != "")
	{
		$q = $_GET["q"];
		$query=mysql_query("SELECT alumnos.id_alumno, alumnos.nombre, notas.periodo1, notas.periodo2, notas.periodo3, materia.id_materia, materia.materia, grado.id_grado, grado.nombre_grado FROM alumnos, notas, materia, grado WHERE alumnos.id_alumno=notas.id_alumno AND materia.id_materia=notas.id_materia AND grado.id_grado=notas.id_grado AND notas.id_grado = '$q'");
		}	
	else if($_GET["s"] != "")
	{
		$s = $_GET["s"];
		$query=mysql_query("SELECT alumnos.id_alumno, alumnos.nombre, notas.periodo1, notas.periodo2, notas.periodo3, materia.id_materia, materia.materia, grado.id_grado, grado.nombre_grado FROM alumnos, notas, materia, grado WHERE alumnos.id_alumno=notas.id_alumno AND materia.id_materia=notas.id_materia AND grado.id_grado=notas.id_grado AND notas.id_materia = '$s'");	
		}	
	else
	{
		$query=mysql_query("SELECT alumnos.id_alumno, alumnos.nombre, notas.periodo1, notas.periodo2, notas.periodo3, materia.id_materia, materia.materia, grado.id_grado, grado.nombre_grado FROM alumnos, notas, materia, grado WHERE alumnos.id_alumno=notas.id_alumno AND materia.id_materia=notas.id_materia AND grado.id_grado=notas.id_grado");		
		}	
	while($row = mysql_fetch_array($query))
		{	
			$n1 = 0;
			$n2 = 0;
			$n3 = 0;
			if($row["periodo1"] != "")
			{
				$p1 = explode("-", $row["periodo1"]);
				$periodo1 = $p1[0]."</td><td style=\"width:30px;\">".$p1[1]."</td><td style=\"width:30px;\">".$p1[2]."</td><td style=\"width:42px;\">".$p1[3];
				$n1 = $p1[3];
			}
			if($row["periodo2"] != "")
			{
				$p2 = explode("-", $row["periodo2"]);
				$periodo2 = $p2[0]."</td><td style=\"width:30px;\">".$p2[1]."</td><td style=\"width:30px;\">".$p2[2]."</td><td style=\"width:42px;\">".$p2[3];
				$n2 = $p2[3];
			}
			if($row["periodo2"] != "")
			{
				$p3 = explode("-", $row["periodo3"]);
				$periodo3 = $p3[0]."</td><td style=\"width:30px;\">".$p3[1]."</td><td style=\"width:30px;\">".$p3[2]."</td><td style=\"width:42px;\">".$p3[3];
				$n3 = $p3[3];
			}
			
		$nota_final = $n1+$n2+$n3;
		$tabla = $tabla." 
		<tr>
			<td style=\"width:23px;\">".$row[0]."</td>
			<td style=\"width:174px;\">".$row[1]."</td>
			<td style=\"width:30px;\">".$periodo1."</td>
			<td style=\"width:30px;\">".$periodo2."</td>
			<td style=\"width:30px;\">".$periodo3."</td>
			<td style=\"width:45px;\">".$nota_final."</td>
		</tr>";		
		$periodo1 = "0</td>
			<td style=\"width:30px;\">0</td>
			<td style=\"width:30px;\">0</td>
			<td style=\"width:42px;\">0";
		$periodo2 = "0</td>
			<td style=\"width:30px;\">0</td>
			<td style=\"width:30px;\">0</td>
			<td style=\"width:42px;\">0";
		$periodo3 = "0</td>
			<td style=\"width:30px;\">0</td>
			<td style=\"width:30px;\">0</td>
			<td style=\"width:42px;\">0";
		$p1= 0;
		$p2= 0;
		$p3= 0;
		}
	$tabla= $tabla."</table>";	
	echo $tabla;
?>
