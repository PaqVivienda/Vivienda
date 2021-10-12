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
  $proy_cod_incl = $_SESSION['proy_cod'];
  $proy_desc_incl = $_SESSION['proy_desc'];
  // ********
  // Construcción de Paredes (Longitud y Altura)
  // Longitud
  $pns_long = $_SESSION['long_pns'];
  $peo_lomg = $_SESSION['long_peo'];
  // Componente Constructivo
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
  $sql_pn_capas = mysqli_query("SELECT * FROM proy_matcomp where proy_cod_comp = '$pn_modelo'");
  $res_pn_capas = mysqli_query($sql_pn_capas, $con);
  while ($row_pn_capas = mysqli_fetch_array($res_pn_capas, MYSQLI_ASSOC)){
	  $pn_desc_capa = $row_pn_capas['proy_desc_capa'];
	  $pn_esp_capa = $row_pn_capas['proy_espesor'];
	  $pn_dens_capa = $row_pn_capas['proy_densidad'];
	  $pn_cond_capa = $row_pn_capas['proy_conductividad'];
	  $pn_calesp_capa = $row_pn_capas['proy_calorespecifico'];
  }
  // Fin Norte
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
  // Altura
  		$tip_techo = $_SESSION['tip_techo'];
  		if ( $tip_techo == "dato1" ) {
			$alt_yxzi = $_SESSION['alt_yxi'];
			$alt_yxzj = $_SESSION['alt_yxj'];
			$alt_yxzk = $_SESSION['alt_yxk'];
		}
		if ( $tip_techo == "dato2" ) {
			$alt_yxzi = $_SESSION['alt_yxi'];
			$alt_yxzj = 0.00;
			$alt_yxzk = $_SESSION['alt_yxk'];
		}
		if ( $tip_techo == "dato3" ) {
			$alt_yxzi = $_SESSION['alt_yxi'];
			$alt_yxzj = 0.00;
			$alt_yxzk = $_SESSION['alt_yxk'];
		}
  if ( $_SESSION['alt_yz'] != "" ) {
	  $pnsalt  = $_SESSION['alt_yz'];
  } else {
	  $pnsalt = $_SESSION['alt_xz'];
  }
  // Fin Construcción de Paredes
  //*******************************************
  // Construcción Pared Interna
  $pi_y = $_SESSION['piy'];
  $pi_x = $_SESSION['pix'];
  if ( $pi_y > 0 ) {
	  $pi_desc = "Norte - Sur";
	  $pi_long = $peo_lomg;
	  $pi_alt =  $pnsalt;
	  $pi_sep = $pi_y;
  } else {
  if ( $pi_x > 0 ) {
	  $pi_desc = "Este - Oeste";
	  $pi_long = $pns_long;
	  $pi_alt =  $pnsalt;
	  $pi_sep = $pi_x;
  }}
  $pint_modelo = $_SESSION['pi_modelo'];
  //******************************************
  // Construcción Puertas
  // Dimensiones
  $pxi_n = $_SESSION['pxi_n']; // Separación de la Pared
  $pe_n = $_SESSION['pe_n']; // Ancho de la Puerta
  $ph_n = $_SESSION['ph_n']; // Altura de la Puerta
  //****
  $pxi_s = $_SESSION['pxi_s']; // Separación de la Pared
  $pe_s = $_SESSION['pe_s']; // Ancho de la Puerta
  $ph_s = $_SESSION['ph_s']; // Altura de la Puerta

  //****
  $pxi_e = $_SESSION['pxi_e']; // Separación de la Pared
  $pe_e = $_SESSION['pe_e']; // Ancho de la Puerta
  $ph_e = $_SESSION['ph_e']; // Altura de la Puerta
  //****
  $pxi_o = $_SESSION['pxi_o']; // Separación de la Pared
  $pe_o = $_SESSION['pe_o']; // Ancho de la Puerta
  $ph_o = $_SESSION['ph_o']; // Altura de la Puerta
  // Puerta
  $pn_puerta = $_SESSION['pn_puerta'];
  $po_puerta = $_SESSION['po_puerta'];
  $pe_puerta = $_SESSION['pe_puerta'];
  $ps_puerta = $_SESSION['ps_puerta'];
  //******************************************
  // Construcción de Ventanas
  $vxi_n = $_SESSION['vxi_n']; // Separación Pared
  $vyi_n = $_SESSION['vyi_n']; // Separaciòn Piso
  $ve_n = $_SESSION['ve_n']; // Ancho de la Ventana
  $vh_n = $_SESSION['vh_n']; // Altura de la Vemtana
  //****
  $vxi_s = $_SESSION['vxi_s']; // Separación Pared
  $vyi_s = $_SESSION['vyi_s']; // Separaciòn Piso
  $ve_s = $_SESSION['ve_s']; // Ancho de la Ventana
  $vh_s = $_SESSION['vh_s']; // Altura de la Vemtana
  //****
  $vxi_e = $_SESSION['vxi_e']; // Separación Pared
  $vyi_e = $_SESSION['vyi_e']; // Separaciòn Piso
  $ve_e = $_SESSION['ve_e']; // Ancho de la Ventana
  $vh_e = $_SESSION['vh_e']; // Altura de la Vemtana
  //****
  $vxi_o = $_SESSION['vxi_o']; // Separación Pared
  $vyi_o = $_SESSION['vyi_o']; // Separaciòn Piso
  $ve_o = $_SESSION['ve_o']; // Ancho de la Ventana
  $vh_o = $_SESSION['vh_o']; // Altura de la Vemtana
  //****
  $pn_ventana = $_SESSION['pn_ventana'];
  $po_ventana = $_SESSION['po_ventana'];
  $pe_ventana = $_SESSION['pe_ventana'];
  $ps_ventana = $_SESSION['ps_ventana'];
  //******************************************
  // Pared Norte
  $pn_altura = $_SESSION['pnseo_alt'];
  $pn_long = $_SESSION['pns_long'];
  //*****
  $pn_par_desc = $_SESSION['pn_par_desc'];
  $pn_par_esp = $_SESSION['pn_par_esp'];
  $pn_par_dens = $_SESSION['pn_par_dens'];
  $pn_par_cond = $_SESSION['pn_par_cond'];
  $pn_par_calor = $_SESSION['pn_par_calor'];
  //*****
  $pn_puerta_desc = $_SESSION['pn_puerta_desc'];
  $pn_puerta_esp = $_SESSION['pn_puerta_esp'];
  $pn_puerta_dens = $_SESSION['pn_puerta_dens'];
  $pn_puerta_cond = $_SESSION['pn_puerta_cond'];
  $pn_puerta_calor = $_SESSION['pn_puerta_calor'];
  //*****
  $pn_vent_desc = $_SESSION['pn_vent_desc'];
  $pn_vent_esp = $_SESSION['pn_vent_esp'];
  $pn_vent_dens = $_SESSION['pn_vent_dens'];
  $pn_vent_cond = $_SESSION['pn_vent_cond'];
  $pn_vent_calor = $_SESSION['pn_vent_calor'];
  //******
  $pn_recub_desc = $_SESSION['pn_recub_desc'];
  $pn_recub_esp = $_SESSION['pn_recub_esp'];
  $pn_recub_dens = $_SESSION['pn_recub_dens'];
  $pn_recub_cond = $_SESSION['pn_recub_cond'];
  $pn_recub_calor = $_SESSION['pn_recub_calor'];
  // Pared Oeste
  $po_altura = $_SESSION['pnseo_alt'];
  $po_long = $_SESSION['peo_long'];
  //*****
  $po_par_desc = $_SESSION['po_par_desc'];
  $po_par_esp = $_SESSION['po_par_esp'];
  $po_par_dens = $_SESSION['po_par_dens'];
  $po_par_cond = $_SESSION['po_par_cond'];
  $po_par_calor = $_SESSION['po_par_calor'];
  //*****
  $po_puerta_desc = $_SESSION['po_puerta_desc'];
  $po_puerta_esp = $_SESSION['po_puerta_esp'];
  $po_puerta_dens = $_SESSION['po_puerta_dens'];
  $po_puerta_cond = $_SESSION['po_puerta_cond'];
  $po_puerta_calor = $_SESSION['po_puerta_calor'];
  //*****
  $po_vent_desc = $_SESSION['po_vent_desc'];
  $po_vent_esp = $_SESSION['po_vent_esp'];
  $po_vent_dens = $_SESSION['po_vent_dens'];
  $po_vent_cond = $_SESSION['po_vent_cond'];
  $po_vent_calor = $_SESSION['po_vent_calor'];
  //*****
  $po_recub_desc = $_SESSION['po_recub_desc'];
  $po_recub_esp = $_SESSION['po_recub_esp'];
  $po_recub_dens = $_SESSION['po_recub_dens'];
  $po_recub_cond = $_SESSION['po_recub_cond'];
  $po_recub_calor = $_SESSION['po_recub_calor'];
  // Pared Este
  $pe_altura = $_SESSION['pnseo_alt'];
  $pe_long = $_SESSION['peo_long'];
  //******
  $pe_par_desc = $_SESSION['pe_par_desc'];
  $pe_par_esp = $_SESSION['pe_par_esp'];
  $pe_par_dens = $_SESSION['pe_par_dens'];
  $pe_par_cond = $_SESSION['pe_par_cond'];
  $pe_par_calor = $_SESSION['pe_par_calor'];
  //******
  $pe_puerta_desc = $_SESSION['pe_puerta_desc'];
  $pe_puerta_esp = $_SESSION['pe_puerta_esp'];
  $pe_puerta_dens = $_SESSION['pe_puerta_dens'];
  $pe_puerta_cond = $_SESSION['pe_puerta_cond'];
  $pe_puerta_calor = $_SESSION['pe_puerta_calor'];
  //******
  $pe_vent_desc = $_SESSION['pe_vent_desc'];
  $pe_vent_esp = $_SESSION['pe_vent_esp'];
  $pe_vent_dens = $_SESSION['pe_vent_dens'];
  $pe_vent_cond = $_SESSION['pe_vent_cond'];
  $pe_vent_calor = $_SESSION['pe_vent_calor'];
  //******
  $pe_recub_desc = $_SESSION['pe_recub_desc'];
  $pe_recub_esp = $_SESSION['pe_recub_esp'];
  $pe_recub_dens = $_SESSION['pe_recub_dens'];
  $pe_recub_cond = $_SESSION['pe_recub_cond'];
  $pe_recub_calor = $_SESSION['pe_recub_calor'];
  // Pared Sur ******
  $ps_altura = $_SESSION['pnseo_alt'];
  $ps_long = $_SESSION['pns_long'];
  //*****
  $ps_par_desc = $_SESSION['ps_par_desc'];
  $ps_par_esp = $_SESSION['ps_par_esp'];
  $ps_par_dens = $_SESSION['ps_par_dens'];
  $ps_par_cond = $_SESSION['ps_par_cond'];
  $ps_par_calor = $_SESSION['ps_par_calor'];
  //*****
  $ps_puerta_desc = $_SESSION['ps_puerta_desc'];
  $ps_puerta_esp = $_SESSION['ps_puerta_esp'];
  $ps_puerta_dens = $_SESSION['ps_puerta_dens'];
  $ps_puerta_cond = $_SESSION['ps_puerta_cond'];
  $ps_puerta_calor = $_SESSION['ps_puerta_calor'];
  //*****
  $ps_vent_desc = $_SESSION['ps_vent_desc'];
  $ps_vent_esp = $_SESSION['ps_vent_esp'];
  $ps_vent_dens = $_SESSION['ps_vent_dens'];
  $ps_vent_cond = $_SESSION['ps_vent_cond'];
  $ps_vent_calor = $_SESSION['ps_vent_calor'];
  //*****
  $ps_recub_desc = $_SESSION['ps_recub_desc'];
  $ps_recub_esp = $_SESSION['ps_recub_esp'];
  $ps_recub_dens = $_SESSION['ps_recub_dens'];
  $ps_recub_cond = $_SESSION['ps_recub_cond'];
  $ps_recub_calor = $_SESSION['ps_recub_calor'];
  // Techo
  // Construcción de Techo
	$ti_modelo = $_SESSION['ti_modelo'];
	$ti_desc = $_SESSION['ti_desc'];
	$ti_capas = $_SESSION['ti_capas'];
	$ti_bloque = $_SESSION['ti_bloque'];
	$ti_dims = $_SESSION['ti_dims'];
	// Capas
	$ti_esp = $_SESSION['ti_esp'];
	$ti_dens = $_SESSION['ti_dens'];
	$ti_cond = $_SESSION['ti_cond'];
	$ti_calor = $_SESSION['ti_calor'];
	// Fin de Construcción de Techo
// Conectamos con las Tablas
  include('conexion.php');
  $sql_or = "SELECT * FROM proy_orientacion";
  $sql_cm = "SELECT * FROM proy_cm";

 
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
echo '		<table width="98%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcciòn Techo Inclinado</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Simulación y Condiciones Metereológicas</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Proyecto:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr height="30">';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Código del Proyecto: <b>'.$proy_cod.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Descripción del Proyecto: '.$proy_desc.'</font></td>';
echo '			</tr>';
echo '		</table>';
echo '		<form id="form-login" action="proy_datos_cm.php" method="post" >';
// Simulación ******************************************************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Simulación:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" colspan="2" style="padding:5px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Opciones Generales:</b></u></font></td>';
echo '			</tr>';
echo '		  <tr>';
echo '			<td width="33%"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Título:</n></i><input type="text" name="xtitulo" id="titulo" required="required" /></font></td>';
echo '			<td align="right" width="33%" colspan="2"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Tiempo Total de Sim.:</n></i><input type="text" name="xttsim" id="ttsim" required="required" /> min.</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td>&nbsp;</td>';
echo '			<td align="right" width="33%" colspan="2"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Paso de Tiempo:</n></i><input type="text" name="xpasot" id="ttsim" required="required" /> min.</font></td>';
echo '		  <tr>';
echo '			<td>&nbsp;</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="center" rowspan="2"><img src="images/orientacion.png" alt="" width="150" height="150" /></td>';
echo '			<td align="center" colspan="2"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">La techada principal de la vivienda está orientada hacia el</font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="center" colspan="2">';
echo '				<select name="xor" type="text" size="1" id="sel_cm">';
						$res_or = mysqli_query($sql_or, $con);
						while ($row_or = mysqli_fetch_array($res_or, MYSQLI_ASSOC)){
						echo '<option value="'.$row_or['id'].'">'.$row_or['proy_orient_desc'].'</option>';
						}
echo '				</select>';
echo '			</td>';
echo '		  <tr>';
echo '			  <td align="left" colspan="2" style="padding:5px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Ubicación y Nombre del Archivo:</b></u></font></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="center" style="padding:10px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Los Archivos de Datos y de la Salida serán guardados dentro de una carpeta llamada:</font></td>';
echo '			<td align="center" colspan="2"><input type="text" name="xcarpeta" id="titulo" required="required" /></td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="center" style="padding:10px;" rowspan="3"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Ubicada dentro de la carpeta "vivienda" en el directorio donde se encuentra la apliación con los siguientes archivos:</font></td>';
echo '			<td align="right"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Salida Gráfica:</font></td><td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><input type="text" name="xtec" id="archivos" required="required" /> .tec</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="right"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Datos Nodales:</td><td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><input type="text" name="xdat1" id="archivos" required="required" />.dat</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td align="right"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Datos Propiedades:</td><td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><input type="text" name="xdat2" id="archivos" required="required" />.dat</td>';
echo '		  </tr>';
echo '		  <tr>';
echo '			<td>&nbsp;</td>';
echo '		  </tr>';
echo '		</table>';
// Fin de los Datos de Siulación ************************************************************
//Condiciones Metereologicas ****************************************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Condiciones Meteorológicas:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" colspan="2" style="padding:5px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Indicadores:</b></u></font></td>';
echo '			</tr>';
echo '		  <tr>';
echo '			<td width="33%"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Nubosidad:</n></i><input type="text" name="xnubosidad" id="ttsim" required="required" /></font></td>';
echo '			<td width="33%" colspan="2"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Cambio de aire:</n></i><input type="text" name="xcambioaire" id="ttsim" required="required" /></font></td>';
echo '		  </tr>';
echo '			<tr>';
echo '			  <td style="padding:15px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Datos ambientales máximos y mínimos:</b></u></font></td>';
echo '			</tr>';
echo '		  <tr>';
echo '			<td width="33%"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Humedad Relativa:</n></i><input type="text" name="xhumrel" id="ttsim" required="required" /> %</font></td>';
echo '			<td width="33%"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Datos Atmosféricos</n></i></font></td>';
echo '			</tr>';
echo '		  <tr>';
echo '			<td width="33%"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Valocidad del aire:</n></i><input type="text" name="xvelarie" id="ttsim" required="required" /> m/s</font></td>';
echo '			<td>';
echo '				<select name="xregion" id="region" class="sel_mes" onchange="CargarMes(this.value);">
					<option>- SELECCIONA REGION -</option>';
					$query_pais = "SELECT * FROM proy_pais";
					$result_pais =mysqli_query($query_pais, $con);
					while($row_pais = mysqli_fetch_array($result_pais, MYSQLI_ASSOC))
					{
						echo '<option value="'.$row_pais['cod_pais'].'">'.utf8_decode($row_pais['continente']).' - '.utf8_decode($row_pais['pais']).' - '.utf8_decode($row_pais['capital']).'</option>';
					}
echo '				</select>';
echo '			</td>';
echo '				<td><select name="xcm" id="mes" class="sel_mes"></select></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td>&nbsp;</td>';
echo '			</tr>';
// Datos ambientales horario
echo '			<tr>';
echo '				<td style="padding:15px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Datos ambientales horarios:</b></u></font></td>';
echo '					<tr>';
echo '						<td colspan="3"><table width="98%" height="100%" border="1" cellpadding="0" cellspacing="0">';
echo '							<tr>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Tiempo en minutos</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Temperatura ambiente ºK</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Irradiancia techo (W/m2)</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Irradiancia pared Norte (W/m2)(</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Irradiancia pared Sur (W/m2)</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Irradiancia pared Este (W/m2)</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Irradiancia pared Oeste (W/m2)</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Humedad relativa (%)</n></i></font></td>';
echo '							  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><n><i>Velocidad del Aire (m/s)</n></i></font></td>';
echo '							</tr>';
echo '							<tr bgcolor="#FFFFFF">';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							</tr>';
echo '							<tr bgcolor="#FFFFFF">';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							</tr>';
echo '							<tr bgcolor="#FFFFFF">';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							</tr>';
echo '							<tr bgcolor="#FFFFFF">';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							  <td align="center"><p>&nbsp;</p></td>';
echo '							</tr>';
echo '						</table></td>';
echo '					</tr>';
echo '					</table>';
echo '				</td>';
echo '			</tr>';
echo '		</table>';
// Fin de la Condición Metereologicas *******************************************************
// Controles Avanzados **********************************************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Controles Avanzados:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" colspan="2" style="padding:5px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Condiciones de Borde:</b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#000387"><b>Coeficiente de Reflectividad:</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#000387"><b>Valores de Emitancia:</b></font></td>';
echo '			<tr>';
echo '			  <td align="left" style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Pared Norte: </font></td>';
echo '			  <td>';
echo '				<select name="xpn" type="text" size="1" id="sel_av">';
echo '					<option value="2">Flujo Conocido</option>';
echo '					<option value="0">Temperatura Conocida</option>';
echo '					<option value="0">Flujo Adiabático</option>';
echo '				</select>';
echo '			  </td>';
echo '			  <td align="center"><input type="text" name="xavpn" id="pn" required="required" placeholder="RO1" /></td>';
echo '			  <td align="center"><input type="text" name="xEMIP1V" id="pn" required="required" placeholder="EMIP1V" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Pared Sur: </font></td>';
echo '			  <td style="padding:10px 0;">';
echo '				<select name="xps" type="text" size="1" id="sel_av">';
echo '					<option value="2">Flujo Conocido</option>';
echo '					<option value="0">Temperatura Conocida</option>';
echo '					<option value="0">Flujo Adiabático</option>';
echo '				</select>';
echo '			  </td>';
echo '			  <td align="center"><input type="text" name="xavps" id="pn" required="required" placeholder="RO2" /></td>';
echo '			  <td align="center"><input type="text" name="xEMITE" id="pn" required="required" placeholder="EMITE" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Pared Este: </font></td>';
echo '			  <td>';
echo '				<select name="xpe" type="text" size="1" id="sel_av">';
echo '					<option value="2">Flujo Conocido</option>';
echo '					<option value="0">Temperatura Conocida</option>';
echo '					<option value="0">Flujo Adiabático</option>';
echo '				</select>';
echo '			  </td>';
echo '			  <td align="center"><input type="text" name="xavpe" id="pn" required="required" placeholder="RO3" /></td>';
echo '			  <td align="center"><input type="text" name="xEMIP3V" id="pn" required="required" placeholder="EMIP3V" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Pared Oeste: </font></td>';
echo '			  <td style="padding:10px 0;">';
echo '				<select name="xpo" type="text" size="1" id="sel_av">';
echo '					<option value="2">Flujo Conocido</option>';
echo '					<option value="0">Temperatura Conocida</option>';
echo '					<option value="0">Flujo Adiabático</option>';
echo '				</select>';
echo '			  </td>';
echo '			  <td align="center"><input type="text" name="xavpo" id="pn" required="required" placeholder="RO4" /></td>';
echo '			  <td align="center"><input type="text" name="xEMIP4V" id="pn" required="required" placeholder="EMIP4V" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Techo: </font></td>';
echo '			  <td>';
echo '				<select name="xtpl" type="text" size="1" id="sel_av">';
echo '					<option value="2">Flujo Conocido</option>';
echo '					<option value="0">Temperatura Conocida</option>';
echo '					<option value="0">Flujo Adiabático</option>';
echo '				</select>';
echo '			  </td>';
echo '			  <td align="center"><input type="text" name="xavtecho" id="pn" required="required" placeholder="RO5" /></td>';
echo '			  <td align="center"><input type="text" name="xEMIP5V" id="pn" required="required" placeholder="EMIP5V" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Puerta: </font></td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td align="center" style="padding:10px 0;"><input type="text" name="xavpuerta" id="pn" required="required" placeholder="REV" /></td>';
echo '			  <td align="center" style="padding:10px 0;"><input type="text" name="xEMIV" id="pn" required="required" placeholder="EMIV" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td style="padding:5px 32px;"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Ventana: </font></td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td align="center" style="padding:10px 0;"><input type="text" name="xavventana" id="pn" required="required" placeholder="REP" /></td>';
echo '			  <td align="center" style="padding:10px 0;"><input type="text" name="xEMIPU" id="pn" required="required" placeholder="EMIPU" /></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" colspan="2" style="padding:5px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Monitoreo:</b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td style="padding:10px 20px;">';
echo '				  <input type="radio" name="xopcion" class="radio" value="1" /><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Monitorear el nodo central</font>';
echo '				</td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td style="padding:10px 20px;">';
echo '				  <input type="radio" name="xopcion" class="radio" value="2" /><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Monitorear el nodo</font>';
echo '				</td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td style="padding:0 35px;">';
echo '			  	<font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I</font><input type="text" name="xi" id="mr" />';
echo '			  </td>';
echo '			  <td>';
echo '			  	<font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">J</font><input type="text" name="xj" id="mr" />';
echo '			  </td>';
echo '			  <td>';
echo '			  	<font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">K</font><input type="text" name="xk" id="mr" />';
echo '			  </td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" style="padding:15px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Variables a Resolver:</b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td>&nbsp;</td>';
echo '			  <td><font face="Comic Sans MS,arial,verdana", size="3", color="#000387"><b>Factor de Relajaciòn</b></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td style="padding:10px 20px;">';
echo '				  <input type="checkbox" name="xuvw" class="chec" checked="checked" /><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Velocidades U.V.W</font>';
echo '				</td>';
echo '			  <td>';
echo '			  	<input type="text" name="xxveluvw" id="vr" value="0.5" />';
echo '			  </td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td style="padding:10px 20px;">';
echo '				  <input type="checkbox" name="xpsion" class="chec" checked="checked" /><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Presiòn</font>';
echo '				</td>';
echo '			  <td>';
echo '			  	<input type="text" name="xpresion" id="vr" value="0.5" />';
echo '			  </td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td style="padding:10px 20px;">';
echo '				  <input type="checkbox" name="xtemp" class="chec" checked="checked" /><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Temperatura</font>';
echo '				</td>';
echo '			  <td>';
echo '			  	<input type="text" name="xtemper" id="vr" value="0.5" />';
echo '			  </td>';
echo '			</tr>';
echo '		</table>';
// Fin de Controles Avanzados ***************************************************************
// Construcción de Malla **********************************************************************
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="3"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Construcción de Malla</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left" colspan="3" style="padding:5px 20px;"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><u>Volumenes de Control por Eje:</b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="30px" style="padding:0 35px;">';
echo '			  	<font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I</font><input type="text" name="ni" id="vr" />';
echo '			  </td>';
echo '			  <td width="30px" style="padding:0 35px;">';
echo '			  	<font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">J</font><input type="text" name="nj" id="vr" />';
echo '			  </td>';
echo '			  <td>';
echo '			  	<font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">K</font><input type="text" name="nk" id="vr" />';
echo '			  </td>';
echo '			</tr>';
echo '			<tr>';
echo '				<td><p>&nbsp;</p></td>';
echo '			</tr>';
echo '		</table>';
// Fin de Controles Avanzados ***************************************************************
echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="center" height="60"><input class="op" type="submit" value="Ejecutar" name="Aplicar" class="submit" /></td>';
echo '		  </tr>';
echo '		</table>';
echo '		</form>';
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
echo '<script>
		function CargarMes(val)
		{
			$("#respuesta").html(" Por favor espera un momento");
			$.ajax({
				type: "POST",
				url: "consulta.php",
				data: "idregion="+val,
				success: function(resp){
					$("#mes").html(resp);
					$("#respuesta").html("");
				}
			});
		}
		</script>';

echo '</html>';
mysqli_close($con);

?>