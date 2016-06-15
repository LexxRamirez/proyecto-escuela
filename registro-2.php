<!DOCTYPE html>
<html leng="utf-8">
<head>
<title>..::CE</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
</head>
<body>
<br>
<div id="mainwrap">	
    <div id="contenedor-sup" style="width:900px; margin: auto;">
    <h4 style="text-align:center">SITUACION SOCIOECONOMICA</h4>
    <form>
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
