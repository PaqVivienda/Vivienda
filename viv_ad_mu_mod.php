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
// datos para establecer la conexion con la base de mysql.
		include("conexion.php");
		function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
		{
		  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

		  switch ($theType) {
		    case "text":
		      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		      break;    
		    case "long":
		    case "int":
		      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
		      break;
		    case "double":
		      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
		      break;
		    case "date":
		      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
		      break;
		    case "defined":
		      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
		      break;
		  }
		  return $theValue;
		}
		$editFormAction = $_SERVER['PHP_SELF'];
		if (isset($_SERVER['QUERY_STRING'])) {
 			 $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
		}
		// Si recibimos un id, modificamos, sino añadimos un registro 
		if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
		  $updateSQL = sprintf("UPDATE dg_usuario SET usuario=%s, nombre=%s, password=%s, email=%s, fecha=%s, condicion=%s, departamento=%s, perfil=%s WHERE Id=%s",
		  			   GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['pass'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['fecha'], "date"),
					   GetSQLValueString($_POST['condicion'], "text"),
					   GetSQLValueString($_POST['dep'], "text"),
					   GetSQLValueString($_POST['perfil'], "text"),
                       GetSQLValueString($_POST['Id'], "int"));

		  mysqli_select_db('modelos', $con);
		  $Result1 = mysqli_query($updateSQL, $con) or die(mysqli_error($con));
			// Rango para el envío de Correos

			// Fin del Codigo de Envío
		  $updateGoTo = "vfl_ad_mu.php";
		  if (isset($_SERVER['QUERY_STRING'])) {
		    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
		    $updateGoTo .= $_SERVER['QUERY_STRING'];
		  }
		  header(sprintf("Location: %s", $updateGoTo));
		}
		mysqli_select_db('modelos', $con);
		
		$valor = $_GET['Id'];
		$query_modificar_consulta = "SELECT * FROM dg_usuario where id=$valor";
		$modificar_consulta = mysqli_query($query_modificar_consulta, $con) or die(mysqli_error($con));
		$row_modificar_consulta = mysqli_fetch_assoc($modificar_consulta);
		$totalRows_modificar_consulta = mysqli_num_rows($modificar_consulta);
// FIN DE LA SOLICITUD RECIBIDA
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
echo '</head>';
// Body
echo '<body>';
echo '<div id="art-main">';
echo '    <header id="main-header">';
echo '   	<table align="center" width="96%" height="100%" border="0" cellpadding="0" cellspacing="0">';
echo '         <tr>';
echo '			<td width="50%" align="left" valign="middle"><small><img src="img/vivienda.png" id="girando" width="300" width=*92" /></small></td>';
echo '			<td width="50%" align="right" valign="middle"><small><img src="img/vfl_mu_png.png" alt="" width="325" height="77" /></small></td>';
echo '         </tr>';
echo '       </table>';
echo '    </header>'; // Fin del Header
echo '    <div id="wrap">';
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td width="100%" align="right">';
echo '					<div class="grid_7" align="right">';
echo '				    	<a href="viv_ad_mu.php" class="dashboard-mod" target="">
			            			    	<span>Salir..</span>
							</a>';
echo '				  	</div>';
echo '				</td>';
echo '			</tr>';
echo '		</table>';
echo '	  <div id="envoltura">';
echo '		<table align="center" width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td width="100%" colspan="2" align="center"><font face="Comic Sans MS,arial,verdana", size="+2", color="#5B0000">Datos del Usuario</font></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '	<form id="form1" name="form1" action="'.$editFormAction.'" method="post" >';
echo '		<table align="center" width="45%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Usuario :</font>';
echo '			  <input name="username" type="text" id="username" class="username" value="'.$row_modificar_consulta['usuario'].'" size="30"/ ></td>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Nombres :</font>';
echo '			  <input name="nombre" type="text" id="nombre" class="nombre" value="'.$row_modificar_consulta['nombre'].'" size="30"/ ></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td><p>&nbsp;</p></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Contraseña :</font>';
echo '			  <input name="pass" type="text" id="pass" class="pass" value="'.$row_modificar_consulta['password'].'" / ></td>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Departamento :</font>';
echo '			  <input name="dep" type="text" id="dep" class="dep" value="'.$row_modificar_consulta['departamento'].'" / ></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td><p>&nbsp;</p></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Correo :</font>';
echo '			  <input name="email" type="text" id="email" class="email" value="'.$row_modificar_consulta['email'].'" / ></td>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Perfil :</font>';
echo '			  <input name="perfil" type="text" id="perfil" class="perfil" value="'.$row_modificar_consulta['perfil'].'" / ></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td><p>&nbsp;</p></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Fecha :</font>';
echo '			  <input name="fecha" type="date" class="fecha" value="'.$row_modificar_consulta['fecha'].'" /><br/></td>';
echo '			  <td width="50%" align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#5B0000">Condición :</font>';
echo '			  	<input type="text" name="condicion" value="'.$row_modificar_consulta['condicion'].'" size="16" />';
echo '			  </td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td><p>&nbsp;</p></td>';
echo '			</tr>';
echo '			  <td align="center"><p id="bot" align="center"><input name="submit" type="submit" id="boton" value="Actualizar Registro" class="boton"/></p></td>';
echo '			  <input type="hidden" name="MM_update" value="form1">';
echo '			  <input type="hidden" name="Id" value="'.$row_modificar_consulta['id'].'">';
echo '		</table>';
echo '	</form>';
echo '	  </div>';
echo '		<p>&nbsp;</p>';
echo '		<table width="90%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td align="left"><font face="Comic Sans MS,arial,verdana", size="2", color="#000000">Usuario..: <img src="img/usuario.png" width="23" height="23" /> '.$_SESSION["k_user"].'</font></td>';
echo '				<td align="right"><font face="Comic Sans MS,arial,verdana", color="#000000"><span id="liveclock" style="left:0;top:0; font-size:14px; <span id="IL_AD12" class="IL_AD"></span></font></td>';
echo '				<td align="right"><strong><font color="#000000">RIF: J-30006488-3 / <sup>®</sup> Copyright 2016 por T.S.U. Wilmer Faria</strong></font><em><br>';
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
echo '</html>';
mysqli_close($con);
?>