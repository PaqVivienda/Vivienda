<?PHP

session_start();
// Verificamos la Entrada por la Intranet
$password = $_SESSION['password'];
if ($password != "")
{
} else{
  echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}
if($_SESSION["t_cond"] == "ADMINISTRADOR") {
} else {
  echo"<script type=\"text/javascript\">alert('Usted no está Autorizado para Este Módulo....!'); window.location='inicio.php';</script>";
}
// FIN DE LA SOLICITUD

// Recivimos los Datos
// Proyecto
$proy_cod_incl = $_SESSION['cod_proy'];
$proy_desc_incl = $_SESSION['proy_desc'];
// ********
// Construcción de Paredes (Longitud y Altura)
// Longitud
$pns_long = $_SESSION['pns_long'];
$peo_lomg = $_SESSION['peo_long'];
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
$alt_yxzi = $_SESSION['alt_yxz1'];
$alt_yxzj = $_SESSION['alt_yxz2'];
$alt_yxzk = $_SESSION['alt_yxz3'];

// Fin Construcción de Paredes
//*******************************************
// Construcción Pared Interna
$pi_y = $_SESSION['piy'];
$pi_x = $_SESSION['pix'];
$PINS = $_SESSION["PINS"];
$PIEO = $_SESSION["PIEO"];

if ( $pi_y > 0 ) {
  $pi_desc = "Norte - Sur";
  $pi_long = $peo_lomg;
  $pi_alt =  "";
  $pi_sep = $pi_y;
} elseif ( $pi_x > 0 ) {
  $pi_desc = "Este - Oeste";
  $pi_long = $pns_long;
  $pi_alt =  "";
  $pi_sep = $pi_x;
}

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
// $pn_altura = $_SESSION['pnseo_alt'];
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
// $pn_recub_desc = $_SESSION['pn_recub_desc'];
// $pn_recub_esp = $_SESSION['pn_recub_esp'];
// $pn_recub_dens = $_SESSION['pn_recub_dens'];
// $pn_recub_cond = $_SESSION['pn_recub_cond'];
// $pn_recub_calor = $_SESSION['pn_recub_calor'];
// Pared Oeste
// $po_altura = $_SESSION['pnseo_alt'];
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
// $po_recub_desc = $_SESSION['po_recub_desc'];
// $po_recub_esp = $_SESSION['po_recub_esp'];
// $po_recub_dens = $_SESSION['po_recub_dens'];
// $po_recub_cond = $_SESSION['po_recub_cond'];
// $po_recub_calor = $_SESSION['po_recub_calor'];
// Pared Este
// $pe_altura = $_SESSION['pnseo_alt'];
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
// $pe_recub_desc = $_SESSION['pe_recub_desc'];
// $pe_recub_esp = $_SESSION['pe_recub_esp'];
// $pe_recub_dens = $_SESSION['pe_recub_dens'];
// $pe_recub_cond = $_SESSION['pe_recub_cond'];
// $pe_recub_calor = $_SESSION['pe_recub_calor'];
// Pared Sur ******
// $ps_altura = $_SESSION['pnseo_alt'];
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
// $ps_recub_desc = $_SESSION['ps_recub_desc'];
// $ps_recub_esp = $_SESSION['ps_recub_esp'];
// $ps_recub_dens = $_SESSION['ps_recub_dens'];
// $ps_recub_cond = $_SESSION['ps_recub_cond'];
// $ps_recub_calor = $_SESSION['ps_recub_calor'];
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
$sql_pn_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pn_modelo'";
$sql_ps_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$ps_modelo'";
$sql_pe_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pe_modelo'";
$sql_po_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$po_modelo'";
$sql_pi_cap = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pint_modelo'";
$sql_ti_cap = "SELECT * FROM proy_techo_capas where proy_cod_capa = '$ti_modelo'";


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
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcción Techo Inclinado</i></b></font></div></td>';
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
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Código del Proyecto: <b>'.$proy_cod_incl.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Descripción del Proyecto: '.$proy_desc_incl.'</font></td>';
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
if ( $tip_techo == "dato1" ) {
  echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
} else {
  if ( $tip_techo == "dato2" ) {
    echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
  } else {
    if ( $tip_techo == "dato3" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzk.'</i></b></font></td>';
    }
  }
}
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
if ( $tip_techo == "dato1" ) {
  echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
} else {
  if ( $tip_techo == "dato2" ) {
    echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
  } else {
    if ( $tip_techo == "dato3" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzk.'</i></b></font></td>';
    }
  }
}
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
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$peo_lomg.'</i></b></font></td>';
if ( $tip_techo == "dato1" ) {
  echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
} else {
  if ( $tip_techo == "dato2" ) {
    echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
  } else {
    if ( $tip_techo == "dato3" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzk.'</i></b></font></td>';
    }
  }
}
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
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$peo_lomg.'</i></b></font></td>';
if ( $tip_techo == "dato1" ) {
  echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
} else {
  if ( $tip_techo == "dato2" ) {
    echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
  } else {
    if ( $tip_techo == "dato3" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzk.'</i></b></font></td>';
    }
  }
}
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
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Separ.</b></font></td>';
echo '			  <td align="left" style="padding:2px" rowspan="2"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Descripción / Capas</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Espesor</b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Densidad</b></font></td>';
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Conductividad<small>(W/m*ºC)</small></b></font></td>';
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
$res_pi = mysqli_query($con, $sql_pi_cap);
if ($PINS or $PIEO) { 
  while ($row_pi = mysqli_fetch_array($res_pi, MYSQLI_ASSOC)){
    echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pi_desc.'</i></b></font></td>';
    if (isset($pi_desc)) {
      if ($pi_desc == "Norte - Sur" ) {
        echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$peo_lomg.'</i></b></font></td>';
      } elseif ($pi_desc == "Este - Oeste" ) {
        echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pns_long.'</i></b></font></td>';
      }
    }
    
    if ( $tip_techo == "dato1" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
    } elseif ($tip_techo == "dato2" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzi.'</i></b></font></td>';
    } elseif ( $tip_techo == "dato3" ) {
      echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$alt_yxzk.'</i></b></font></td>';
    }
    
    echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#a62d2d"><b><i>'.$pi_sep.'</i></b></font></td>';
    echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_desc_capa'].'</b></font></td>';
    echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_espesor'].'</b></font></td>';
    echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_densidad'].'</b></font></td>';
    echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_conductividad'].'</b></font></td>';
    echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_pi['proy_calorespecifico'].'</b></font></td>';
    echo '</tr>';
  }
}
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
echo '				<td align="center"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b>Separ.</b></font></td>';
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
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(W/m.ºC)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="9"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
if ( $pn_puerta == "Activar" ) { // Pared Norte
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
if ( $ps_puerta == "Activar" ) { // Pared Sur
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
if ( $pe_puerta == "Activar" ) { // Pared Este
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
if ( $po_puerta == "Activar" ) { // Pared Oeste
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
echo '			<tr><td colspan="510><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
if ( $pn_ventana == "Activar" ) { // Ventana Norte
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
if ( $ps_ventana == "Activar" ) { // Ventana Norte
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
if ( $pe_ventana == "Activar" ) { // Ventana Este
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
if ( $po_ventana == "Activar" ) { // Ventana Oeste
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
echo '			  <td align="center" cstyle="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(W7m.ºC)</small></b></font></td>';
echo '			  <td align="center" style="padding:2px"><font face="Comic Sans MS,arial,verdana", size="+1", color="#000387"><b><small>(Kj/Kg.ºC)</small></b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="10"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>';
echo '			  <td align="left"><a href="" title="'.$ti_desc.'"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.substr($ti_desc,0,48).'</b></font></a></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ti_esp.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ti_dens.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ti_cond.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$ti_calor.'</b></font></td>';
echo '			</tr>';
$res_ti = mysqli_query($con, $sql_ti_cap);
while ($row_ti = mysqli_fetch_array($res_ti, MYSQLI_ASSOC)){
  echo '<tr>';
  echo '<td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ti['proy_descripcion'].'</b></font></td>';
  echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ti['proy_espesor'].'</b></font></td>';
  echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ti['proy_densidad'].'</b></font></td>';
  echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ti['proy_conductividad'].'</b></font></td>';
  echo '<td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>'.$row_ti['proy_calorespecifico'].'</b></font></td>';
  echo '</tr>';
}
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="right"><a href="viv_proy_tincl_sim.php" class="opciones_a">Panel de Control - Simulación</a></td>';
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