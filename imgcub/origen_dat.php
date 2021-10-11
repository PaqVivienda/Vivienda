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
  // Proyecto
  $proy_cod = $_SESSION['proy_cod'];
  $proy_desc = $_SESSION['proy_desc'];
  // Construcción Paredes (Longitud)
  $pns_long = $_SESSION['pns_long'];
  $peo_long = $_SESSION['peo_long'];
  //*****************************************
   // Construcción de Paredes (Altura) ***************************
  if ( $altyz != " " ) {
	  $alt_yz = $_SESSION['alt_yz'];
	  $alt_yyz = $_SESSION['alt_yyz'];
	  $_SESSION['alt_yz'];
  } else {
	  $alt_xz = $_SESSION['alt_xz'] + 2;
	  $alt_xxz = $_SESSION['alt_xxz'];
	  $_SESSION['alt_xz'];
  }
  // Fin de Altura
  $pns_long = $_SESSION['pns_long'] + 2;
  $peo_long = $_SESSION['peo_long'] + 2;
  $pns_long = $_SESSION['pns_long'];
  $peo_long = $_SESSION['peo_long'];
  //*******************************************
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
  //*******************************************
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
  //*******************************************
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
  //********************************************
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
  //********************************************
  // Pared Interna
  $_SESSION['piy'] = "1";
  $_SESSION['pix'] = "1";
  $piy = $_SESSION['piy'];
  $pix = $_SESSION['pix'];
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
  //*******************************************
  // Puertas
  if ( $pn_puerta = "Activar" ) {
	  $pxi_n = $_SESSION['pxi_n'];
	  $pe_n = $_SESSION['pe_n'];
	  $ph_n = $_SESSION['ph_n'];
	  $pn_puerta_dens = $_SESSION['pn_puerta_dens'];
	  $pn_puerta_cond = $_SESSION['pn_puerta_cond'];
	  $pn_puerta_calor = $_SESSION['pn_puerta_calor'];
  }
  if ( $ps_puerta = "Activar" ) {
	  $pxi_s = $_SESSION['pxi_s'];
	  $pe_s = $_SESSION['pe_s'];
	  $ph_s = $_SESSION['ph_s'];
	  $ps_puerta_dens = $_SESSION['ps_puerta_dens'];
	  $ps_puerta_cond = $_SESSION['ps_puerta_cond'];
	  $ps_puerta_calor = $_SESSION['ps_puerta_calor'];
  }
  if ( $pe_puerta = "Activar" ) {
	  $pxi_e = $_SESSION['pxi_e'];
	  $pe_e = $_SESSION['pe_e'];
	  $ph_e = $_SESSION['ph_e'];
	  $pe_puerta_dens = $_SESSION['pe_puerta_dens'];
	  $pe_puerta_cond = $_SESSION['pe_puerta_cond'];
	  $pe_puerta_calor = $_SESSION['pe_puerta_calor'];
  }
  if ( $po_puerta = "Activar" ) {
	  $pxi_o = $_SESSION['pxi_o'];
	  $pe_o = $_SESSION['pe_o'];
	  $ph_o = $_SESSION['ph_o'];
	  $po_puerta_dens = $_SESSION['po_puerta_dens'];
	  $po_puerta_cond = $_SESSION['po_puerta_cond'];
	  $po_puerta_calor = $_SESSION['po_puerta_calor'];
  }
  //********************************************
  // Ventana
  if ( $pn_ventana = "Activar" ) {
	  $vxi_n = $_SESSION['vxi_n'];
	  $vyi_n = $_SESSION['vyi_n'];
	  $ve_n = $_SESSION['ve_n'];
	  $vh_n = $_SESSION['vh_n'];
	  $pn_vent_dens = $_SESSION['pn_vent_dens'];
	  $pn_vent_cond = $_SESSION['pn_vent_cond'];
	  $pn_vent_calor = $_SESSION['pn_vent_calor'];
  }
  if ( $ps_ventana = "Activar" ) {
	  $vxi_s = $_SESSION['vxi_s'];
	  $vyi_s = $_SESSION['vyi_s'];
	  $ve_s = $_SESSION['ve_s'];
	  $vh_s = $_SESSION['vh_s'];
	  $ps_vent_dens = $_SESSION['ps_vent_dens'];
	  $ps_vent_cond = $_SESSION['ps_vent_cond'];
	  $ps_vent_calor = $_SESSION['ps_vent_calor'];
  }
  if ( $pe_ventana = "Activar" ) {
	  $vxi_e = $_SESSION['vxi_e'];
	  $vyi_e = $_SESSION['vyi_e'];
	  $ve_e = $_SESSION['ve_e'];
	  $vh_e = $_SESSION['vh_e'];
	  $pe_vent_dens = $_SESSION['pe_vent_dens'];
	  $pe_vent_cond = $_SESSION['pe_vent_cond'];
	  $pe_vent_calor = $_SESSION['pe_vent_calor'];
  }
  if ( $po_ventana = "Activar" ) {
	  $vxi_o = $_SESSION['vxi_o'];
	  $vyi_o = $_SESSION['vyi_o'];
	  $ve_o = $_SESSION['ve_o'];
	  $vh_o = $_SESSION['vh_o'];
	  $po_vent_dens = $_SESSION['po_vent_dens'];
	  $po_vent_cond = $_SESSION['po_vent_cond'];
	  $po_vent_calor = $_SESSION['po_vent_calor'];
  }
  //********************************************
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
  //********************************************
  // Simulación
  $titulo = $_SESSION['titulo'];
  $ttsim  = $_SESSION['ttsim'];
  $or_desc = $_SESSION['or_desc'];
  $or_img  = $_SESSION['or_img'];
  $carpeta = $_SESSION['carpeta'];
  $tec = $_SESSION['tec'];
  $dat1 = $_SESSION['dat1'];
  $dat2 = $_SESSION['dat2'];
  //*********************************************
  // Condiciones Meteorológicas
  $nubosidad = $_SESSION['nubosidad'];
  $cambaire = $_SESSION['cmbaire'];
  $humrelat = $_SESSION['humrel'];
  $velaire = $_SESSION['velaire'];
  $cm_region = $_SESSION['cm_region'];
  $cm_mes = $_SESSION['cm_mes'];
  $cm_latitud = $_SESSION['cm_latitud'];
  $cm_declinacion = $_SESSION['cm_declinacion'];
  $cm_hlocal_hsolar = $_SESSION['hlocal_hsolar'];
  $cm_tmin = $_SESSION['cm_tmin'];
  $cm_tmin_alos = $_SESSION['cm_tmin_alos'];
  $cm_tmax = $_SESSION['cm_tmax'];
  $cm_tmax_alos = $_SESSION['cm_tmax_alos'];
  $cm_norte = $_SESSION['cm_norte'];
  $cm_norte_alos = $_SESSION['cm_norte_alos'];
  $cm_sur = $_SESSION['cm_sur'];
  $cm_sur_alos = $_SESSION['cm_sur_alos'];
  $cm_este = $_SESSION['cm_este'];
  $cm_este_alos = $_SESSION['cm_este_alos'];
  $cm_oeste = $_SESSION['cm_oeste'];
  $cm_oeste_alos = $_SESSION['cm_oeste_alos'];
  $cm_techo = $_SESSION['cm_techo'];
  $humrel = $humrelat / 100;
  // Controles Avamzados
  $capn_cb = $_SESSION['capn_cb'];
  $capn_cr = $_SESSION['capn_cr'];
  $caps_cb = $_SESSION['caps_cb'];
  $caps_cr = $_SESSION['caps_cr'];
  $cape_cb = $_SESSION['cape_cb'];
  $cape_cr = $_SESSION['cape_cr'];
  $capo_cb = $_SESSION['capo_cb'];
  $capo_cr = $_SESSION['capo_cr'];
  $catpl_cb = $_SESSION['catpl_cb'];
  $catpl_cr = $_SESSION['catpl_cr'];
  $capta_cr = $_SESSION['capta_cr'];
  $cavna_cr = $_SESSION['cavna_cr'];
  $monit = $_SESSION['monitoreo'];
  if ( $monit == "1" ) {
	  $xxi = 0.00;
	  $xxj = 0.00;
	  $xxk = 0.00;
  } else {
	  $xxi = $_SESSION['xxi'];
	  $xxj = $_SESSION['xxj'];
	  $xxk = $_SESSION['xxk'];
  }
  // Velocidades U.V.W.
  $uvw = $_SESSION['uvw'];
  if ($uvw =="1") {
	  $xuvw = "1";
	  $xxveluvw = $_SESSION['xveluvw'];
  }else {
	  $xuvw = "0";
  }
  //********************************************
  // Presion
  $psion = $_SESSION['psion'];
  if ( $psion == "1" ) {
	  $pres = "1";
	  $presion = $_SESSION['presion'];
  }
  //********************************************
  // Temperatura
  $temp = $_SESSION['temp'];
  if ( $temp == "1" ) {
	  $tempe = "1";
	  $temperatura = $_SESSION['temper'];
  }
  $EMIP1V = $_SESSION['EMIP1V'];
  $EMITE = $_SESSION['EMITE'];
  $EMIP3V = $_SESSION['EMIP3V'];
  $EMIP4V = $_SESSION['EMIP4V'];
  $EMIP5V = $_SESSION['EMIP5V'];
  $EMIV = $_SESSION['EMIV'];
  $EMIPU = $_SESSION['EMIPU'];
  // ************************************************
  // Nodos a Contabilizar
  $xnodo_i = $_SESSION['nodo_i'] + 2;
  $xnodo_j = $_SESSION['nodo_j'] + 2;
  $xnodo_k = $_SESSION['nodo_k'] + 2;
  $i = $xnodo_i;
  $j = $xnodo_j;
  $IJK = $xnodo_k;
  $vci = $_SESSION['nodo_i'];
  $vcj = $_SESSION['nodo_j'];
  $vck = $_SESSION['nodo_k'];
  $long_nodo_i =  $pns_long / $xnodo_i;
  $long_nodo_j = $peo_long / $xnodo_j;
  $long_nodo_k = $alt_yz / $xnodo_k;
  $cara_i = $_SESSION['nodo_i'] + 1;
  $cara_j = $_SESSION['nodo_j'] + 1;
  $cara_k = $_SESSION['nodo_k'] + 1;
  $dcara_i = $pns_long / $cara_i;
  $dcara_j = $peo_long / $cara_j;
  $dcara_k = $alt_yz / $cara_k;
  // ************************************************
  // Datos de los Archivos .dat
 
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
echo '				    	<a href="viv_tech_inc.php" class="dashboard-mod" target="">
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
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Archivo .dat en Proceso</i></b></font></div></td>';
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
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Opciones Generales:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr height="30">';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Título:</b> '.$titulo.'</font></td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			</tr>';
echo '			<tr><td colspan="4"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Almacenar en Carpeta</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Salida Gráfica</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Datos Nodales</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Datos Propiedades</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="5"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$carpeta.'</font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$tec.'.tec</font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$dat1.'.dat</font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$dat2.'.dat</font></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Archivos en Proceso:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Volumen de Control:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$vci.' / J: '.$vcj.' / K: '.$vck.'</font></td>';  
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Datos de Nodos:</b></font></td>';
if ( $altyz != " " ) {
	$SKij = round($altyz);
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$i.' / J: '.$j.' / K: '.$IJK.'</font></td>';  
} else {
	$SKij = round($alt_xz);
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$i.' / J: '.$j.' / K: '.$IJK.'</font></td>';  
}
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Distamcia entre Nodos:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.number_format($long_nodo_i, 2, ".", "").' / J: '.number_format($long_nodo_j, 2, ".", "").' / K: '.number_format($long_nodo_k, 2, ".", "").'</font></td>';  
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Caras:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$cara_i.' / J: '.$cara_j.' / K: '.$cara_k.'</font></td>';  
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Distancia entre Caras:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.number_format($dcara_i, 2, ".", "").' / J: '.number_format($dcara_j, 2, ".", "").' / K: '.number_format($dcara_k, 2, ".", "").'</font></td>';  
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Archivo Procesado:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Propiedades</font></td>';

// Proceso de Archivo  de Propiedades
// Creamos la Carpeta del Archivo .dat
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}
// Tomamos los datos de los Nodos
$nodo = 0.5;
$nod_ini = 1; // Piso
$nod_fin = $IJK; // Techo
$nod_i_ini = 1; // Piso Pared Norte - Sur (3)
$nod_i_fin = $i; // Techo Pared Norte - Sur (4)
$nod_j_ini = 1; // Piso Pared Este - Oeste (3)
$nod_j_fin = $j; // Techo Pared Este - Oeste (3)
$nod_k_ini = 1; // Piso
$nod_k_fin = $IJK; // Techo
// Variables de Casa
$aire = 0;
$pared = 1;
$ventana = 2;
$piso = 3;
$techo = 4;
$puerta = 5;
// Pared
if ($pe_par_cond < 1) {
	$xcond_pared = number_format($pe_par_cond*10, 5, ".", "");
} else {
	$xcond_pared = number_format($pe_par_cond/1000, 5, ".", "");
}
if ($pe_par_calor < 1) {
	$xcp_pared = number_format($pe_par_calor*10, 5, ".", "");
} else {
	$xcp_pared = number_format($pe_par_calor/1000, 5, ".", "");
}
if ($pe_par_dens < 1) {
	$xdens_pared = number_format($pe_par_dens*10, 5, ".", "");
} else {
	$xdens_pared = number_format($pe_par_dens/1000, 5, ".", "");
}
// Tercho
if ($tpl_cond < 1) {
	$xcond_pl = number_format($tpl_cond*10, 5, ".", "");
} else {
	$xcond_pl = number_format($tpl_cond/1000, 5, ".", "");
}
if ($tpl_calor < 1) {
	$xcp_tpl = number_format($tpl_calor*10, 5, ".", "");
} else {
	$xcp_tpl = number_format($tpl_calor/1000, 5, ".", "");
}
if ($tpl_dens < 1) {
	$xdens_tpl = number_format($tpl_dens*10, 5, ".", "");
} else {
	$xdens_tpl = number_format($tpl_dens/1000, 5, ".", "");
}
// Piso
$cond_piso = "8.83600E-01";
$cp_piso = "9.35000E-01";
$dens_piso = "1.21752E+03";
// Aire
$cond_aire = "2.60000E-02";
$cp_aire = "1.06300E+00";
$dens_aire = "1.22300E+00";
// Distancias entre nodos
$dnodo_i = $i-1;
$dnodo_j = $j-1;
$dnodo_k = $IJK-1;
// Distancias entre nodos
$dcara_i = $i-2;
$dcara_j = $j-2;
$dcara_k = $IJK-2;
//*******************************
$tot = (1008.00 * 1000) / 1000000;
$numa = number_format($tot, 5, ".", "");
// Crear archivos .dar (propiedades
$propiedades = fopen("$carpeta/$dat2.dat","w"); 
fwrite($propiedades, "I". "             ". "J". "             " ."K". "             ". "TIPO" . "          ". "COND". "            ". "CP" . "            ". "DENSIDAD". "\r\n");
for ($Si = 1; $Si <= $i; $Si = $Si + 1) { // Ciclo de las Paredes Norte - Sur
  for ($Sj = 1; $Sj <= $j; $Sj = $Sj + 1) { // Ciclo de las Paredes Este - Oeste
    for ($Sk = 1; $Sk <= $IJK; $Sk = $Sk + 1) { // Ciclo del Altura
	// Construccion de Nodos Pared I Pared J Altura K
		if ( $Si == 1 and $Sj == 1 and $Sk == 1 ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
			$nod_k_ini = $nod_k_ini + 1;
		} else {
		if ( $Si == 1 and $Sj == 1 and $Sk > 1 and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
			$nod_k_ini = $nod_k_ini + 1;
		} else {
		if ( $Si == 1 and $Sj == 1 and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
			
		// Construcción Pared J  Altura K
		if ( $Si == 1 and $Sj > 1 and $Sj <= 9 and $Sk == 1 ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si == 1 and $Sj > 1 and $Sj <= 9 and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $Si == 1 and $Sj > 1 and $Sj <= 9 and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
		if ( $Si == 1 and $Sj > 1 and $Sj > 9 and $Sk == 1 ) {
			fwrite($propiedades, $Si. "             ". $Sj. "            " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si == 1 and $Sj > 1 and $Sj > 9 and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "            " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $Si == 1 and $Sj > 1 and $Sj > 9 and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "            " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
			
		// Construcción de la Pared I Altura K
		if ( $Si > 1 and $Si <= 9 and $Sj == 1 and $Sk == 1 ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj == 1 and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj == 1 and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
		if ( $Si > 9 and $Sj == 1 and $Sk == 1 ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si > 9 and $Sj == 1 and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $Si > 9 and $Sj == 1 and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj > 1 and $Sj < $j and $Sk == 1 ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj > 1 and $Sj < $j and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $aire. "            ". $cond_aire. "     ". $cp_aire. "   ". $dens_aire. "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj > 1 and $Sj < $j and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj == $j and $Sk == 1 ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj == $j and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $Si > 1 and $Si <= 9 and $Sj == $j and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
		if ( $Si > 9 and $Sj > 1 and $Sj < $j and $Sk == 1 ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si > 9 and $Sj > 1 and $Sj < $j and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $aire. "            ". $cond_aire. "     ". $cp_aire. "   ". $dens_aire. "\r\n");
		} else {
		if ( $Si > 9 and $Sj > 1 and $Sj < $j and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		} else {
		if ( $Si > 9 and $Sj == $j and $Sk == 1 ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $piso. "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $Si >  9 and $Sj == $j and $Sk < $IJK ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $pared. "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $Si > 9 and $Sj == $j and $Sk == $IJK ) {
			fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". $techo. "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		}}}}}}}}}}}}}}}}}}}}}}}}}}}
	} // Fin de k
  } // Fin de j
} // Fin de I
fwrite($propiedades, "EMIP1V, EMITE, EMIP3V, EMIP4V, EMIP5V, EMIV, EMIPU" . "\r\n");
fwrite($propiedades, $EMIP1V.",    ".$EMITE.",   ".$EMIP3V.",    ".$EMIP4V.",    ".$EMIP5V.",    ".$EMIV.",   ".$EMIPU. "\r\n" );
fwrite($propiedades, "ICBTE,ICBK1,ICBN1,ICBI1,ICBL1". "\r\n" );
fwrite($propiedades, "  2 ,    2 ,    2 ,    2 ,    2 ". "\r\n" );
fwrite($propiedades, "RO1,RO2,RO3,RO4,RO5,REV,REP ". "\r\n" );
fwrite($propiedades, $capn_cr.",".$caps_cr.",".$cape_cr.",".$capo_cr.",".$catpl_cr.",".$capta_cr.",".$cavna_cr. "\r\n" );
fwrite($propiedades, " ICAL,ANUB,ACH". "\r\n" );
fwrite($propiedades, " 1 , ".$nubosidad.", ".$cambaire. "\r\n" );
fwrite($propiedades, "TFMIN,  TFMAX, ITMIN,ITMAX". "\r\n" );
fwrite($propiedades, $cm_tmin.", ".$cm_tmax.", ".$cm_tmin_alos.", ".$cm_tmax_alos. "\r\n" );
fwrite($propiedades, "  LAT,    DEC,   DIF, Q1MAXV, TMAX1,Q3MAXV,TMAX3,Q4MAXV,TMAX4,Q5MAXV,TMAX5,QSMAXH,VAIR,  HR". "\r\n" );
fwrite($propiedades, " ".$cm_latitud.", ".$cm_declinacion.", ".$cm_hlocal_hsolar.", ".$cm_este.", ".$cm_este_alos.", ".$cm_oeste.", ".$cm_oeste_alos.", ".$cm_norte.", ".$cm_norte_alos.", ".$cm_sur.", ".$cm_sur_alos.", ".$cm_techo.", ".$velaire.", ".$humrel. "\r\n" );
fclose($propiedades ); 
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Archivo Procesado:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Nodales</font></td>';
echo '			</tr>';
echo '		</table>';
// Crear archivos .dar (propiedades
$nodales = fopen("$carpeta/$dat1.dat","w"); 
fwrite($nodales, "TITULO". "\r\n");
fwrite($nodales, '"'.$proy_desc.'"'. "\r\n");
fwrite($nodales, "Numero de Iteraciones, Algoritmo de Solucion". "\r\n");
fwrite($nodales, " 1             3". "\r\n");
fwrite($nodales, "Nombre de Archivo Grafico". "\r\n");
fwrite($nodales, '"'.$tec.'"'. "\r\n");
fwrite($nodales, "Tiempo Total, Paso de Tiempo". "\r\n");
fwrite($nodales, " 1440         ,              15 ". "\r\n");
fwrite($nodales, "Variables logicas". "\r\n");
fwrite($nodales, "IcalUVW, IcalP, IcalT". "\r\n");
fwrite($nodales, "T T T". "\r\n");
fwrite($nodales, "Factores de Relajacion". "\r\n");
fwrite($nodales, "RelaxUVW, RelaxP, RelaxT". "\r\n");
fwrite($nodales, " 0.5 ,   0.2 ,   0.5 ". "\r\n");
fwrite($nodales, "Punto de Monitoreo". "\r\n");
fwrite($nodales, "  I  ,  J  ,  K". "\r\n");
fwrite($nodales, " ".$xnodo_i." , ".$xnodo_j." , ".$xnodo_k. "\r\n");
fwrite($nodales, "CARAS". "\r\n");
fwrite($nodales, "I ".$cara_i. "\r\n");
fwrite($nodales, "J ".$cara_j. "\r\n");
fwrite($nodales, "K ".$cara_k. "\r\n");
/*$dnodo_i = $pns_long;
$dnodo_j = $peo_long;
$dnodo_k = $vck;*/
$xdcara_i = number_format($dcara_i, 2, ".", "");
fwrite($nodales, "0.00E+00". "\r\n");
// Cara I
for ($Ci = 2; $Ci <= $cara_i; $Ci = $Ci + 1) {
	if ($Ci == 2) {
		fwrite($nodales, number_format($pns_long / $vci, 2, ".", "")."E+00". "\r\n");
		$tcar_i = ($pns_long / $vci) + ($pns_long / $vci);
	} else {
	if ($Ci > 2 and $Ci < $cara_i) {
		fwrite($nodales, number_format($tcar_i, 2, ".", "")."E+00". "\r\n");
		$tcar_i = $tcar_i + ($pns_long / $vci);
	} else {
	if ($Ci == $cara_i) {
		fwrite($nodales, number_format($pns_long/10, 2, ".", "")."E+01". "\r\n");
	}}}
}
// Fin Cara I
// Cara J
fwrite($nodales, "0.00E+00". "\r\n");
for ($Cj = 2; $Cj <= $cara_j; $Cj = $Cj + 1) {
	if ($Cj == 2) {
		fwrite($nodales, number_format($peo_long / $vcj, 2, ".", "")."E+00". "\r\n");
		$tcar_j = ($peo_long / $vcj) + ($peo_long / $vcj);
	} else {
	if ($Cj > 2 and $Cj < $cara_j) {
		fwrite($nodales, number_format($tcar_j, 2, ".", "")."E+00". "\r\n");
		$tcar_j = $tcar_j + ($peo_long / $vcj);
	} else {
	if ($Cj == $cara_j) {
			fwrite($nodales, number_format($peo_long*1, 2, ".", "")."E+00". "\r\n");
	}}}
}
// Fin Cara J
// Cara K
fwrite($nodales, "0.00E+00". "\r\n");
for ($Ck = 2; $Ck <= $cara_k; $Ck = $Ck + 1) {
	if ($Ck == 2) {
		fwrite($nodales, number_format($alt_yz / $vck, 2, ".", "")."E+00". "\r\n");
		$tcar_k = ($alt_yz / $vck) + ($alt_yz / $vck);
	} else {
	if ($Ck > 2 and $Ck < $cara_k) {
		fwrite($nodales, number_format($tcar_k, 2, ".", "")."E+00". "\r\n");
		$tcar_k = $tcar_k + ($alt_yz / $vck);
	} else {
	if ($Ck == $cara_k) {
			fwrite($nodales, number_format($alt_yz*1, 2, ".", "")."E+00". "\r\n");
	}}}
}
fwrite($nodales, "NODOS". "\r\n");
fwrite($nodales, "I ".$vci. "\r\n");
fwrite($nodales, "J ".$vcj. "\r\n");
fwrite($nodales, "K ".$vck. "\r\n");
// Nodo I
for ($Ni = 1; $Ni <= $vci; $Ni = $Ni + 1) {
	if ($Ni == 1) {
		fwrite($nodales, number_format(($pns_long / $vci)/2, 2, ".", "")."E+00". "\r\n");
		$tnod_i = (($pns_long / $vci)/2) + ($pns_long / $vci);
	} else {
	if ($Ni > 1 and $Ni < $vci) {
		fwrite($nodales, number_format($tnod_i, 2, ".", "")."E+00". "\r\n");
		$tnod_i = $tnod_i + ($pns_long / $vci);
	} else {
	if ($Ni == $vci) {
			$tnod = $pns_long - (($pns_long / $vci)/2);
			fwrite($nodales, number_format($tnod*1, 2, ".", "")."E+01". "\r\n");
	}}}
}
// Fin Nodo I
// Nodo J
for ($Nj = 1; $Nj <= $vcj; $Nj = $Nj + 1) {
	if ($Nj == 1) {
		fwrite($nodales, number_format(($peo_long / $vcj)/2, 2, ".", "")."E+00". "\r\n");
		$tnod_j = (($peo_long / $vcj)/2) + ($peo_long / $vcj);
	} else {
	if ($Nj > 1 and $Nj < $vcj) {
		fwrite($nodales, number_format($tnod_j, 2, ".", "")."E+00". "\r\n");
		$tnod_j = $tnod_j + ($peo_long / $vcj);
	} else {
	if ($Nj == $vcj) {
			$tnod = $peo_long - (($peo_long / $vcj)/2);
			fwrite($nodales, number_format($tnod*1, 2, ".", "")."E+01". "\r\n");
	}}}
}
// Fin Nodo J
// Nodo K
for ($Nk = 1; $Nk <= $vck; $Nk = $Nk + 1) {
	if ($Nk == 1) {
		fwrite($nodales, number_format(($alt_yz / $vck)/2, 2, ".", "")."E+00". "\r\n");
		$tnod_k = (($alt_yz / $vck)/2) + ($alt_yz / $vck);
	} else {
	if ($Nk > 1 and $Nk < $vck) {
		fwrite($nodales, number_format($tnod_k, 2, ".", "")."E+00". "\r\n");
		$tnod_k = $tnod_k + ($alt_yz / $vck);
	} else {
	if ($Nk == $vck) {
			$tnod = $alt_yz - (($alt_yz / $vck)/2);
			fwrite($nodales, number_format($tnod*1, 2, ".", "")."E+01". "\r\n");
	}}}
}
// Fin Nodo K
fclose($nodales );
echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="right"><a href="viv_proy_tplano_sim_cm.php" class="opciones_a">Regresar</a></td>';
echo '			  <td align="right"><a href="viv_proy_archivos.php" class="opciones_a">Ejecutar Acción</a></td>';
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
mysql_close($con);

?>
