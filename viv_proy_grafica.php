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
  // Construcción de Paredes (Longitud y Altura)
  $pnslong = $_SESSION['pns_long'];
  $peolong = $_SESSION['peo_long'];
  if ( $_SESSION['alt_yz'] != "" ) {
	  $pnsalt  = $_SESSION['alt_yz'];
  } else {
	  $pnsalt = $_SESSION['alt_xz'];
  }
  //*******************************************
  // Construcción Pared Interna
  $pi_y = $_SESSION['piy'];
  $pi_x = $_SESSION['pix'];
  if ( $pi_y > 0 ) {
	  $pi_desc = "Norte - Sur";
	  $pi_long = $peolong;
	  $pi_alt =  $pnsalt;
	  $pi_sep = $pi_y;
  } else {
  if ( $pi_x > 0 ) {
	  $pi_desc = "Este - Oeste";
	  $pi_long = $pnslong;
	  $pi_alt =  $pnsalt;
	  $pi_sep = $pi_x;
  }}
  //******************************************
  // Construcción Puertas
  // Dimensiones
  $pxi = $_SESSION['pxi']; // Separación de la Pared
  $pe = $_SESSION['pe']; // Ancho de la Puerta
  $ph = $_SESSION['ph']; // Altura de la Puerta
  // Puerta
  $pn_puerta = $_SESSION['pn_puerta'];
  $po_puerta = $_SESSION['po_puerta'];
  $pe_puerta = $_SESSION['pe_puerta'];
  $ps_puerta = $_SESSION['ps_puerta'];
  //******************************************
  // Construcción de Ventanas
  $vxi = $_SESSION['vxi']; // Separación Pared
  $vyi = $_SESSION['vyi']; // Separaciòn Piso
  $ve = $_SESSION['ve']; // Ancho de la Ventana
  $vh = $_SESSION['vh']; // Altura de la Vemtana
  $pn_ventana = $_SESSION['pn_ventana'];
  $po_ventana = $_SESSION['po_ventana'];
  $pe_ventana = $_SESSION['pe_ventana'];
  $ps_ventana = $_SESSION['ps_ventana'];
  //******************************************
  // Región Tomada
  $pais = $_SESSION['pais'];
  $capital = $_SESSION['capital'];
  //******************************************
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
  $tech_incl_desc = $_SESSION['tech_incl_desc'];
  $tech_incl_esp = $_SESSION['tech_incl_esp'];
  $tech_incl_dens = $_SESSION['tech_incl_dens'];
  $tech_incl_cond = $_SESSION['tech_incl_cond'];
  $tech_incl_calor = $_SESSION['tech_incl_calor'];
  //**********************************************
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
  // ************************************************

 
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
// Estilos del Cubo
if ( $pi_y > 0 ) {
echo '<style>
.baul {
  -webkit-perspective: 500px;
  perspective: 500px;
  perspective-origin: 50% 50%;
}

.cubo, .cara{
  height: 290px;
  width: 290px;
}

.cubo {
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;

  -webkit-transform: rotateX(0deg) rotateY(-30deg);
  transform: rotateX(0deg) rotateY(-30deg);

  margin: 150px auto;

  -webkit-animation: giro 80s infinite linear;
  animation: giro 80s infinite linear;
}

.cubo .cara {
  position: absolute;
  border: 5px solid #000;
  opacity: 0.95;
}

/*Cara-Techo frontal*/
.cubo .cara:nth-child(1) {
	width: 0;
     height: 0;
     border-right: 105px solid transparent;
     border-top: -100px solid transparent;
     border-left: 105px solid transparent;
     border-bottom: 100px solid #75000d;
	  transform: rotateX(28deg) translateZ(205px);
}

/*Cara-Techo posterior*/
.cubo .cara:nth-child(2) {
	width: 0;
     height: 0;
     border-right: 105px solid transparent;
     border-top: -100px solid transparent;
     border-left: 105px solid transparent;
     border-bottom: 100px solid #75000d;
	 transform: rotateX(-28deg) translateZ(-205px);
}

/*Cara-Traprecio Izquierdo*/
.cubo .cara:nth-child(3) {
    width: 328px;
    height: 0px;
	top: -106px;
    border-right: 40px solid transparent;
	border-top: 0px solid transparent;
    border-left: 40px solid transparent;
    border-bottom: 132px solid #75000d;
	transform: translate(-150px) rotateX( 0deg ) rotateZ( 50.0deg ) rotateY( 90deg );
}

/*Cara-Traprecio Derecho*/
.cubo .cara:nth-child(4) {
    width: 328px;
    height: 0px;
	top: -110px;
    border-right: 40px solid transparent;
	border-top: 0px solid transparent;
    border-left: 40px solid transparent;
    border-bottom: 136px solid #75000d;
	transform: translate(-48.0px) rotateX( 0deg ) rotateZ( -50.0deg ) rotateY( -90deg );
}

/*Cara-Linea de Arriba*/
.cubo .cara:nth-child(5) {
	height: 3px;
	width: 108%;
	background-color: #75000d;
	top: -90px;
	transform: rotateY(-90deg) translateZ(53px);
}

/*Cara frontal*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 200px;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(7) {
	height: 125px;
	width: 200px;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(8) {
	height: 125px;
	width: 400px;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(9) {
	height: 125px;
	width: 400px;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna*/
.cubo .cara:nth-child(10) {
	height: 125px;
	width: 400px;
  -webkit-transform: rotateY(90deg) translateZ(-125px);
  transform: rotateY(90deg) translateZ(-125px);
}

/*Cara superior*/
.cubo .cara:nth-child(11) {
	height: 400px;
	width: 200px;
  -webkit-transform: rotateX(90deg) translateZ(200px);
  transform: rotateX(90deg) translateZ(200px);
}
/*Cara inferior*/
.cubo .cara:nth-child(12) {
	height: 400px;
	width: 200px;
  -webkit-transform: rotateX(-90deg) translateZ(-75px);
  transform: rotateX(-90deg) translateZ(-75px);
}

@-webkit-keyframes giro {
    0% { -webkit-transform: rotateX(-45deg) rotateY(0deg); }
    50% { -webkit-transform: rotateX(45deg) rotateY(360deg); }
    100% { -webkit-transform: rotateX(-45deg) rotateY(720deg); }
}

@keyframes giro {
    0% { transform: rotateX(-45deg) rotateY(0deg); }
    50% { transform: rotateX(45deg) rotateY(360deg); }
    100% { transform: rotateX(-45deg) rotateY(720deg); }
}

@-webkit-keyframes giro360 {
    0% { -webkit-transform: rotateX(  0deg) rotateY(  0deg); }
  100% { -webkit-transform: rotateX(360deg) rotateY(360deg); }
}

@keyframes giro360 {
    0% { transform: rotateX(  0deg) rotateY(  0deg); }
  100% { transform: rotateX(360deg) rotateY(360deg); }
}

.contenido{
    position: relative;
    overflow: hidden;
    padding: 20px;
    background: #386695;
    margin: 5px 0;
}
</style>';
} else {
echo '<style>
.baul {
  -webkit-perspective: 500px;
  perspective: 500px;
  perspective-origin: 50% 50%;
}

.cubo, .cara{
  height: 290px;
  width: 290px;
}

.cubo {
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;

  -webkit-transform: rotateX(0deg) rotateY(-30deg);
  transform: rotateX(0deg) rotateY(-30deg);

  margin: 150px auto;

  -webkit-animation: giro 80s infinite linear;
  animation: giro 80s infinite linear;
}

.cubo .cara {
  position: absolute;
  border: 5px solid #000;
  opacity: 0.95;
}

/*Cara-Techo frontal*/
.cubo .cara:nth-child(1) {
	width: 0;
     height: 0;
     border-right: 105px solid transparent;
     border-top: -100px solid transparent;
     border-left: 105px solid transparent;
     border-bottom: 100px solid #75000d;
	  transform: rotateX(28deg) translateZ(205px);
}

/*Cara-Techo posterior*/
.cubo .cara:nth-child(2) {
	width: 0;
     height: 0;
     border-right: 105px solid transparent;
     border-top: -100px solid transparent;
     border-left: 105px solid transparent;
     border-bottom: 100px solid #75000d;
	 transform: rotateX(-28deg) translateZ(-205px);
}

/*Cara-Traprecio Izquierdo*/
.cubo .cara:nth-child(3) {
    width: 328px;
    height: 0px;
	top: -106px;
    border-right: 40px solid transparent;
	border-top: 0px solid transparent;
    border-left: 40px solid transparent;
    border-bottom: 132px solid #75000d;
	transform: translate(-150px) rotateX( 0deg ) rotateZ( 50.0deg ) rotateY( 90deg );
}

/*Cara-Traprecio Derecho*/
.cubo .cara:nth-child(4) {
    width: 328px;
    height: 0px;
	top: -110px;
    border-right: 40px solid transparent;
	border-top: 0px solid transparent;
    border-left: 40px solid transparent;
    border-bottom: 136px solid #75000d;
	transform: translate(-48.0px) rotateX( 0deg ) rotateZ( -50.0deg ) rotateY( -90deg );
}

/*Cara-Linea de Arriba*/
.cubo .cara:nth-child(5) {
	height: 3px;
	width: 108%;
	background-color: #75000d;
	top: -90px;
	transform: rotateY(-90deg) translateZ(53px);
}

/*Cara frontal*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 200px;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(7) {
	height: 125px;
	width: 200px;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(8) {
	height: 125px;
	width: 400px;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(9) {
	height: 125px;
	width: 400px;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna*/
.cubo .cara:nth-child(10) {
	height: 125px;
	width: 200px;
  -webkit-transform: translateZ(70px);
  transform: translateZ(70px);
}

/*Cara superior*/
.cubo .cara:nth-child(11) {
	height: 400px;
	width: 200px;
  -webkit-transform: rotateX(90deg) translateZ(200px);
  transform: rotateX(90deg) translateZ(200px);
}
/*Cara inferior*/
.cubo .cara:nth-child(12) {
	height: 400px;
	width: 200px;
  -webkit-transform: rotateX(-90deg) translateZ(-75px);
  transform: rotateX(-90deg) translateZ(-75px);
}

@-webkit-keyframes giro {
    0% { -webkit-transform: rotateX(-45deg) rotateY(0deg); }
    50% { -webkit-transform: rotateX(45deg) rotateY(360deg); }
    100% { -webkit-transform: rotateX(-45deg) rotateY(720deg); }
}

@keyframes giro {
    0% { transform: rotateX(-45deg) rotateY(0deg); }
    50% { transform: rotateX(45deg) rotateY(360deg); }
    100% { transform: rotateX(-45deg) rotateY(720deg); }
}

@-webkit-keyframes giro360 {
    0% { -webkit-transform: rotateX(  0deg) rotateY(  0deg); }
  100% { -webkit-transform: rotateX(360deg) rotateY(360deg); }
}

@keyframes giro360 {
    0% { transform: rotateX(  0deg) rotateY(  0deg); }
  100% { transform: rotateX(360deg) rotateY(360deg); }
}

.contenido{
    position: relative;
    overflow: hidden;
    padding: 20px;
    background: #386695;
    margin: 5px 0;
}
</style>';
}
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
echo '				    	<a href="viv_tech_inc.php" class="dashboard-mod" target="">
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
echo '		<table width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Presentación Gráfica de la Construcción</i></b></font></div></td>';
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
// Creamos el Cubo **********************************************************************
echo '		<p>&nbsp;</p>';
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Norte';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Techo Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Techo Oeste';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Techo Este';
echo '				</div>';
echo '				<div class="cara">';
echo '				  ';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Pared Norte';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Pared Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Pared Oeste';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Pared Este';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Pared Interna';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Superior';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="right"><a href="viv_proy_tincl_sim_cm.php" class="opciones_a">Regresar</a></td>';
echo '			  <td align="right"><a href="viv_proy_archivos.php" class="opciones_a">Generar Archivos</a></td>';
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