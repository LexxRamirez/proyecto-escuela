<!DOCTYPE html>
<html leng="utf-8">
<head>
<title>..::CE</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
</head>
<body style="background-color:#95A268">
<div id="mainwrap">																	
 <div id="footer_terms">
 </div>
<div id="mainnav-wrap" class="wrap">
    <div id="mainnav" class="pagesize clearfix">
    	<div class="vernav">
            <ul class="clearfix">
                <li><a href="?" id="active"><span>Inicio</span></a></li>
                <li><a href="?"><span>Alumnos</span></a></li>
                <li><a href="?"><span>Docentes</span></a></li>
                <li><a href="?"><span>Ajustes</span></a></li>
                <li><a href="?"><span>Ayuda</span></a></li>
            </ul>
        </div>
    </div>
</div>
    <div id="contenedor-sup" style="width:900px; margin: auto;">
    <h3>FICHA DE MATRICULA</h3>
    <h5><label>Centro Escolar Canton "La Canoa". Codigo: 13072 Distrito: 12-05</label></h5>
    <table >
        <tr>
            <td>
                <label>Año:</label>
            </td>
            <td>
                <input type="text" name="anho" class="form-control" size="100%">
            </td>
        </tr>
        <tr>
            <td>
                <label>Grado:</label>
            </td>
            <td>
                <input type="text" name="grado" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Alumno numero:</label>
            </td>
            <td>
                <input type="text" name="alumN" class="form-control">
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
    </table>
    <br>
    <table>
        <tr>
            <td>
                <label>Repite grado:</label>
            </td>
            <td>
                <input type="text" name="repite" size="12px" class="form-control">
            </td>
            <td>
                <label>Estudio parbularia:</label>
            </td>
            <td>
                <input type="text" name="parbularia" size="12px" class="form-control">
            </td>
            <td>
                <label>Año en el que estudio el ultimo grado:</label>
            </td>
            <td>
                <input type="text" name="ultimo" size="12px" class="form-control">
            </td>
        </tr>
    </table>
    <br>
    <table>
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
        <tr>
            <td>
                <label>Lugar de residencia:</label>
            </td>
            <td>
                <input type="checkbox" name="chek1" class="checkbox">
                <label>Rural</label>
                <input type="checkbox" name="chek2" class="checkbox">
                <label>Urbana</label>
            </td>
        </tr>
    </table>    
    <h5><label>Municipio en el que estudia actualmente: <u><i>San Miguel</i></u></label></h5>
    <h5><label>Codigo: 1217</label></h5>
    <table>
        <tr>
            <td>
                <label>Fecha de nacimiento:</label>
            </td>
            <td>
                <input type="text" name="fecha" class="form-control" size="30px">
            </td>
            <td>
                <label>Edad:</label>
            </td>
            <td>
                <input type="text" name="edad" class="form-control">
            </td>
            <td>
                <label>Tiene sobre edad:</label>
            </td>
            <td>
                <input type="checkbox" name="cheque1">
                <label>SI</label>
                <input type="checkbox" name="cheque2">
                <label>NO</label>
            </td>
        </tr>
        <tr>
            <td >
                <label>Tipo de trabajo que realiza:</label>
            </td>
            <td colspan="5">
                <input type="text" name="trabajo" size="60px" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Vive con:</label>
            </td>
            <td colspan="6">
                <input type="checkbox" name="vive1">
                <label>Mamá</label>
                <input type="checkbox" name="vive2">
                <label>Papá</label>
                <input type="checkbox" name="vive3">
                <label>Papá y Mamá</label>
                <input type="checkbox" name="vive4">
                <label>Familiar</label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Tipo de enfermedad:</label>
            </td>
            <td>
                <input type="text" name="enfermedad" class="form-control">
            </td>
            <td colspan="2">
                <label>Vacunas completas:</label>
                <input type="checkbox" name="cheque1">
                <label>SI</label>
                <input type="checkbox" name="cheque2">
                <label>NO</label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Nombre del padre o encargado:</label>
                
            </td>
            <td colspan="5"><input type="text" name="encargado" size="100%" class="form-control"></td>
        </tr>
        <tr>
            <td>
                <label>DUI:</label>
            </td>
            <td colspan="2">
                <input type="text" name="dui" size="50%" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tel de casa:</label>
            </td>
            <td colspan="2">
                <input type="text" name="Tcasa" size="50%" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tel de celular:</label>
            </td>
            <td colspan="2">
                <input type="text" name="Tcel" size="50%" class="form-control">
            </td>
        </tr>
    </table>
    <h4 style="text-align:center">SITUACION SOCIOECONOMICA</h4>
    <fieldset>
        <table>
            <tr>
                <td>
                    <label>INGRESO FAMILIAR:</label>
                </td>
                <td>
                    <input type="checkbox" name="ch1">
                    <label>PADRE</label>
                    <input type="checkbox" name="ch2">
                    <label>MADRE</label>
                    <input type="checkbox" name="ch3">
                </td>
                <td><label>OTROS</label></td>
                <td><input type="text" name="otr" class="form-control"></td>
            </tr>
            <tr>
                <td>
                    <label>VIVIENDA:</label>
                </td>
                <td>
                    <input type="checkbox" name="ch1">
                    <label>PROPIO</label>
                    <input type="checkbox" name="ch2">
                    <label>ALQUILADA</label>
                    <input type="checkbox" name="ch3">
                    
                    
                </td>
                <td><label>TIPO DE VIVIENDA</label></td>
                <td><input type="text" name="cheque2" class="form-control"></td>
            </tr>
        </table>
    </fieldset>
    <h4 style="text-align:center">DATOS PERSONALES DEL NIÑO Y GRUPO FAMILIAR</h4>
    <fieldset>
        <table>
            <tr>
                <td colspan="3">
                    <label>Embarazo:</label>
                    <input type="checkbox" name="ch1">
                    <label>Normal</label>
                    <input type="checkbox" name="ch1">
                    <label>Anormal</label>
                </td>
                <td>
                    <label>Parto:</label>
                    <input type="checkbox" name="ch1">
                    <label>Normal</label>
                    <input type="checkbox" name="ch1">
                    <label>Anormal</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>N. de la madre:</label>
                </td>
                <td><input type="text" name="nmadre" class="form-control"></td>
                <td>
                    <label>Edad:</label>
                    
                </td>
                <td><input type="text" name="Medad" size="5px" class="form-control"></td>
                <td>
                    <label>Sabe:</label>
                    <input type="checkbox" name="ch1">
                    <label>Leer</label>
                    <input type="checkbox" name="ch1">
                    <label>Escribir</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>N. del padre:</label>
                </td>
                <td>
                    <input type="text" name="npadre" class="form-control">
                </td>
                <td>
                    <label>Edad:</label>
                </td>
                <td>
                    <input type="text" name="Pedad" size="5px" class="form-control">
                </td>
                <td>
                    <label>Sabe:</label>
                    <input type="checkbox" name="ch1">
                    <label>Leer</label>
                    <input type="checkbox" name="ch1">
                    <label>Escribir</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>N° de hermanos:</label>
                </td>
                <td>
                    <input type="text" name="Pedad" size="5px" class="form-control">
                </td>
                <td>
                    <label>N° de hermanas:</label>
                </td>
                <td>
                    <input type="text" name="Pedad" size="5px" class="form-control">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Comportamiento y personalidad del niño:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="checkbox" name="ch1">
                    <label>Inquieto</label>
                    <input type="checkbox" name="ch1">
                    <label>Timido</label>
                    <input type="checkbox" name="ch1">
                    <label>Cooperativo</label>
                    <input type="checkbox" name="ch1">
                    <label>Respetuoso</label>
                    <input type="checkbox" name="ch1">
                    <label>Responsable</label>
                    <input type="checkbox" name="ch1">
                    <label>Creativo</label>
                    <input type="checkbox" name="ch1">
                    <label>Ordenado</label>
                </td>
            </tr>
        </table>
    </fieldset>
    <h4 style="text-align:center">DOCUMENTO QUE PRESENTO</h4>
    <table>
        <tr>
                <td colspan="4">
                    <input type="checkbox" name="ch1">
                    <label>Copia de partida</label>
                    <input type="checkbox" name="ch1">
                    <label>Certificado Original</label>
                    <input type="checkbox" name="ch1">
                    <label>DUI</label>
                    <input type="checkbox" name="ch1">
                    <label>Constancia de conducta</label>
                </td>
            </tr>
    </table>
    </div>
    <br>
        </div>
    </div>
</div>
</body>
</html>
