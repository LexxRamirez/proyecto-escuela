<?php
include("conexion.php");
$q = $_GET["q"];
$compo ="<table style='width:100%; text-align:center;' border>";
$query=mysql_query("SELECT * FROM alumnos WHERE id_grado = '$q'");
while($row = mysql_fetch_array($query))
	{
		$compo = $compo. " <tr><td style='width:70px;'>".$row[0]."</td><td style='width:500px;'>".$row[4]."</td><td style='width:100px;'><input type='text' name='n1".$row[0]."' size='4px' id='NA1".$row[0]."' onkeyup='prom(".$row[0].")'></td><td style='width:100px;'><input type='text' name='n2".$row[0]."' size='4px' onkeyup='prom(".$row[0].")' id='NA2".$row[0]."'></td><td style='width:100px;'><input type='text' name='n3".$row[0]."' size='4px' id='NA3".$row[0]."' onkeyup='prom(".$row[0].")'></td><td style='width:100px;'><input type='text' name='n4".$row[0]."' size='4px' id='PROM".$row[0]."'></td></tr>"; 
		}
		$compo = $compo."</table>";
echo $compo;
?>
