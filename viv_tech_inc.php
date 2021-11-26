<?php
session_start();
// Verificamos la Entrada por la Intranet
$password = $_SESSION['password'];
/* if ($password != "")
{
}else{
	echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}
if($_SESSION["t_cond"] == "ADMINISTRADOR") {
} else {
	echo"<script type=\"text/javascript\">alert('Usted no está Autorizado para Este Módulo....!'); window.location='inicio.php';</script>";
}
 */// FIN DE LA SOLICITUD
// Verificamos el año
include('conexion.php');
$sql_proy = "SELECT * FROM proy_proyecto WHERE proy_codtech='001'";
$sql_pared = "SELECT * FROM proy_componentes";
$sql_puerta = "SELECT * FROM proy_puertas";
$sql_ventana = "SELECT * FROM proy_ventanas";
$sql_recub = "SELECT * FROM proy_recubrimiento";
$sql_techo = "SELECT * FROM proy_techo";
$cod_incl = $_SESSION['cod_incl'];
$desc_incl = $_SESSION['desc_incl'];

/*
================================================================
Plataforma para Intranet de Lufkin de Veezuela, S.A.
Elaborado por: T.S.U. Wilmer Faria / Coordinador de Informática
Diseñado para: Venezolana de Fundición Lufkin, S.A.
Diseño: Aplicación para las Donaciones
================================================================
*/

/*
============
Encabezado
============
*/
header("Content-Type: text/html; charset=UTF-8");
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"><head><title>Pre Procesador - Vivienda</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
echo '<meta http-equiv="Content-Script-Type" content="text/javascript"/>';
echo '<link rel="shortcut icon" type="images/x-icon" href="/pics/logo_viv.ico" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link href="estilos.css" rel="stylesheet" type="text/css" media="screen" />';
echo '<link rel="stylesheet" href="css/normalize.css">';
echo '<script type="text/javascript" src="../js/jquery.min.js"></script>';
echo '<script src="../js/bootstrap.min.js"></script>';
// JavaScripy *********************************************************************
echo '<script language="JavaScript" type="text/javascript">
// Reloj digital para web javascript
// Copyright 2016 bloguero-ec.
// Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
function show5(){
	if (!document.layers&&!document.all&&!document.getElementById)
	return
	
	var Digital=new Date()
	var hours=Digital.getHours()
	var minutes=Digital.getMinutes()
	var seconds=Digital.getSeconds()
	
	var dn="PM"
	if (hours<12)
	dn="AM"
	if (hours>12)
	hours=hours-12
	if (hours==0)
	hours=12
	
	if (minutes<=9)
	minutes="0"+minutes
	if (seconds<=9)
	seconds="0"+seconds
	//<span id="IL_AD6" class="IL_AD">change</span> <span id="IL_AD11" class="IL_AD">font size</span> here to your desire
	myclock="<b>Hora:   "+hours+":"+minutes+":"
	+seconds+" "+dn+"</b>"
	if (document.layers){
		document.layers.liveclock.document.write(myclock)
		document.layers.liveclock.document.close()
	}
	else if (document.all)
	liveclock.innerHTML=myclock
	else if (document.getElementById)
	document.getElementById("liveclock").innerHTML=myclock
	setTimeout("show5()",1000)
}


window.onload=show5

</script>';
// IN DE LA HORA ****************************************************************************

// Función Habilitar Campos YZ - XZ (a)
echo '<script>
function habyza(value)
{

	document.getElementById("yza1").disabled=Boolean(value);
	document.getElementById("yza2").disabled=Boolean(value);
	document.getElementById("yza3").disabled=Boolean(value);
}
</script>';

echo '<script>
function habxza(value)
{
	if(value==true)
	{
		// habilitamos
		document.getElementById("xza1").disabled=false;
		document.getElementById("xza2").disabled=false;
		document.getElementById("xza3").disabled=false;
	}else if(value==false){
		// deshabilitamos
		document.getElementById("xza1").disabled=true;
		document.getElementById("xza2").disabled=true;
		document.getElementById("xza3").disabled=true;
	}
}
</script>';
//***************
// Función Habilitar Campos YZ - XZ (b)
echo '<script>
function habyzb(value)
{
	if(value==true)
	{
		// habilitamos
		document.getElementById("yzb1").disabled=false;
		document.getElementById("yzb2").disabled=false;
	}else if(value==false){
		// deshabilitamos
		document.getElementById("yzb1").disabled=true;
		document.getElementById("yzb2").disabled=true;
	}
}
</script>';
echo '<script>
function habxzb(value)
{
	if(value==true)
	{
		// habilitamos
		document.getElementById("xzb1").disabled=false;
		document.getElementById("xzb2").disabled=false;
	}else if(value==false){
		// deshabilitamos
		document.getElementById("xzb1").disabled=true;
		document.getElementById("xzb2").disabled=true;
	}
}
</script>';
//***************
// Función Habilitar Campos YZ - XZ (b)
echo '<script>
function habyzc(value)
{
	if(value==true)
	{
		// habilitamos
		document.getElementById("yzc1").disabled=false;
		document.getElementById("yzc2").disabled=false;
	}else if(value==false){
		// deshabilitamos
		document.getElementById("yzc1").disabled=true;
		document.getElementById("yzc2").disabled=true;
	}
}
</script>';
echo '<script>
function habxzc(value)
{
	if(value==true)
	{
		// habilitamos
		document.getElementById("xzc1").disabled=false;
		document.getElementById("xzc2").disabled=false;
	}else if(value==false){
		// deshabilitamos
		document.getElementById("xzc1").disabled=true;
		document.getElementById("xzc2").disabled=true;
	}
}
</script>';
//***************
// Activar Radio por Opciones


/* Función del Calendario */
echo '<link rel="stylesheet" type="text/css" href="css/calendario.css">';
echo '<script type="text/javascript" src="js/jquery.js"></script>';
echo '<script type="text/javascript" src="js/calendario.js"></script>';
echo '<script type="text/javascript">
$(function(){
	$("#fecha1").datepicker();
	$("#fecha2").datepicker({
		changeMonth:true,
		changeYear:true,
	});
	$("#fecha3").datepicker({
		changeMonth:true,
		changeYear:true,
		showOn: "button",
		buttonImage: "css/images/ico.png",
		buttonImageOnly: true,
		showButtonPanel: true,
	})
	$("#fecha4").datepicker({
		changeMonth:true,
		changeYear:true,
	});
})
</script>
';
/* Fin de la Función Calendario */
echo '</head>';
// Body
echo '<body>';
echo '<div id="art-main">';
echo '  <header id="main-header">';
echo '   	<table align="center" width="96%" height="100%" border="0" cellpadding="0" cellspacing="0">';
echo '         <tr>';
echo '			<td width="50%" align="left" valign="middle"><small><img src="img/vivienda.png" id="girando" width="300" width=*92" /></small></td>';
echo '			<td width="50%" align="right" valign="middle"><small><img src="img/tech_inclinado.png" alt="" width="325" height="77" /></small></td>';
echo '         </tr>';
echo '       </table>';
echo '    </header>'; // Fin del Header
echo '    <div id="wrap">';
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td width="100%" align="right">';
echo '					<div class="grid_7" align="right">';
echo '				    	<a href="inicio.php" class="dashboard-mod" target="">
<span>Salir..</span>
</a>';
echo '				  	</div>';
echo '				</td>';
echo '			</tr>';
echo '		</table>';
echo '		<form id="form-login" action="proy_techinclinado.php" method="post" >';
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcción de Vivienda con Techo Inclinado</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		&nbsp;';
echo '		<table width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td rowspan="2"><div id="img-contenedor"><img src="img/casa3d.png" width="300" height="250"></div></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Proyecto:</font></td>';
echo '			  <td><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><n>'.$desc_incl.'</n></font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Código:</font></td>';
echo '			  <td><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><n>'.$cod_incl.'</n></font></td>';
echo '					<input type="hidden" name="xproy_cod_incl" value="'.$cod_incl.'">';
echo '		  </tr>';	
echo '		</table>';
echo '		&nbsp;';
// Tabla Principal
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="3" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Paredes (Longitud)</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td rowspan="3" align="center" width="40%"><img src="img/vista_planta.png" width="300" height="200"></td>';
// Tabla de Paredes Vista Planta
echo '			<td id="forma_par" align="left"><table width="60%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Longitud (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Pared Este / Oeste</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=</font><input type="text" name="xpeo_long" class="long" required="required" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Pared Norte / Sur</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=</font><input type="text" name="xpns_long" class="long" required="required" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de la Tabla Paredes Vista Planta
echo '		  </tr>';
echo '		</table>';
echo '		&nbsp;';
// Componentes de Construccoón
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="4" bgcolor="#0000CC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Componente Constructivo</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="center" bgcolor="#0000FF"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Norte</font></td>';
echo '			<td align="center" bgcolor="#0000FF"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Sur</font></td>';
echo '			<td align="center" bgcolor="#0000FF"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Este</font></td>';
echo '			<td align="center" bgcolor="#0000FF"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Oeste</font></td>';
echo '		</tr>';
echo '		<tr>';
echo '			<td align="center">';
echo '						<select name="xpn_pared_cod" type="text" size="1" id="sel_pared">';
$res_pared = mysqli_query($con, $sql_pared);
while ($row_pared = mysqli_fetch_array($res_pared, MYSQLI_ASSOC)){
	echo "<option value=" . $row_pared['proy_modelo'] . ">" . $row_pared['proy_descripcion'] . "</option>" . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xps_pared_cod" type="text" size="1" id="sel_pared">';
$res_pared = mysqli_query($con, $sql_pared);
while ($row_pared = mysqli_fetch_array($res_pared, MYSQLI_ASSOC)){
	echo "<option value=" . $row_pared['proy_modelo'] . ">" . $row_pared['proy_descripcion'] . "</option>" . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xpe_pared_cod" type="text" size="1" id="sel_pared">';
$res_pared = mysqli_query($con, $sql_pared );
while ($row_pared = mysqli_fetch_array($res_pared, MYSQLI_ASSOC)){
	echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xpo_pared_cod" type="text" size="1" id="sel_pared">';
$res_pared = mysqli_query($con, $sql_pared);
while ($row_pared = mysqli_fetch_array( $res_pared, MYSQLI_ASSOC)){
	echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '		</table>';
// Fin de Componentes de Construcción de Paredes
// Fin de la Tabla Principal
echo '		&nbsp;';
// Tabla Construcción de Paredes (Altura)
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="5" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Paredes (Altura)</font></td>';
echo '		  </tr>';
// Techo a Dos Aguas
echo '		  <tr>';
echo '			<td>&nbsp;</td>';
echo '			<td><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Tipo de Techo</i></b></font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td><img src="../img/vista_frontal_incl.png" width="300" height="200"></td>';
echo '			<td><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><input type="radio" name="tip_techo" value="dato1"> A Dos Agua</font></td>';
// Tabla de Paredes Vista Frontal 1
echo '			<td id="forma_int"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habyza(this.checked);"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (Y - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="yza1" id="yza1" class="long" onkeyup="PasarValor_a();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=Y/2</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="yza2" id="yza2" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=Y</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="yza3" id="yza3" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Paredes Vista Frontal 1
echo '			<td>&nbsp;</td>';
// Tabla de Paredes Vista Frontal 2
echo '			<td id="forma_int"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habxza(this.checked);"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (X - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xza1" id="xza1" class="long" onkeyup="PasarValor_b();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=X/2</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xza2" id="xza2" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=X</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xza3" id="xza3" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de la Tabla Paredes Vista Frontal 2
echo '		  </tr>';
// Fin de Techo  a Dos Aguas
echo '		  <tr><td>&nbsp;</td></tr>';
echo '		  <tr><td colspan="5"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
// Techo a Un Agua Z1 < Z2
echo '		  <tr>';
echo '			<td><img src="../img/tech_incl_un_agua_z1z2.png" width="300" height="200"></td>';
echo '			<td><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><input type="radio" name="tip_techo" value="dato2"> A Un Agua Z1 < Z2</font></td>';
// Tabla de Paredes Vista Frontal 1
echo '			<td id="forma_int"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habyzb(this.checked);"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (Y - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z1 = </font><input type="text" name="yz1a" id="yzb1" class="long" onkeyup="PasarValor_a();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=Y</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z2 = </font><input type="text" name="yz2a" id="yzb2" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Paredes Vista Frontal 1
echo '			<td>&nbsp;</td>';
// Tabla de Paredes Vista Frontal 2
echo '			<td id="forma_int"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habxzb(this.checked);"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (X - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z1 = </font><input type="text" name="xz1a" id="xzb1" class="long" onkeyup="PasarValor_b();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=X</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z2 = </font><input type="text" name="xz2a" id="xzb2" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de la Tabla Paredes Vista Frontal 2
echo '		  </tr>';
// Fin de Techo a Un Agua Z1 < Z2
echo '		  <tr><td>&nbsp;</td></tr>';
echo '		  <tr><td colspan="5"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
// Techo A Un Agua Z1 > Z2
echo '		  <tr>';
echo '			<td><img src="../img/tech_incl_un_agua_z2z1.png" width="300" height="200"></td>';
echo '			<td><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><input type="radio" name="tip_techo" value="dato2"> A Un Agua Z1 > Z2</font></td>';
// Tabla de Paredes Vista Frontal 1
echo '			<td id="forma_int"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habyzc(this.checked);"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (Y - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z1 = </font><input type="text" name="yz1b" id="yzc1" class="long" onkeyup="PasarValor_a();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=Y</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z2 = </font><input type="text" name="yz2b" id="yzc2" class="long"/></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Paredes Vista Frontal 1
echo '			<td>&nbsp;</td>';
// Tabla de Paredes Vista Frontal 2
echo '			<td id="forma_int"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habxzc(this.checked);"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (X - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z1 = </font><input type="text" name="xz1b" id="xzc1" class="long" onkeyup="PasarValor_b();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=X</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z2 = </font><input type="text" name="xz2b" id="xzc2" class="long"/></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de la Tabla Paredes Vista Frontal 2
echo '		  </tr>';
// Fin de Techo A Un Agua Z1 > Z2
echo '		</table>';
echo '		&nbsp;';
// Tabla Construcción Parted Interna
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="3" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Pared Interna</font></td>';
echo '		  </tr>';
echo '		  <tr><table width="80%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td>&nbsp;</td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Long. de Separación (m)</i></b></font></td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Long. de Separación (m)</i></b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="center"><img src="img/vista_planta_piy.png" width="300" height="200"></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=</font><input type="text" name="xpiy" class="long" required="required" /></td>';
echo '			  <td align="center"><img src="img/vista_planta_pix.png" width="300" height="200"></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=</font><input type="text" name="xpix" class="long" required="required" /></td>';
echo '			</tr>';
echo '		</tr></table>';
// Tabla de Paredes Vista Planta
// Fin de la Tabla Paredes Vista Planta
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Pared Internal
echo '		&nbsp;';
// Componentes de Construccoón Pared Interna
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="4" bgcolor="#0000CC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Componente Constructivo</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  		<td align="center">';
echo '						<select name="xpint_pared_cod" type="text" size="1" id="sel_teinc">';
$res_pared = mysqli_query($con, $sql_pared);
while ($row_pared = mysqli_fetch_array($res_pared, MYSQLI_ASSOC)){
	echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		</table>';
// Fin de Componentes Pared Interna
echo '		&nbsp;';
// Tabla Construcción Techo
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="8" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Techo</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="center" colspan="4" bgcolor="#0000CC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#fefefd">Componente Constructivo</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  		<td align="center">';
echo '						<select name="xtech_incl_cod" type="text" size="1" id="sel_teinc">';
$res_techo = mysqli_query($con, $sql_techo);
while ($row_techo = mysqli_fetch_array( $res_techo, MYSQLI_ASSOC)){
	echo '<option value="'.$row_techo['id'].'">'.$row_techo['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		</table>';
// Fin de Cionstrucción Techo
echo '		&nbsp;';
// Tabla Construcción Puertas
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="8" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Puerta</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td rowspan="7"><img src="img/puerta.png" width="350" height="200"></td>';
// Tabla de Puertas Norte
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_n" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_n" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_n" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xpn_puerta_cod" type="text" size="1" id="sel_puertas">';
$res_puerta = mysqli_query($con, $sql_puerta);
while ($row_puerta = mysqli_fetch_array( $res_puerta, MYSQLI_ASSOC)){
	echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Norte
echo '			<td>&nbsp;</td>';
// Tabla de Puertas Sur
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_s" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_s" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_s" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xps_puerta_cod" type="text" size="1" id="sel_puertas">';
$res_puerta = mysqli_query($con, $sql_puerta);
while ($row_puerta = mysqli_fetch_array( $res_puerta, MYSQLI_ASSOC)){
	echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Sur
echo '			<td>&nbsp;</td>';
// Tabla de Puertas Este
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_e" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_e" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_e" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xpe_puerta_cod" type="text" size="1" id="sel_puertas">';
$res_puerta = mysqli_query($con, $sql_puerta);
while ($row_puerta = mysqli_fetch_array( $res_puerta, MYSQLI_ASSOC)){
	echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Este
echo '			<td>&nbsp;</td>';
// Tabla de Puertas Oeste
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_o" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_o" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_o" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xpo_puerta_cod" type="text" size="1" id="sel_puertas">';
$res_puerta = mysqli_query($con, $sql_puerta);
while ($row_puerta = mysqli_fetch_array( $res_puerta, MYSQLI_ASSOC)){
	echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Oeste
// Fin de la Tabla Puertas
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Puertas
echo '		&nbsp;';
// Tabla Construcción Ventanas
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="8" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Ventanas</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td rowspan="8"><img src="img/ventana.png" width="350" height="200"></td>';
// Tabla de Ventanas Norte
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="6"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_n" class="long" value="0") /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_n" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_n" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_n" class="long"value="0" /></td>';
echo '			  </tr>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xpn_vent_cod" type="text" size="1" id="sel_ventanas">';
$res_ventana = mysqli_query($con, $sql_ventana);
while ($row_ventana = mysqli_fetch_array( $res_ventana, MYSQLI_ASSOC)){
	echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Norte
echo '			<td>&nbsp;</td>';
// Tabla de Ventanas Sur
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="6"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_s" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_s" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_s" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_s" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xps_vent_cod" type="text" size="1" id="sel_ventanas">';
$res_ventana = mysqli_query($con, $sql_ventana);
while ($row_ventana = mysqli_fetch_array( $res_ventana, MYSQLI_ASSOC)){
	echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Sur
echo '			<td>&nbsp;</td>';
// Tabla de Ventanas Este
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="6"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_e" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_e" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_e" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_e" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xpe_vent_cod" type="text" size="1" id="sel_ventanas">';
$res_ventana = mysqli_query($con, $sql_ventana);
while ($row_ventana = mysqli_fetch_array( $res_ventana, MYSQLI_ASSOC)){
	echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Este
echo '			<td>&nbsp;</td>';
// Tabla de Ventanas Oeste
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="6"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center" colspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>(m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_o" class="long" value="0" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_o" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_o" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_o" class="long" value="0"/></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '					<td align="center" colspan="6" bgcolor="#0000CC" height="22"><font face="Comic Sans MS,arial,verdana", size="2", color="#fefefd">Componente Constructivo</font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '			  		<td align="center" colspan="4">';
echo '						<select name="xpo_vent_cod" type="text" size="1" id="sel_ventanas">';
$res_ventana = mysqli_query($con, $sql_ventana);
while ($row_ventana = mysqli_fetch_array( $res_ventana, MYSQLI_ASSOC)){
	echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>' . "\n";
}
echo '						</select>';
echo '					</td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Oeste
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Ventanas
echo '		&nbsp;';
echo '		<table width="95%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td bgcolor="#CCCCCC" height="40%">&nbsp;</td>';
echo '		  </tr>';
echo '		</table>';
echo '		&nbsp;';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="center" height="60"><input class="op" type="submit" value="Aplicar" name="Aplicar" class="submit" /></td>';
echo '			  <td align="center"><input class="op" type="reset" value="Limpiar Información" class="reset" /></td>';
echo '		  </tr>';
echo '		</table>';
echo '		</form>';
echo '		<p>&nbsp;</p>';
echo '		<p>&nbsp;</p>';
echo '		<table width="90%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td align="left"><font face="Comic Sans MS,arial,verdana", size="2", color="#000000">Usuario..: <img src="img/usuario.png" width="23" height="23" /> '.$_SESSION["nom_user"].'</font></td>';
echo '				<td align="right"><font face="Comic Sans MS,arial,verdana", color="#000000"><span id="liveclock" style="left:0;top:0; font-size:14px; <span id="IL_AD12" class="IL_AD"></span></font></td>';
echo '				<td align="right"><strong><font color="#000000"><sup>®</sup> Copyright 2019 Versión 1.0</strong></font><em><br>';
echo '			</tr>';
echo '		</table>';
echo '	  </div>'; // Fin del Wrap
echo '		<p>&nbsp;</p>';
echo '		<p>&nbsp;</p>';
echo '</div>'; // Fin del art-main
echo '</body>'; // Fin del Body
/*	==================================
Protegiendo Pagina de Acceso
==================================
*/
echo '<Script language=JavaScript>'.
'function right(e) {'.
	'if (navigator.appName == "Netscape" && (e.which == 3 || e.which == 2)){'.
		'alert("Lo sentimos mucho..! PÃ¡gina Restringida");'.
		'return false;'.
		'}'.
		'else if (navigator.appName == "Microsoft Internet Explorer" &&'.
		'(event.button == 2 || event.button == 3)) {'.
			'alert("Lo sentimos mucho..! PÃ¡gina Restringida");'.
			'return false;'.
			'}'.
			'return true;'.
			'}'.
			'document.onmousedown=right;'.
			'if (document.layers) window.captureEvents(Event.MOUSEDOWN);'.
			'window.onmousedown=right;'.
			'</script>';
			echo '<script type="text/javascript">
			// Campos Valores A
			$(document).ready(function () {
				$("#dato_a1").keyup(function () {
					var value = $(this).val();
					$("#dato_a2").val(value);
				});
			});
			function PasarValor_a()
			{
				document.getElementById("dato_a2").value = document.getElementById("dato_a1").value;
			}
			</script>';
			echo '<script type="text/javascript">
			// Campos Valores B
			$(document).ready(function () {
				$("#dato_b1").keyup(function () {
					var value = $(this).val();
					$("#dato_b2").val(value);
				});
			});
			function PasarValor_b()
			{
				document.getElementById("dato_b2").value = document.getElementById("dato_b1").value;
			}
			</script>';
			// Tomamos la imagen segun sea el caso
			echo '<script lenguaje=javascript> 
			function cambia(src){ 
				document.getElementById("im").src=src 
			} 
			</script> ';
			echo '</html>';
			mysqli_close($con);
			?>
			
