<?php
session_start();
// Verificamos la Entrada por la Intranet
$password = $_SESSION['password'];
if ($password != "")
{
}else{
		echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}
if($_SESSION["t_cond"] == "ADMINISTRADOR") {
} else {
	echo"<script type=\"text/javascript\">alert('Usted no está Autorizado para Este Módulo....!'); window.location='inicio.php';</script>";
}
// FIN DE LA SOLICITUD
// Verificamos el año
include('conexion.php');
$sql_proy = "SELECT * FROM proy_proyecto where proy_codtech='001'";
$sql_pared = "SELECT * FROM proy_componentes";
$sql_puerta = "SELECT * FROM proy_puertas";
$sql_ventana = "SELECT * FROM proy_ventanas";
$sql_recub = "SELECT * FROM proy_recubrimiento";
$sql_techo = "SELECT * FROM proy_techo";
$cod_pla = $_SESSION['cod_incl'];
$desc_pla = $_SESSION['desc_incl'];

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

// Función Habilitar Campos
echo '<script>
		function habyz(value)
		{
			if(value==true)
			{
				// habilitamos
				document.getElementById("actyz").disabled=false;
				document.getElementById("actyz1").disabled=false;
				document.getElementById("actyz2").disabled=false;
			}else if(value==false){
				// deshabilitamos
				document.getElementById("actyz").disabled=true;
				document.getElementById("actyz1").disabled=true;
				document.getElementById("actyz2").disabled=true;
			}
		}
	</script>';
//***************
echo '<script>
		function paralt(value)
		{
			if(value==true)
			{
				// habilitamos
				document.getElementById("actalt").disabled=false;
				document.getElementById("actalt1").disabled=false;
				document.getElementById("actalt2").disabled=false;
			}else if(value==false){
				// deshabilitamos
				document.getElementById("actalt").disabled=true;
				document.getElementById("actalt1").disabled=true;
				document.getElementById("actalt2").disabled=true;
			}
		}
	</script>';

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
echo '			<td width="50%" align="right" valign="middle"><small><img src="img/tech_plano.png" alt="" width="325" height="77" /></small></td>';
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
echo '		<form id="form-login" action="proy_techplano.php" method="post" >';
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcción de Vivienda con Techo Plano</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		&nbsp;';
echo '		<table width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td rowspan="2"><div id="img-contenedor"><img src="img/casa3dpl.png" width="260" height="210"></div></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Proyecto:</b></i></font></td>';
echo '			  <td><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><n>'.$desc_pla.'</n></font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Código:</font></td>';
echo '			  <td><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><n>'.$cod_pla.'</n></font></td>';
echo '					<input type="hidden" name="xproy_cod" value="'.$cod_pla.'">';
echo '		  </tr>';
echo '		</table>';
echo '		&nbsp;';
// Tabla Principal
echo '		<table width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="3" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Paredes (Longitud)</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td rowspan="3" align="center" width="40%"><img src="img/vista_planta.png" width="300" height="200"></td>';
// Tabla de Paredes Vista Planta
echo '			<td id="forma_par" align="left"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
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
// Fin de la Tabla Principal
echo '		&nbsp;';
// Tabla Principal
echo '		<table width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="4" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Paredes (Altura)</font></td>';
echo '		  </tr>';
echo '			<td rowspan="4" align="center"><img src="img/vista_frontal1.png" width="300" height="200"></td>';
// Tabla de Paredes Vista Frontal
echo '			<td id="forma_par"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="habyz(this.checked);" checked><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (Y - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xalt_yz" id="dato_a1" class="long" onkeyup="PasarValor_a();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Y=Y</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xalt_yyz" id="dato_a2" class="long" readonly="readonly" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de la Tabla Paredes Vista Frontal
echo '			<td>&nbsp;</td>';
// Tabla de Paredes Vista Frontal 2
echo '			<td id="forma_par"><table width="90%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" colspan="3"><input type="checkbox" id="check" onchange="paralt(this.checked);" checked><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"> Orientación (X - Z)<br></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Paredes</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Altura (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=0</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xalt_xz" id="dato_b1" class="long" onkeyup="PasarValor_b();" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td height="50" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">X=X</font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Z = </font><input type="text" name="xalt_xxz" id="dato_b2" class="long" readonly="readonly" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de la Tabla Paredes Vista Frontal 2
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Principal
echo '		&nbsp;';
// Tabla Construcción Parted Interna
echo '		<table width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
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
// Fin de la Tabla Paredes Vista Planta
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Pared Internal
echo '		&nbsp;';
// Tabla Construcción Puertas
echo '		<table width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="8" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Puerta</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td rowspan="3"><img src="img/puerta.png" width="350" height="200"></td>';
// Tabla de Puertas Norte
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_n" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_n" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_n" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Norte
echo '			<td>&nbsp;</td>';
// Tabla de Puertas Sur
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_s" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_s" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_s" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Sur
echo '			<td>&nbsp;</td>';
// Tabla de Puertas Este
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_e" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_e" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_e" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Este
echo '			<td>&nbsp;</td>';
// Tabla de Puertas Oeste
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="4"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xpxi_o" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xpe_o" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xph_o" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin del Oeste
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Puertas
echo '		&nbsp;';
// Tabla Construcción Ventanas
echo '		<table width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			<td align="center" colspan="9" bgcolor="#CCCCCC" height="40"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d">Construcción de Ventanas</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td rowspan="3"><img src="img/ventana.png" width="350" height="200"></td>';
// Tabla de Ventanas Norte
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_n" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_n" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_n" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_n" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Norte
echo '			<td>&nbsp;</td>';
// Tabla de Ventanas Sur
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_s" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_s" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_s" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_s" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Sur
echo '			<td>&nbsp;</td>';
// Tabla de Ventanas Este
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_e" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_e" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_e" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_e" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Este
echo '			<td>&nbsp;</td>';
// Tabla de Ventanas Oeste
echo '			<td id="forma_int"><table width="70%" height="100%" border="0" cellpadding="" cellspacing="0" bgcolor="#f2f2f2">';
echo '			  <tr>';
echo '				<td align="center" rowspan="5"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b><i>Dimensiones (m)</i></b></font></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">a</font><input type="text" name="xvxi_o" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">b</font><input type="text" name="xvyi_o" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">w</font><input type="text" name="xve_o" class="long" /></td>';
echo '			  </tr>';
echo '			  <tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">h</font><input type="text" name="xvh_o" class="long" /></td>';
echo '			  </tr>';
echo '			</table></td>';
// Fin de Ventana Oeste
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Ventanas
echo '		  </tr>';
echo '		</table>';
// Fin de la Tabla Venatanas
echo '		&nbsp;';
echo '		<table width="98%" height="100%" border="1" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="center" colspan="5"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b>Componente Constructivo</b></font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Orientación/Material</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Componente</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Puerta</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Ventana</b></font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="center" height="60"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Norte</b></font></td>';
echo '			  		<td align="center">';
echo '						<select name="xpn_pared_cod" type="text" size="1" id="sel_pared">';
							$res_pared = mysqli_query($sql_pared, $con);
							while ($row_pared = mysql_fetch_array($res_pared, MYSQL_ASSOC)){
							echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
/*echo '			  		<td align="center">';
echo '						<select name="xpn_recub_cod" type="text" size="1" id="sel_pared">';
							$res_recub = mysqli_query($sql_recub, $con);
							while ($row_recub = mysql_fetch_array($res_recub, MYSQL_ASSOC)){
							echo '<option value="'.$row_recub['id'].'">'.$row_recub['proy_descripcion'].'</option>';
							}
echo '						</select>';*/
echo '			  		<td align="center">';
echo '						<select name="xpn_puerta_cod" type="text" size="1" id="sel_pared">';
							$res_puerta = mysqli_query($sql_puerta, $con);
							while ($row_puerta = mysql_fetch_array($res_puerta, MYSQL_ASSOC)){
							echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xpn_vent_cod" type="text" size="1" id="sel_pared">';
							$res_ventana = mysqli_query($sql_ventana, $con);
							while ($row_ventana = mysql_fetch_array($res_ventana, MYSQL_ASSOC)){
							echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '					</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="center" height="60"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Sur</b></font></td>';
echo '			  		<td align="center">';
echo '						<select name="xpo_par_cod" type="text" size="1" id="sel_pared">';
							$res_pared = mysqli_query($sql_pared, $con);
							while ($row_pared = mysql_fetch_array($res_pared, MYSQL_ASSOC)){
							echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
/*echo '			  		<td align="center">';
echo '						<select name="xpo_recub_cod" type="text" size="1" id="sel_pared">';
							$res_recub = mysqli_query($sql_recub, $con);
							while ($row_recub = mysql_fetch_array($res_recub, MYSQL_ASSOC)){
							echo '<option value="'.$row_recub['id'].'">'.$row_recub['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';*/
echo '			  		<td align="center">';
echo '						<select name="xpo_puerta_cod" type="text" size="1" id="sel_pared">';
							$res_puerta = mysqli_query($sql_puerta, $con);
							while ($row_puerta = mysql_fetch_array($res_puerta, MYSQL_ASSOC)){
							echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xpo_vent_cod" type="text" size="1" id="sel_pared">';
							$res_ventana = mysqli_query($sql_ventana, $con);
							while ($row_ventana = mysql_fetch_array($res_ventana, MYSQL_ASSOC)){
							echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="center" height="60"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Este</b></font></td>';
echo '			  		<td align="center">';
echo '						<select name="xpe_par_cod" type="text" size="1" id="sel_pared">';
							$res_pared = mysqli_query($sql_pared, $con);
							while ($row_pared = mysql_fetch_array($res_pared, MYSQL_ASSOC)){
							echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
/*echo '			  		<td align="center">';
echo '						<select name="xpe_recub_cod" type="text" size="1" id="sel_pared">';
							$res_recub = mysqli_query($sql_recub, $con);
							while ($row_recub = mysql_fetch_array($res_recub, MYSQL_ASSOC)){
							echo '<option value="'.$row_recub['id'].'">'.$row_recub['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';*/
echo '			  		<td align="center">';
echo '						<select name="xpe_puerta_cod" type="text" size="1" id="sel_pared">';
							$res_puerta = mysqli_query($sql_puerta, $con);
							while ($row_puerta = mysql_fetch_array($res_puerta, MYSQL_ASSOC)){
							echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xpe_vent_cod" type="text" size="1" id="sel_pared">';
							$res_ventana = mysqli_query($sql_ventana, $con);
							while ($row_ventana = mysql_fetch_array($res_ventana, MYSQL_ASSOC)){
							echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			  <td align="center" height="60"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Oeste</b></font></td>';
echo '			  		<td align="center">';
echo '						<select name="xps_par_cod" type="text" size="1" id="sel_pared">';
							$res_pared = mysqli_query($sql_pared, $con);
							while ($row_pared = mysql_fetch_array($res_pared, MYSQL_ASSOC)){
							echo '<option value="'.$row_pared['proy_modelo'].'">'.$row_pared['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
/*echo '			  		<td align="center">';
echo '						<select name="xps_recub_cod" type="text" size="1" id="sel_pared">';
							$res_recub = mysqli_query($sql_recub, $con);
							while ($row_recub = mysql_fetch_array($res_recub, MYSQL_ASSOC)){
							echo '<option value="'.$row_recub['id'].'">'.$row_recub['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';*/
echo '			  		<td align="center">';
echo '						<select name="xps_puerta_cod" type="text" size="1" id="sel_pared">';
							$res_puerta = mysqli_query($sql_puerta, $con);
							while ($row_puerta = mysql_fetch_array($res_puerta, MYSQL_ASSOC)){
							echo '<option value="'.$row_puerta['id'].'">'.$row_puerta['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '			  		<td align="center">';
echo '						<select name="xps_vent_cod" type="text" size="1" id="sel_pared">';
							$res_ventana = mysqli_query($sql_ventana, $con);
							while ($row_ventana = mysql_fetch_array($res_ventana, MYSQL_ASSOC)){
							echo '<option value="'.$row_ventana['id'].'">'.$row_ventana['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		</table>';
echo '		<table width="98%" height="100%" border="1" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr height="55">';
echo '				<td align="center" width="60"><font face="Comic Sans MS,arial,verdana", size="2", color="#a62d2d"><b>Techo:</b></font></td>';
echo '			  		<td>';
echo '						<select name="xtech_incl_cod" type="text" size="1" id="sel_teinc">';
							$res_techo = mysqli_query($sql_techo, $con);
							while ($row_techo = mysql_fetch_array($res_techo, MYSQL_ASSOC)){
							echo '<option value="'.$row_techo['proy_cod'].'">'.$row_techo['proy_descripcion'].'</option>';
							}
echo '						</select>';
echo '					</td>';
echo '		  </tr>';
echo '		</table>';
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
echo '</html>';
mysql_close($con);
?>