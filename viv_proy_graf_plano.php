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
		$PN = $_SESSION['PN'];
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
		$PS = $_SESSION['PS'];
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
		$PE = $_SESSION['PE'];
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
		$PO = $_SESSION['PO'];
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
  if ( $piy> 0 ) {
	  $pi_ori = "Norte - Sur";
	  $pi_long = $peo_long;
	  $pi_alt =  $alt_yz;
	  $pi_sep = $piy;
	  $PINS = $_SESSION['PINS'];
  }
  if ( $pix > 0 ) {
	  $pi_ori = "Este - Oeste";
	  $pi_long = $pns_long;
	  $pi_alt =  $alt_xz;
	  $pi_sep = $pix;
	  $PIEO = $_SESSION['PIEO'];
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
  $TECH = $_SESSION['TECH'];
  $PIS = $_SESSION['PIS'];
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
			$PTAN = $_SESSION['PTAN'];
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
			$PTAS = $_SESSION['PTAS'];
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
			$PTAE = $_SESSION['PTAE'];
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
			$PTAO = $_SESSION['PTAO'];
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
			$VNAN = $_SESSION['VNAN'];
			// ************************************************
			// Casos
			$_SESSION['C11a'] = 1;
			$_SESSION['C12a'] = 1;
			$C11a = $_SESSION['C11a'];
			$C12a = $_SESSION['C12a'];
  		} else {
	  		$pn_vent_desc = "";
	  		$pn_vent_esp = 0.00;
	  		$pn_vent_dens = 0.00;
	  		$pn_vent_cond = 0.00;
	  		$pn_vent_calor = 0.00;
			// Casos
			$_SESSION['C11a'] = 0;
			$_SESSION['C12a'] = 0;
			$C11a = $_SESSION['C11a'];
			$C12a = $_SESSION['C12a'];
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
			$VNAS = $_SESSION['VNAS'];
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
			$VNAE = $_SESSION['VNAE'];
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
			$VNAO = $_SESSION['VNAO'];
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
  
  //*************************************************

 
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
// Casa Completa - Caso General
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 1 and $PTAS == 1 and $PTAE == 1 and $PTAO == 1 and $VNAN == 1 and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 1 and $PIEO == 1 ) {
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
  
  
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna / Norte - Sur*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 400px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: rotateY(90deg) translateZ(-125px);
  transform: rotateY(90deg) translateZ(-125px);
}

/*Cara Interna / Este - Oest*/
.cubo .cara:nth-child(7) {
	height: 125px;
	width: 200px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: translateZ(105px);
  transform: translateZ(105px);
}

/*Cara superior*/
.cubo .cara:nth-child(8) {
	height: 400px;
	width: 200px;
  -webkit-transform: rotateX(90deg) translateZ(200px);
  transform: rotateX(90deg) translateZ(200px);
}
/*Cara inferior*/
.cubo .cara:nth-child(9) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/*Puerta frontal*/
.cubo .cara:nth-child(10) {
	height: 75px;
	width: 50px;
	border: 2px solid #000;
	background: #a66c12;
  -webkit-transform: translateZ(205px) translateX(25px) translateY(51px);
  transform: translateZ(205px) translateX(25px) translateY(51px);
}
/*Ventana frontal*/
.cubo .cara:nth-child(11) {
	height: 25px;
	width: 85px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: translateZ(205px) translateX(97px) translateY(51px);
  transform: translateZ(205px) translateX(97px) tanslateY(51px);
}
/*Puerta derecha*/
.cubo .cara:nth-child(12) {
	height: 75px;
	width: 50px;
	border: 2px solid #000;
	background: #a66c12;
  -webkit-transform: rotateY(-90deg) translateZ(30px) translateY(51px) translateX(65px);
  transform: rotateY(-90deg) translateZ(30px) translateY(51px) translateX(65px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(13) {
	height: 25px;
	width: 85px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(48px) translateY(51px) translateX(-30px);
  transform: rotateY(-90deg) translateZ(48px) translateY(51px) translateX(-30px);
}
/*Puerta posterior*/
.cubo .cara:nth-child(14) {
	height: 75px;
	width: 50px;
	border: 2px solid #000;
	background: #a66c12;
  -webkit-transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-25px);
  transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-25px);
}
/*Ventana posterior*/
.cubo .cara:nth-child(15) {
	height: 25px;
	width: 85px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-97x);
  transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-97px);
}
/*Puerta izquierda*/
.cubo .cara:nth-child(16) {
	height: 75px;
	width: 50px;
	border: 2px solid #000;
	background: #a66c12;
  -webkit-transform: rotateY(90deg) translateZ(185px) translateY(51px) translateX(-40px);
  transform: rotateY(90deg) translateZ(185px) translateY(51px) translateX(-40px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(17) {
	height: 25px;
	width: 85px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(165px) translateY(55px) translateX(45px);
  transform: rotateY(s90deg) translateZ(165px) translateY(55px) translateX(45px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>

</style>';
} else { // Casos 1a - 2a - 3a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 0 and $PINS == 0 and $PINS == 0 and $PIEO == 0 ) {
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

/* Construcción Centro de la Casa */
/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/* Fin */

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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else {// Casos 4a - 5a - 6a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 1 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}

/*Puerta frontal*/
.cubo .cara:nth-child(7) {
	height: 75px;
	width: 50px;
	border: 2px solid #000;
	background: #a66c12;
  -webkit-transform: translateZ(205px) translateX(85px) translateY(51px);
  transform: translateZ(205px) translateX(85px) translateY(51px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
}
/*Ventana posterior*/
.cubo .cara:nth-child(9) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-75x);
  transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-75px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(10) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 7a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0  and $VNAS == 0 and $VNAE == 0 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}

/*Ventana derecha*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 8a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0  and $VNAS == 0 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(10) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 9a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 0 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/*Ventana frontal*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-10px);
  transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-10px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(9) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 10a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/*Ventana frontal*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-10px);
  transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-10px);
}
/*Ventana posterior*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-75x);
  transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-75px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(9) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(25px) translateY(53px) translateX(11px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(10) {
	height: 45px;
	width: 45px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 11a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/*Ventana frontal*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-20px);
  transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-20px);
}
/*Ventana posterior*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-63x);
  transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-63px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(9) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(10) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 12a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
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

  -webkit-transform: rotateX(0deg) rotateY(0deg);
  transform: rotateX(0deg) rotateY(0deg);

  margin: 150px auto;

  -webkit-animation: giro 80s infinite linear;
  animation: giro 80s infinite linear;
}

.cubo .cara {
  position: absolute;
  border: 5px solid #000;
  opacity: 0.95;
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara inferior*/
.cubo .cara:nth-child(6) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
}
/*Ventana frontal*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-20px);
  transform: translateZ(205px) translateX(97px) translateY(51px) translateX(-20px);
}
/*Ventana posterior*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-63x);
  transform: rotateY(180deg) translateZ(205px) translateY(51px) translateX(-63px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(9) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(10) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
}

/*@-webkit-keyframes giro {
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
}*/

.contenido{
    position: relative;
    overflow: hidden;
    padding: 20px;
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 1b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 0 and $PINS == 1 and $PIEO == 0 ) {
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
  
  
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna / Norte - Sur*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 400px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: rotateY(90deg) translateZ(-125px);
  transform: rotateY(90deg) translateZ(-125px);
}
/*Cara inferior*/
.cubo .cara:nth-child(7) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 2b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 0 and $PINS == 0 and $PIEO == 1 ) {
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
  
  
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna / Este - Oest*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 200px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: translateZ(105px);
  transform: translateZ(105px);
}
/*Cara inferior*/
.cubo .cara:nth-child(7) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { //Caso 1.1b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 1 and $PINS == 1 and $PIEO == 0 ) {
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
  
  
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna / Norte - Sur*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 400px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: rotateY(90deg) translateZ(-125px);
  transform: rotateY(90deg) translateZ(-125px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
}
/*Cara inferior*/
.cubo .cara:nth-child(8) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 1.2b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 1 and $VNAO == 0 and $PINS == 1 and $PIEO == 0 ) {
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
  
  
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna / Norte - Sur*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 400px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: rotateY(90deg) translateZ(-125px);
  transform: rotateY(90deg) translateZ(-125px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
}
/*Cara inferior*/
.cubo .cara:nth-child(8) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
} else { // Caso 1.3b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 1 and $VNAO == 1 and $PINS == 1 and $PIEO == 0 ) {
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
  
  
}

/*Cara Techo Plano*/
.cubo .cara:nth-child(1) {
	height: 390px;
	width: 190px;
	border: 10px solid #999a9b;
	background: #999a9b;
	opacity: 0.5;
  -webkit-transform: rotateX(90deg) translateZ(205x) translateX(2px);
  transform: rotateX(90deg) translateZ(205px) translateX(2px);
}
/*Cara frontal*/
.cubo .cara:nth-child(2) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: translateZ(205px);
  transform: translateZ(205px);
}
/*Cara posterior*/
.cubo .cara:nth-child(3) {
	height: 125px;
	width: 200px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(180deg) translateZ(205px);
  transform: rotateY(180deg) translateZ(205px);
}
/*Cara izquierda*/
.cubo .cara:nth-child(4) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(-90deg) translateZ(205px);
  transform: rotateY(-90deg) translateZ(205px);
}
/*Cara derecha*/
.cubo .cara:nth-child(5) {
	height: 125px;
	width: 400px;
	border: 5px solid #000;
	background: #f35803;
	opacity: 0.3;
  -webkit-transform: rotateY(90deg) translateZ(5px);
  transform: rotateY(90deg) translateZ(5px);
}
/*Cara Interna / Norte - Sur*/
.cubo .cara:nth-child(6) {
	height: 125px;
	width: 400px;
	border: 2px solid #000;
	background: #000000;
	opacity: 0.5;
  -webkit-transform: rotateY(90deg) translateZ(-125px);
  transform: rotateY(90deg) translateZ(-125px);
}
/*Ventana izquierda*/
.cubo .cara:nth-child(7) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(90deg) translateZ(187px) translateY(55px) translateX(17px);
  transform: rotateY(s90deg) translateZ(187px) translateY(55px) translateX(17px);
}
/*Ventana derecha*/
.cubo .cara:nth-child(8) {
	height: 45px;
	width: 65px;
	border: 2px solid #000;
	background: #bde7f3;
  -webkit-transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
  transform: rotateY(-90deg) translateZ(35px) translateY(53px) translateX(11px);
}
/*Cara inferior*/
.cubo .cara:nth-child(9) {
	height: 400px;
	width: 200px;
	border: 5px solid #ffffff;
	background: #ffffff;
  -webkit-transform: rotateX(-90deg) translateZ(-71px);
  transform: rotateX(-90deg) translateZ(-71px);
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
    background: #9acafb;
    margin: 5px 0;
}
</style>';
}}}}}}}}}}}}}}
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
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcción Techo Plano</i></b></font></div></td>';
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
// Caso General - Construcció Vivienda
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 1 and $PTAS == 1 and $PTAE == 1 and $PTAO == 1 and $VNAN == 1 and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS = 1 and $PIEO == 1 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Malla Techo';
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
echo '				  Pared Interna - Norte - Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Pared Interna - Este - Oeste';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  P-N';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-N';
echo '				</div>';
echo '				<div class="cara">';
echo '				  P-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  P-S';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-S';
echo '				</div>';
echo '				<div class="cara">';
echo '				  P-O';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else {
// Caso 1a 2a 3a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 0 and $PINS == 0 and $PINS == 0 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else {
// Caso 4a 5a 6a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 1 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  P-N';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-S';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 7a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0  and $VNAS == 0 and $VNAE == 0 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
	echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 8a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0  and $VNAS == 0 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 9a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 0 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-N';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 10a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-N';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-S';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 11a 12a
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 1  and $VNAS == 1 and $VNAE == 1 and $VNAO == 1 and $PINS == 0 and $PIEO == 0  ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-N';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-S';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 1b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 0 and $PINS == 1 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Pared Interna - Norte - Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else {// Caso 2b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 0 and $PINS == 0 and $PIEO == 1 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Pared Interna - Norte - Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 1.1b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 0 and $VNAO == 1 and $PINS == 1 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Pared Interna - Norte - Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else { // Caso 1.2b
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 1 and $VNAO == 0 and $PINS == 1 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Pared Interna - Norte - Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
} else {
if ( $PN == 1 and $PS == 1 and $PE == 1 and $PO == 1 and $TECH == 1 and $PIS == 1 and $PTAN == 0 and $PTAS == 0 and $PTAE == 0 and $PTAO == 0 and $VNAN == 0 and $VNAS == 0 and $VNAE == 1 and $VNAO == 1 and $PINS == 1 and $PIEO == 0 ) {
echo '		<article class="contenido">';
echo '			<div class="baul">';
echo '			  <div class="cubo">';
echo '				<div class="cara">';
echo '				  Techo Plano';
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
echo '				  Pared Interna - Norte - Sur';
echo '				</div>';
echo '				<div class="cara">';
echo '				  Piso';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-E';
echo '				</div>';
echo '				<div class="cara">';
echo '				  V-O';
echo '				</div>';
echo '			  </div>';
echo '			</div>';
echo '		</article>';
}}}}}}}}}}}}}
echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="right"><a href="viv_proy_tplano_sim_cm.php" class="opciones_a">Regresar</a></td>';
//echo '			  <td align="right"><a href="viv_proy_tplano_sim_cm.php" class="opciones_a">Aplicar Malla</a></td>';
echo '			  <td align="right"><a href="viv_proy_arch_pla_dat.php" class="opciones_a">Generar Archivos</a></td>';
echo '		  </tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table width="90%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td align="left"><font face="Comic Sans MS,arial,verdana", size="2", color="#000000">Usuario..: <img src="img/usuario.png" width="23" height="23" /> '.$_SESSION["nom_user"].'</font></td>';
echo '				<td align="right"><font face="Comic Sans MS,arial,verdana", color="#000000"><span id="liveclock" style="left:0;top:0; font-size:14px; <span id="IL_AD12" class="IL_AD"></span></font></td>';
echo '				<td align="right"><strong><font color="#000000"><sup>®</sup> Copyright 2018 Versión 1.0</strong></font><em><br>';
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