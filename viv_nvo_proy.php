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
$consulta_mysql = "SELECT * FROM proy_ano WHERE nom = 'anos'";
$resultado_consulta_mysql = mysqli_query($con, $consulta_mysql);

while($registro=mysqli_fetch_array($resultado_consulta_mysql)){
			$ano = $registro['ano']."";
			$anos = $registro['nom']."";}
if ($ano != date("Y")) {
		$actual = date("Y");
		$sSQL="UPDATE proy_ano SET ano='$actual' WHERE nom='$anos'";
		mysqli_query($con , $sSQL);
		// Colocamos en Cero los Conteos
		$conteo_cero = 0;
		$SQL = "UPDATE proy_cont SET conteo=$conteo_cero WHERE accion='CONAC'";
		mysqli_query($con, $SQL);
}

$consulta_mysql = "SELECT max(conteo)+1 as conteo FROM proy_cont WHERE accion = 'CONAC'";
 
$resultado_consulta_mysql = mysqli_query($con, $consulta_mysql);
 
while($registro = mysqli_fetch_array($resultado_consulta_mysql)){
	$cont = $registro['conteo']."";
	$res = str_pad($cont, 3, '0', STR_PAD_LEFT);
	$_SESSION['b_res'] = $res;
}
// Colocamos el Número del Proyecto
$n_proyecto = "PROY-".date("y")."-".date("m")."-".$res;
// FIN DE LA CONEXION A LA BASE DE DATOS
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
echo '			<td width="50%" align="right" valign="middle"><small><img src="img/nproyecto.png" alt="" width="325" height="77" /></small></td>';
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
echo '		<form id="form-login" action="proy_almproyecto.php" method="post" >';
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Proyecto de Vivienda</i></b></font></div></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td style="padding:15px 0;"><select name="techo_pi" id="sel_techo" type="text" size="1">
					  <option value="002">Techo Plano</option>
					  <option value="001">Techo Inclinado</option>
					  </select></td>';
echo '			  <td><input type="text" name="login_desc" id="desc" required="required" placeholder="Nombre del Proyecto" /></td>';
echo '			  <td><input type="text" name="login_codigo" id="codigo" required="required" value="'.$n_proyecto.'" readonly /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			</tr>';
echo '		</table>';
echo '		&nbsp;';
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td align="center"><input class="op" type="submit" value="Generar Proyecto" name="registrar" class="submit" /></td>';
echo '			</tr>';
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
echo '</html>' ;
mysqli_close($con);
?>
