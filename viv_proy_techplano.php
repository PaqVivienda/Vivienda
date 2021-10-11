<?PHP

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

// Recivimos los Datos
  // Tomamos decisiones
  $_SESSION['altyz'] = $_POST['xalt_yz'];
  $_SESSION['altxz'] = $_POST['xalt_xz'];
  $xaltyz = $_SESSION['altyz'];
  $xaltxz = $_SESSION['altxz'];
  /*if ($xaltyz != " " and $xaltxz != " ") {
	  echo"<script type=\"text/javascript\">alert('Debe Introducir un Dato a la vez (Y-Z) ó (X-Z)'); window.location='viv_tech_inc.php';</script>";
  }*/
  // Proyecto ***************************************
  $proy_cod = $_SESSION['proy_cod'];
  $proy_desc = $_SESSION['proy_desc'];
  // Construcción Paredes (Longitud)
  $pns_long = $_SESSION['pns_long'];
  $peo_long = $_SESSION['peo_long'];
  // Componente Constructivo
		// Norte
		// Norte - Componente Constructivo
		$pn_modelo = $_SESSION['pn_modelo'];
		$pn_par_desc = $_SESSION['pn_par_desc'];
		$pn_capas = $_SESSION['pn_capas'];
		$pn_bloque = $_SESSION['pn_bloque'];
		$pn_dimensiones = $_SESSION['pn_dimensiones'];
		$pn_par_esp = $_SESSION['pn_par_esp'];
		$pn_par_dens = $_SESSION['pn_par_dens'];
		$pn_par_cond = $_SESSION['pn_par_cond'];
		$pn_par_calor = $_SESSION['pn_par_calor'];
		// Fin Norte
		// Sur
		// Sur - Componente Constructivo
		$ps_modelo = $_SESSION['ps_modelo'];
		$ps_par_desc = $_SESSION['ps_par_desc'];
		$ps_capas = $_SESSION['ps_capas'];
		$ps_bloque = $_SESSION['ps_bloque'];
		$ps_dimensiones = $_SESSION['ps_dimensiones'];
		$ps_par_esp = $_SESSION['ps_par_esp'];
		$ps_par_dens = $_SESSION['ps_par_dens'];
		$ps_par_cond = $_SESSION['ps_par_cond'];
		$ps_par_calor = $_SESSION['ps_par_calor'];
		// Fin Sur
		// Este
		// Este - Componente Constructivo
		$pe_modelo = $_SESSION['pe_modelo'];
		$pe_par_desc = $_SESSION['pe_par_desc'];
		$pe_capas = $_SESSION['pe_capas'];
		$pe_bloque = $_SESSION['pe_bloque'];
		$pe_dimensiones = $_SESSION['pe_dimensiones'];
		$pe_par_esp = $_SESSION['pe_par_esp'];
		$pe_par_dens = $_SESSION['pe_par_dens'];
		$pe_par_cond = $_SESSION['pe_par_cond'];
		$pe_par_calor = $_SESSION['pe_par_calor'];
		// Fin Este
		// Oeste
		// Oeste - Componente Constructivo
		$po_modelo = $_SESSION['po_modelo'];
		$po_par_desc = $_SESSION['po_par_desc'];
		$po_capas = $_SESSION['po_capas'];
		$po_bloque = $_SESSION['po_bloque'];
		$po_dimensiones = $_SESSION['po_dimensiones'];
		$po_par_esp = $_SESSION['po_par_esp'];
		$po_par_dens = $_SESSION['po_par_dens'];
		$po_par_cond = $_SESSION['po_par_cond'];
		$po_par_calor = $_SESSION['po_par_calor'];
		// Fin Oeste
  // Fin de Construcción de Paredes Longitud
  // Construcción de Paredes (Altura) ***************************
  $_SESSION['altyz'] = $_POST['xalt_yz'];
  $altyz = $_SESSION['altyz'];
  if ( $altyz != " " ) {
	  $alt_yz = $_SESSION['alt_yz'];
	  $alt_yyz = $_SESSION['alt_yyz'];
  }
  $_SESSION['altxz'] = $_POST['xalt_xz'];
  $altxz = $_SESSION['altxz'];
  if ( $altxz != " " ) {
	  $alt_xz = $_SESSION['alt_xz'];
	  $alt_xxz = $_SESSION['alt_xxz'];
  }
  // Fin de Altura
  // Construcción de Pared Interna *****************************
  $piy = $_SESSION['piy'];
  $pix = $_SESSION['pix'];
  if ( $piy != 0 ) {
	  $pi_ori = "Norte - Sur";
	  $pi_long = $pns_long;
	  $pi_alt =  $alt_yz;
	  $pi_sep = $piy;
  } else {
	  $pi_sep = 0;
	  $pi_long = 0;
	  $pi_alt = 0;
	  $pi_sep = 0;
  }
  if ( $pix != 0 ) {
	  $pi_ori = "Este - Oeste";
	  $pi_long = $peo_long;
	  $pi_alt =  $alt_xz;
	  $pi_sep = $pix;
  } else {
	   $pi_sep = 0;
	  $pi_long = 0;
	  $pi_alt = 0;
	  $pi_sep = 0;
  } 
  // Componentes de Construcción
  // Componentes
  $pint_modelo = $_SESSION['pi_modelo'];
  $pi_desc = $_SESSION['pi_desc'];
  $pi_capas = $_SESSION['pi_capas'];
  $pi_bloque = $_SESSION['pi_bloque'];
  $pi_dimensiones = $_SESSION['pi_dimensiones'];
  // Capas
  $pi_esp = $_SESSION['pi_esp'];
  $pi_dens = $_SESSION['pi_dens'];
  $pi_cond = $_SESSION['pi_cond'];
  $pi_calor = $_SESSION['pi_calor'];
  // Fin Construcción Pared Interna
  // Construcción Techo
  $tpl_modelo = $_SESSION['tpl_modelo'];
  $tpl_desc = $_SESSION['tpl_desc'];
  $tpl_capas = $_SESSION['tpl_capas'];
  $tpl_bloque = $_SESSION['tpl_bloque'];
  $tpl_dims = $_SESSION['tpl_dims'];
  // Capas
  $tpl_esp = $_SESSION['tpl_esp'];
  $tpl_dens = $_SESSION['tpl_dens'];
  $tpl_cond = $_SESSION['tpl_cond'];
  $tpl_calor = $_SESSION['tpl_calor'];
  // Fin de Construcción Techo
		// Construcción de Puertas
		// Puerta Norte
		if ( $_POST['xpxi_n'] != "" ) {
	   		$pxi_n = 0.00;
	   		$pe_n = 0.00;
	   		$ph_n = 0.00;
   		} else {
	   		$pxi_n = $_SESSION['pxi_n'];
	   		$pe_n = $_SESSION['pe_n'];
	   		$ph_n = $_SESSION['ph_n'];
   		}
		$pn_puerta_desc = $_SESSION['pn_puerta_desc'];
		if ( $pn_puerta_desc != "Ninguno" ) {
	  		$pn_puerta_esp = $_SESSION['pn_puerta_esp'];
	  		$pn_puerta_dens = $_SESSION['pn_puerta_dens'];
	  		$pn_puerta_cond = $_SESSION['pn_puerta_cond'];
	  		$pn_puerta_calor = $_SESSION['pn_puerta_calor'];
	  		$pn_puerta = $_SESSION['pn_puerta'];
  		} else {
	  		$pn_puerta_desc = "";
	  		$pn_puerta_esp = 0.00;
	  		$pn_puerta_dens = 0.00;
	  		$pn_puerta_cond = 0.00;
	  		$pn_puerta_calor = 0.00;
  		}
		//*************
		// Puerta Sur
		if ( $_POST['xpxi_s'] != "" ) {
	  		$pxi_s = 0.00;
	  		$pe_s = 0.00;
	  		$ph_s = 0.00;
  		} else {
	  		$pxi_s = $_SESSION['pxi_s'];
	  		$pe_s = $_SESSION['pe_s'];
	  		$ph_s = $_SESSION['ph_s'];
  		}
		$ps_puerta_desc = $_SESSION['ps_puerta_desc'];
		if ( $ps_puerta_desc != "Ninguno" ) {
	  		$ps_puerta_esp = $_SESSION['ps_puerta_esp'];
	  		$ps_puerta_dens = $_SESSION['ps_puerta_dens'];
	  		$ps_puerta_cond = $_SESSION['ps_puerta_cond'];
	  		$ps_puerta_calor = $_SESSION['ps_puerta_calor'];
	  		$ps_puerta = $_SESSION['ps_puerta'];
  		} else {
	  		$ps_puerta_desc = "";
	  		$ps_puerta_esp = 0.00;
	  		$ps_puerta_dens = 0.00;
	  		$ps_puerta_cond = 0.00;
	  		$ps_puerta_calor = 0.00;
  		}
		//*************
		// Puerta Este
		if ( $_POST['xpxi_e'] != "" ) {
	  		$pxi_e = 0.00;
	  		$pe_e = 0.00;
	  		$ph_e = 0.00;
  		} else {
	  		$pxi_e = $_SESSION['pxi_e'];
	  		$pe_e = $_SESSION['pe_e'];
	  		$ph_e = $_SESSION['ph_e'];
  		}
		$pe_puerta_desc = $_SESSION['pe_puerta_desc'];
		if ( $pe_puerta_desc != "Ninguno" ) {
	  		$pe_puerta_esp = $_SESSION['pe_puerta_esp'];
	  		$pe_puerta_dens = $_SESSION['pe_puerta_dens'];
	  		$pe_puerta_cond = $_SESSION['pe_puerta_cond'];
	  		$pe_puerta_calor = $_SESSION['pe_puerta_calor'];
	  		$pe_puerta = $_SESSION['pe_puerta'];
  		} else {
	  		$pe_puerta_esp = "";
	  		$pe_puerta_dens = 0.00;
	  		$pe_puerta_cond = 0.00;
	  		$pe_puerta_calor = 0.00;
  		}
		//*************
		// Puerta Oeste
		if ( $_POST['xpxi_o'] != "" ) {
	  		$pxi_o = 0.00;
	  		$pe_o = 0.00;
	  		$ph_o = 0.00;
   		} else {
	   		$pxi_o = $_SESSION['pxi_o'];
	   		$pe_o = $_SESSION['pe_o'];
	   		$ph_o = $_SESSION['ph_o'];
   		}
		$po_puerta_desc = $_SESSION['po_puerta_desc'];
		if ( $po_puerta_desc != "Ninguno" ) {
	  		$po_puerta_esp = $_SESSION['po_puerta_esp'];
	  		$po_puerta_dens = $_SESSION['po_puerta_dens'];
	  		$po_puerta_cond = $_SESSION['po_puerta_cond'];
	  		$po_puerta_calor = $_SESSION['po_puerta_calor'];
	  		$po_puerta = $_SESSION['po_puerta'];
  		} else {
	  		$po_puerta_desc = "";
	  		$po_puerta_esp = 0.00;
	  		$po_puerta_dens = 0.00;
	  		$po_puerta_cond = 0.00;
	  		$po_puerta_calor = 0.00;
  		}
		//*************
	// Fin Construcción de Puertas
	// Fin de Construcción de Puertas
	// Construcción de Ventana
		// Ventana Norte
		if ( $_POST['xvxi_n'] != "" ) {
	  		$vxi_n = 0.00;
	  		$vyi_n = 0.00;
	  		$ve_n = 0.00;
	  		$vh_n = 0.00;
  		} else {
	  		$vxi_n = $_SESSION['vxi_n'];
	  		$vyi_n = $_SESSION['vyi_n'];
	  		$ve_n = $_SESSION['ve_n'];
	  		$vh_n = $_SESSION['vh_n'];
  		}
		$pn_vent_desc = $_SESSION['pn_vent_desc'];
  		if ( $pn_vent_desc != "Ninguno" ) {
	  		$pn_vent_esp = $_SESSION['pn_vent_esp'];
	  		$pn_vent_dens = $_SESSION['pn_vent_dens'];
	  		$pn_vent_cond = $_SESSION['pn_vent_cond'];
	  		$pn_vent_calor = $_SESSION['pn_vent_calor'];
	  		$pn_ventana = $_SESSION['pn_ventana'];
  		} else {
	  		$pn_vent_desc = "";
	  		$pn_vent_esp = 0.00;
	  		$pn_vent_dens = 0.00;
	  		$pn_vent_cond = 0.00;
	  		$pn_vent_calor = 0.00;
  		}
		//*************
		// Ventana Sur
		if ( $_POST['xvxi_s'] != "" ) {
	  		$vxi_s = 0.00;
	  		$vyi_s = 0.00;
	  		$ve_s = 0.00;
	  		$vh_s = 0.00;
  		} else {
	  		$vxi_s = $_SESSION['vxi_s'];
	  		$vyi_s = $_SESSION['vyi_s'];
	  		$ve_s = $_SESSION['ve_s'];
	  		$vh_s = $_SESSION['vh_s'];
  		}
		$ps_vent_desc = $_SESSION['ps_vent_desc'];
  		if ( $ps_vent_desc != "Ninguno" ) {
	  		$ps_vent_esp = $_SESSION['ps_vent_esp'];
	  		$ps_vent_dens = $_SESSION['ps_vent_dens'];
	  		$ps_vent_cond = $_SESSION['ps_vent_cond'];
	  		$ps_vent_calor = $_SESSION['ps_vent_calor'];
	  		$ps_ventana = $_SESSION['ps_ventana'];
  		} else {
	  		$ps_vent_desc = "";
	  		$ps_vent_esp = 0.00;
	  		$ps_vent_dens = 0.00;
	  		$ps_vent_cond = 0.00;
	  		$ps_vent_calor = 0.00;
  		}
		//*************
		// Ventana Este
		if ( $_POST['xvxi_e'] != "" ) {
	  		$vxi_e = 0.00;
	  		$vyi_e = 0.00;
	  		$ve_e = 0.00;
	  		$vh_e = 0.00;
  		} else {
	  		$vxi_e = $_SESSION['vxi_e'];
	  		$vyi_e = $_SESSION['vyi_e'];
	  		$ve_e = $_SESSION['ve_e'];
	  		$vh_e = $_SESSION['vh_e'];
  		}
		$pe_vent_desc = $_SESSION['pe_vent_desc'];
 		 if ( $pe_vent_desc != "Ninguno" ) {
	  		$pe_vent_desc = $_SESSION['pe_vent_desc'];
	  		$pe_vent_esp = $_SESSION['pe_vent_esp'];
	 		$pe_vent_dens = $_SESSION['pe_vent_dens'];
	  		$pe_vent_cond = $_SESSION['pe_vent_cond'];
	  		$pe_vent_calor = $_SESSION['pe_vent_calor'];
	  		$pe_ventana = $_SESSION['pe_ventana'];
  		} else {
	  		$pe_vent_esp = "";
	  		$pe_vent_dens = 0.00;
	  		$pe_vent_cond = 0.00;
	 		$pe_vent_calor = 0.00;
 		 }
		//*************
		// Ventana Oeste
		if ( $_POST['xvxi_o'] != "" ) {
	  		$vxi_o = 0.00;
	  		$vyi_o = 0.00;
	  		$ve_o = 0.00;
	  		$vh_o = 0.00;
  		} else {
	  		$vxi_o = $_SESSION['vxi_o'];
	  		$vyi_o = $_SESSION['vyi_o'];
	  		$ve_o = $_SESSION['ve_o'];
	  		$vh_o = $_SESSION['vh_o'];
  		}
		$po_vent_desc = $_SESSION['po_vent_desc'];
  		if ( $row_po_vent_cod['proy_descripcion'] != "Ninguno" ) {
	  		$po_vent_esp = $_SESSION['po_vent_esp'];
	  		$po_vent_dens = $_SESSION['po_vent_dens'];
	  		$po_vent_cond = $_SESSION['po_vent_cond'];
	  		$po_vent_calor = $_SESSION['po_vent_calor'];
	  		$po_ventana = $_SESSION['po_ventana'];
  		} else {
	  		$po_vent_desc = "";
	  		$po_vent_esp = 0.00;
	  		$po_vent_dens = 0.00;
	  		$po_vent_cond = 0.00;
	  		$po_vent_calor = 0.00;
  		}
		//*************
	// Fin de Construcción de Ventana
// Fin de la toma de Datos **************************************************************
include('conexion.php');
$sql_pn_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pn_modelo'";
$sql_ps_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$ps_modelo'";
$sql_pe_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pe_modelo'";
$sql_po_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$po_modelo'";
$sql_pi_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pint_modelo'";
$sql_tpl_cap = "SELECT * FROM proy_techo_capas where proy_cod_capa = '$tpl_modelo'";

 
######################################################
 ## Para "Inyectar" el Respaldo a la Base de datos
 ######################################################
 ## $inyecta = "mysql --user=$db_user --password=$db_pass --database=$db_name < /home/sitio/backups/db-XXXXXXX.sql ";
 ## $a = system($inyecta);
 ######################################################
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
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcción de Vivienda con Techo Plano</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		<table width="30%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Datos de Construcción</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Proyecto:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr height="30">';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Código del Proyecto:</b> <b>'.$proy_cod.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Nombre del Proyecto:</b> '.$proy_desc.'</font></td>';
echo '			</tr>';
echo '		</table>';
// Construcción de Paredes ***************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr height="30">';
echo '			  <td align="center" colspan="8"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Descripción de Paredes</i></b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Pared</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Long.</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Alt.</b></font></td>';
echo '			  <td align="left" style="padding:2px" rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Descripción / Capas</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Espesor</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Densidad</b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Conductividad</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Calor Específico</b></font></td>';
echo '			</tr>';

echo '			<tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(mm)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kg/m^3)</small></b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(W/m.ºC)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="8"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>'; // Construcción Pared Norte **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pns_long.'</i></b></font></td>';
if ( $altyz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yz.'</i></b></font></td>';
} else {
if ( $altxz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_xz.'</i></b></font></td>';
}}
echo '			  <td align="left"><a href="" title="'.$pn_par_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($pn_par_desc,0,52).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_par_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_par_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_par_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_par_calor.'</b></font></td>';
echo '			</tr>'; // Finalización de la Pared Norte
				$res_pn = mysqli_query($con, $sql_pn_cap);
				while ($row_pn = mysqli_fetch_array($res_pn, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pn['proy_desc_capa'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pn['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pn['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pn['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pn['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
echo '			<tr><td colspan="8"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>'; // Construcción Pared Sur **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pns_long.'</i></b></font></td>';
if ( $altyz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yz.'</i></b></font></td>';
} else {
if ( $altxz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_xz.'</i></b></font></td>';
}}
echo '			  <td align="left"><a href="" title="'.$ps_par_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($ps_par_desc,0,52).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_par_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_par_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_par_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_par_calor.'</b></font></td>';
echo '			</tr>'; // Finalización de la Pared Sur
				$res_ps = mysqli_query($con, $sql_ps_cap);
				while ($row_ps = mysqli_fetch_array($res_ps, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ps['proy_desc_capa'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ps['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ps['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ps['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ps['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
echo '			<tr><td colspan="8"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>'; // Construcción Pared Este **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$peo_long.'</i></b></font></td>';
if ( $altyz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yz.'</i></b></font></td>';
} else {
if ( $altxz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_xz.'</i></b></font></td>';
}}
echo '			  <td align="left"><a href="" title="'.$pe_par_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($pe_par_desc,0,52).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_par_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_par_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_par_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_par_calor.'</b></font></td>';
echo '			</tr>'; // Finalización de la Pared Este
				$res_pe = mysqli_query($con, $sql_pe_cap);
				while ($row_pe = mysqli_fetch_array($res_pe, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pe['proy_desc_capa'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pe['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pe['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pe['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pe['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
echo '			<tr><td colspan="8"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>'; // Construcción Pared Oeste **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$peo_long.'</i></b></font></td>';
if ( $altyz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yz.'</i></b></font></td>';
} else {
if ( $altxz != " " ) {
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_xz.'</i></b></font></td>';
}}
echo '			  <td align="left"><a href="" title="'.$po_par_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($po_par_desc,0,52).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_par_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_par_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_par_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_par_calor.'</b></font></td>';
echo '			</tr>'; // Finalización de la Pared Oeste
				$res_po = mysqli_query($con, $sql_po_cap);
				while ($row_po = mysqli_fetch_array($res_po, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_po['proy_desc_capa'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_po['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_po['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_po['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_po['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
echo '		</table>';
// Fin Construcción de Paredes ***********************************
// Construcción de Pared Interna *********************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr height="30">';
echo '			  <td align="center" colspan="9"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Descripción de Pared Interna</i></b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Orientación</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Long.</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Alt.</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Sep.</b></font></td>';
echo '			  <td align="left" style="padding:2px" rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Descripción / Capas</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Espesor</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Densidad</b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Conductividad</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Calor Específico</b></font></td>';
echo '			</tr>';

echo '			<tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(mm)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kg/m^3)</small></b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(W/m.ºC)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';

echo '			<tr><td colspan="9"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>'; // Dimensiones de la Pared Interna **************************************************************
if ($piy > 0) {
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pi_ori.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pns_long.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yz.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pi_sep.'</i></b></font></td>';
echo '			  <td align="left"><a href="" title="'.$pi_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($pi_desc,0,42).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_calor.'</b></font></td>';
echo '			</tr>';
				$res_pi = mysqli_query($con, $sql_pi_cap);
				while ($row_pi = mysqli_fetch_array($res_pi, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_desc_capa'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
} else {
if ($pix > 0) {
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pi_ori.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$peo_long.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_xz.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pi_sep.'</i></b></font></td>';
echo '			  <td align="left"><a href="" title="'.$pi_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($pi_desc,0,42).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pi_calor.'</b></font></td>';
echo '			</tr>';
				$res_pi = mysqli_query($con, $sql_pi_cap);
				while ($row_pi = mysqli_fetch_array($res_pi, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td>&nbsp;</td>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_desc_capa'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
} else {
if ($piy == "0" and $pix == "0") {
}}}
echo '		</table>';
// Fin de Construcción de Pared Interna **************************
// Construcción de Puertas ***************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr height="30">';
echo '			  <td align="center" colspan="9"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Descripción de Puertas</i></b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Pared</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Sep.</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Ancho</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Alt.</b></font></td>';
echo '			  <td align="left" style="padding:2px" rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Descripción</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Espesor</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Densidad</b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Conductividad</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Calor Específico</b></font></td>';
echo '			</tr>';

echo '			<tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(mm)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kg/m^3)</small></b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>((W/m.ºC)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';

echo '			<tr><td colspan="9"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
if ( $pn_puerta == 1 ) { // Pared Norte
echo '			<tr>'; // Puerta - Pared Norte **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pxi_n.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pe_n.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ph_n.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_puerta_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_puerta_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_puerta_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_puerta_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_puerta_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="9"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
if ( $ps_puerta == 1 ) { // Pared Sur
echo '			<tr>'; // Puerta - Pared Sur **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pxi_s.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pe_s.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ph_s.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_puerta_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_puerta_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_puerta_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_puerta_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_puerta_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="9"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
if ( $pe_puerta == 1 ) { // Pared Este
echo '			<tr>'; // Puerta - Pared Este **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pxi_e.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pe_e.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ph_e.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_puerta_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_puerta_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_puerta_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_puerta_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_puerta_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="9"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
if ( $po_puerta == 1 ) { // Pared Oeste
echo '			<tr>'; // Puerta - Pared Oeste **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pxi_o.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pe_o.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ph_o.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_puerta_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_puerta_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_puerta_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_puerta_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_puerta_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="9"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
echo '		</table>';
// Fin de Construcción de Puertas ********************************
// Construcción de Ventanas ***************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr height="30">';
echo '			  <td align="center" colspan="10"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Descripción de Ventanas</i></b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Pared</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Sep. Pared</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Sep. Piso</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Ancho</b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Alt.</b></font></td>';
echo '			  <td align="left" style="padding:2px" rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Descripción</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Espesor</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Densidad</b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Conductividad</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Calor Específico</b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(m)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(mm)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kg/m^3)</small></b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(W/m.ºC)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="10"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
if ( $pn_ventana == 1 ) { // Ventana Norte
echo '			<tr>'; // Ventana **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Norte</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vxi_n.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vyi_n.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ve_n.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vh_n.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_vent_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_vent_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_vent_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_vent_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_vent_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="10"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
if ( $ps_ventana == 1 ) { // Ventana Norte
echo '			<tr>'; // Ventana **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Sur</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vxi_s.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vyi_s.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ve_s.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vh_s.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_vent_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_vent_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_vent_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ps_vent_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pn_vent_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="10"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
if ( $pe_ventana == 1 ) { // Ventana Este
echo '			<tr>'; // Ventana **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Este</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vxi_e.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vyi_e.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ve_e.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vh_e.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_vent_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_vent_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_vent_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_vent_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$pe_vent_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="10"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
if ( $po_ventana == 1 ) { // Ventana Oeste
echo '			<tr>'; // Ventana **************************************************************
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>Oeste</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vxi_o.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vyi_o.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$ve_o.'</i></b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$vh_o.'</i></b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_vent_desc.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_vent_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_vent_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_vent_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$po_vent_calor.'</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="10"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
} else {
}
echo '		</table>';
// Techoi ***************************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="97%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr height="30">';
echo '			  <td align="center" colspan="5"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Descripción de Techo</i></b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" style="padding:2px" rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Descripción / Capas</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Espesor</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Densidad</b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Conductividad</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Calor Específico</b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(mm)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kg/m^3)</small></b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(W/m.ºc)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="5"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>';
echo '			  <td align="left"><a href="" title="'.$tpl_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($tpl_desc,0,48).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$tpl_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$tpl_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$tpl_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$tpl_calor.'</b></font></td>';
echo '			</tr>';
				$res_tpl = mysqli_query($con, $sql_tpl_cap);
				while ($row_tpl = mysqli_fetch_array($res_tpl, MYSQLI_ASSOC)){
					echo '<tr>';
					echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_tpl['proy_descripcion'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_tpl['proy_espesor'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_tpl['proy_densidad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_tpl['proy_conductividad'].'</b></font></td>';
					echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_tpl['proy_calorespecifico'].'</b></font></td>';
					echo '</tr>';
}
echo '			<tr><td colspan="5"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="right"><a href="viv_proy_plano_sim.php" class="opciones_a">Panel de Control - Simulación</a></td>';
echo '		  </tr>';
echo '		</table>';
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
echo '</html>';
mysqli_close($con);

?>
