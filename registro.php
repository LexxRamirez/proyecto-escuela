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
            <td style=" width:200px">
               <select name="repite" class="form-control">
                <option value="">Seleccione</option>
                <option value="si">Si</option>
                <option value="no">No</option>
               </select> 
            </td>
            <td>
                <label>Estudio parbularia:</label>
            </td>
            <td style=" width:200px">
               <select name="parbularia" class="form-control">
                <option value="">Seleccione</option>
                <option value="si">Si</option>
                <option value="no">No</option>
               </select> 
            </td>
        <tr>
            <td>
                <label>Año en el que estudio el ultimo grado:</label>
            </td>
            <td>
                <input type="text" name="ultimo" size="12px" class="form-control">
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
    <table>
        <tr>
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
    </table>  
    <h5><label>Municipio en el que estudia actualmente: <u><i>San Miguel</i></u></label></h5>
    <h5><label>Codigo: 1217</label></h5>
    <table>
        <tr>
            <td width="200px">
                <label>Fecha de nacimiento:</label>
            </td>
            <td>
                <input type="text" name="fecha" class="form-control" size="36px">
            </td>
            <td>
                <label>Edad:</label>
            </td>
            <td>
                <input type="text" name="edad" class="form-control" size="37px">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td style=" width:200px">
                <label>Tiene sobre edad:</label>
            </td>
            <td style=" width:200px">
               <select name="sobre_edad" class="form-control">
                <option value="">Seleccione</option>
                <option value="si">Si</option>
                <option value="no">No</option>
               </select> 
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="200pxs">
                <label>Tipo de trabajo que realiza:</label>
            </td>
            <td>
                <input type="text" name="trabajo" size="100%" class="form-control">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="200px">
                <label>Vive con:</label>
            </td>
           
            <td style=" width:200px">
               <select name="vive" class="form-control">
                <option value="">Seleccione</option>
                <option value="mama">Mamá</option>
                <option value="papa">Papá</option>
                <option value="papa y mama">Papá y mamá</option>
                <option value="familiar">Familiar</option>
               </select> 
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="200px">
                <label>Tipo de enfermedad:</label>
            </td>
            <td>
                <input type="text" name="enfermedad" class="form-control" size="100%">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="200px;">
                <label>Vacunas completas:</label>
            </td>
            <td style=" width:200px">
               <select name="vacunas" class="form-control">
                <option value="">Seleccione</option>
                <option value="si">Si</option>
                <option value="no">No</option>
               </select> 
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="200px">
                <label>Nombre del padre o encargado:</label>
                
            </td>
            <td>
                <input type="text" name="encargado" class="form-control" size="100%">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="200px">
                <label>DUI:</label>
            </td>
            <td>
                <input type="text" name="dui" size="36px;" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tel de casa:</label>
            </td>
            <td>
                <input type="text" name="Tcasa" size="36px" class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tel de celular:</label>
            </td>
            <td>
                <input type="text" name="Tcel" size="36px" class="form-control">
            </td>
        </tr>
    </table>
    <br>
    <h4 style="text-align:center">SITUACION SOCIOECONOMICA</h4>
    <fieldset>
        <table>
            <tr>
                <td width="200px">
                    <label>INGRESO FAMILIAR:</label>
                </td>
                <td style=" width:225px">
                    <select name="ingreso" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="padre">Padre</option>
                        <option value="madre">Madre</option>
                    </select> 
                </td>
                <td>
                    <label>OTROS:</label></td>
                <td>
                    <input type="text" name="otr" class="form-control" size="40px">
                </td>
            </tr>
            <tr>
                <td>
                    <label>VIVIENDA:</label>
                </td>
                <td style=" width:225px">
                    <select name="vivienda" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="propia">Propia</option>
                        <option value="alquilada">Alquilada</option>
                    </select> 
                </td>
                <td>
                    <label>TIPO DE VIVIENDA:</label></td>
                <td>
                    <input type="text" name="cheque2" class="form-control">
                </td>
            </tr>
        </table>
    </fieldset>
    <h4 style="text-align:center">DATOS PERSONALES DEL NIÑO Y GRUPO FAMILIAR</h4>
    <fieldset>
        <table>
            <tr>
                <td width="200px">
                    <label>Embarazo:</label>
                </td>
                <td style=" width:225px">
                    <select name="enbarazo" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                    </select> 
                </td>
                <td width="100px">
                    <label>Parto:</label>
                </td>
                <td style=" width:225px">
                    <select name="parto" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="Normal">Normal</option>
                        <option value="Anormal">Anormal</option>
                    </select> 
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="200px">
                    <label>N. de la madre:</label>
                </td>
                <td>
                    <input type="text" name="nmadre" class="form-control" size="36px">
                </td>
                <td>
                    <label>Edad:</label>
                </td>
                <td>
                    <input type="text" name="Medad" class="form-control" size="37px">
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="200px">
                    <label>Sabe:</label>
                </td>
                <td style=" width:225px">
                    <select name="m_sabe" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="leer">Leer</option>
                        <option value="escribir">Escribir</option>
                        <option value="leer y escribir">Leer y Escribir</option>
                    </select> 
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="200px">
                    <label>N. del padre:</label>
                </td>
                <td>
                    <input type="text" name="nmadre" class="form-control" size="36px">
                </td>
                <td>
                    <label>Edad:</label>
                </td>
                <td>
                    <input type="text" name="Medad" class="form-control" size="37px">
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="200px">
                    <label>Sabe:</label>
                </td>
                <td style=" width:225px">
                    <select name="p_sabe" class="form-control">
                        <option value="">Seleccione</option>
                        <option value="leer">Leer</option>
                        <option value="escribir">Escribir</option>
                        <option value="leer y escribir">Leer y Escribir</option>
                    </select> 
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td width="200px">
                    <label>N° de hermanos:</label>
                </td>
                <td>
                    <input type="text" name="Pedad" size="36px" class="form-control">
                </td>
                <td>
                    <label>N° de hermanas:</label>
                </td>
                <td>
                    <input type="text" name="Pedad" size="37px" class="form-control">
                </td>
            </tr>
        </table>
        <h4 style="text-align:center">COMPORTAMIENTO DEL NIÑO</h4>
        <table style="margin:auto;">
            <tr>
                <td width="100px">
                    <input type="checkbox" name="ch1">
                    <label>Inquieto</label>
                </td>
                <td width="100px">
                    <input type="checkbox" name="ch1">
                    <label>Timido</label>
                </td>
                <td width="120px">
                    <input type="checkbox" name="ch1">
                    <label>Cooperativo</label>
                </td>
                <td width="120px">
                    <input type="checkbox" name="ch1">
                    <label>Respetuoso</label>
                </td>
                <td width="120px">
                    <input type="checkbox" name="ch1">
                    <label>Responsable</label>
                </td>
                <td width="100px">
                    <input type="checkbox" name="ch1">
                    <label>Creativo</label>
                </td>
                <td width="100px">
                    <input type="checkbox" name="ch1">
                    <label>Ordenado</label>
                </td>
            </tr>
        </table>
    </fieldset>
    <h4 style="text-align:center">DOCUMENTO QUE PRESENTO</h4>
    <table style="margin:auto">
        <tr>
            <td width="150px">
                <input type="checkbox" name="ch1">
                <label>Copia de partida</label>  
            </td>
            <td width="200px">
                <input type="checkbox" name="ch1">
                <label>Certificado Original</label>
            </td>
            <td width="100px">
                <input type="checkbox" name="ch1">
                <label>DUI</label>
            </td>
            <td width="px">
                <input type="checkbox" name="ch1">
                <label>Constancia de conducta</label>
            </td>
        </tr>
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
