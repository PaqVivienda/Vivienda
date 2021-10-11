<?php
session_start();
// Verificamos la Entrada por la Intranet
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($password |= "")
{
}else{
		echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}

// Activamos la base de datos
include('conexion.php');
// Recibimos los datos de la Tabla
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
  if ( $piy > 0 ) {
	  $pi_ori = "Norte - Sur";
	  $pi_long = $peo_long;
	  $pi_alt =  $alt_yz;
	  $pi_sep = $piy;
	  $_SESSION['PINS'] = 1;
  } else {
	  $pi_sep = 0;
	  $pi_long = 0;
	  $pi_alt = 0;
	  $pi_sep = 0;
	  $_SESSION['PINS'] = 0;
  }
  if ( $pix > 0 ) {
	  $pi_ori = "Este - Oeste";
	  $pi_long = $pns_long;
	  $pi_alt =  $alt_xz;
	  $pi_sep = $pix;
	  $_SESSION['PIEO'] = 1;
  } else {
	  $pi_sep = 0;
	  $pi_long = 0;
	  $pi_alt = 0;
	  $pi_sep = 0;
	  $_SESSION['PIEO'] = 0;
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
  // Datos del Programa - Simulacion
  $_SESSION['titulo'] = $_POST['xtitulo'];
  $_SESSION['ttsim'] = $_POST['xttsim'];
  $_SESSION['orient'] = $_POST['xor'];
  $_SESSION['pasot'] = $_POST['xpasot'];;
  $orient = $_SESSION['orient'];
  $sql_orient = mysqli_query($con, "SELECT * FROM proy_orientacion where id='$orient'");
  $row_orient = mysqli_fetch_array($sql_orient);
  $_SESSION['or_desc'] = $row_orient['proy_orient_desc'];
  $_SESSION['or_img'] = $row_orient['proy_orient_img'];
  $_SESSION['carpeta'] = $_POST['xcarpeta'];
  $_SESSION['tec'] = $_POST['xtec'];
  $_SESSION['dat1'] = $_POST['xdat1'];
  $_SESSION['dat2'] = $_POST['xdat2'];
  $titulo = $_SESSION['titulo'];
  $ttsim  = $_SESSION['ttsim'];
  $xpasot = $_SESSION['pasot'];
  $or_desc = $_SESSION['or_desc'];
  $or_img  = $_SESSION['or_img'];
  $carpeta = $_SESSION['carpeta'];
  $tec = $_SESSION['tec'].".tec";
  $dat1 = $_SESSION['dat1'].".dat";
  $dat2 = $_SESSION['dat2'].".dat";
  // Fin Datos de Simulacion
  $sql_sim = 'INSERT INTO proy_simulacion (proy_cod, proy_sim_titulo, proy_sim_ttsim, proy_sim_or_desc, proy_sim_or_img, proy_sim_carpeta, proy_sim_archtec, proy_sim_archdat1, proy_sim_archdat2) VALUES (\''.$proy_cod.'\', \''.$titulo.'\', \''.$ttsim.'\', \''.$or_desc.'\', \''.$or_img.'\', \''.$carpeta.'\', \''.$tec.'\', \''.$dat1.'\', \''.$dat2.'\')';
  mysqli_query($con, $sql_sim) or die(mysqli_error());
  // Fin Datos y Almacenamiento de Simulacion
  // Datos del Programa de Condiciones Metereológicas
  $_SESSION['nubosidad'] = $_POST['xnubosidad'];
  $_SESSION['cmbaire'] = $_POST['xcambioaire'];
  $_SESSION['humrel'] = $_POST['xhumrel'];
  $_SESSION['velaire'] = $_POST['xvelarie'];
  $_SESSION['condmet'] = $_POST['xcm'];
  $condmet = $_SESSION['condmet'];
  $sql_cm = mysqli_query($con, "SELECT * FROM proy_cm where id='$condmet'");
  $row_cm = mysqli_fetch_array($sql_cm);
  $_SESSION['cm_region'] = $row_cm['proy_region'];
  $_SESSION['cm_mes'] = $row_cm['cm_mes'];
  $_SESSION['cm_latitud'] = $row_cm['cm_latitud'];
  $_SESSION['cm_declinacion'] = $row_cm['cm_declinacion'];
  $_SESSION['hlocal_hsolar'] = $row_cm['cm_hlocal_hsolar'];
  $_SESSION['cm_tmin'] = $row_cm['cm_tmin'];
  $_SESSION['cm_tmin_alos'] = $row_cm['cm_tmin_alos'];
  $_SESSION['cm_tmax'] = $row_cm['cm_tmax'];
  $_SESSION['cm_tmax_alos'] = $row_cm['cm_tmas_alos'];
  $_SESSION['cm_norte'] = $row_cm['cm_norte'];
  $_SESSION['cm_norte_alos'] = $row_cm['cm_norte_alos'];
  $_SESSION['cm_sur'] = $row_cm['cm_sur'];
  $_SESSION['cm_sur_alos'] = $row_cm['cm_sur_alos'];
  $_SESSION['cm_este'] = $row_cm['cm_este'];
  $_SESSION['cm_este_alos'] = $row_cm['cdm_este_alos'];
  $_SESSION['cm_oeste'] = $row_cm['cm_oeste'];
  $_SESSION['cm_oeste_alos'] = $row_cm['cm_oeste_alos'];
  $_SESSION['cm_techo'] = $row_cm['cm_techo'];
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
  // Controles Avamzados
  $_SESSION['capn_cb'] = $_POST['xpn'];
  $_SESSION['capn_cr'] = $_POST['xavpn'];
  $_SESSION['caps_cb'] = $_POST['xps'];
  $_SESSION['caps_cr'] = $_POST['xavps'];
  $_SESSION['cape_cb'] = $_POST['xpe'];
  $_SESSION['cape_cr'] = $_POST['xavpe'];
  $_SESSION['capo_cb'] = $_POST['xpo'];
  $_SESSION['capo_cr'] = $_POST['xavpo'];
  $_SESSION['catpl_cb'] = $_POST['xtpl'];
  $_SESSION['catpl_cr'] = $_POST['xavtecho'];
  $_SESSION['capta_cr'] = $_POST['xavpuerta'];
  $_SESSION['cavna_cr'] = $_POST['xavventana'];
  $_SESSION['monitoreo'] = $_POST['xmonit'];
  //*************
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
  if ( $monit == 1 ) {
	  $xxi = 0.00;
	  $xxj = 0.00;
	  $xxk = 0.00;
  } else {
  if ( $monit == 2 ) {
	  $_SESSION['xxi'] = $_POST['xi'];
	  $_SESSION['xxj'] = $_POST['xj'];
	  $_SESSION['xxk'] = $_POST['xk'];
	  $xxi = $_SESSION['xxi'];
	  $xxj = $_SESSION['xxj'];
	  $xxk = $_SESSION['xxk'];
  }}
  // Velocidades U.V.W.
  $_SESSION['uvw'] = $_POST['xuvw'];
  $uvw = $_SESSION['uvw'];
  if ($uvw =="1") {
	  $xuvw = "1";
	  $_SESSION['xveluvw'] = $_POST['xxveluvw'];
	  $xxveluvw = $_SESSION['xveluvw'];
  }else {
	  $xuvw = "0";
  }
  //********************************************
  // Presion
  $_SESSION['psion'] = $_POST['xpsion'];
  $psion = $_SESSION['psion'];
  if ( $psion == "1" ) {
	  $pres = "1";
	  $_SESSION['presion'] = $_POST['xpresion'];
	  $presion = $_SESSION['presion'];
  }
  //********************************************
  // Temperatura
  $_SESSION['temp'] = $_POST['xtemp'];
  $temp = $_SESSION['temp'];
  if ( $temp == "1" ) {
	  $tempe = "1";
	  $_SESSION['temper'] = $_POST['xtemper'];
	  $temperatura = $_SESSION['temper'];
  }
  $_SESSION['EMIP1V'] = $_POST['xEMIP1V'];
  $_SESSION['EMITE'] = $_POST['xEMITE'];
  $_SESSION['EMIP3V'] = $_POST['xEMIP3V'];
  $_SESSION['EMIP4V'] = $_POST['xEMIP4V'];
  $_SESSION['EMIP5V'] = $_POST['xEMIP5V'];
  $_SESSION['EMIV'] = $_POST['xEMIV'];
  $_SESSION['EMIPU'] = $_POST['xEMIPU'];
  $EMIP1V = $_SESSION['EMIP1V'];
  $EMITE = $_SESSION['EMITE'];
  $EMIP3V = $_SESSION['EMIP3V'];
  $EMIP4V = $_SESSION['EMIP4V'];
  $EMIP5V = $_SESSION['EMIP5V'];
  $EMIV = $_SESSION['EMIV'];
  $EMIPU = $_SESSION['EMIPU'];
  // Nodos a Contabilizar
  $_SESSION['nodo_i'] = $_POST['ni'];;
  $_SESSION['nodo_j'] = $_POST['nj'];;
  $_SESSION['nodo_k'] = $_POST['nk'];;
  $xnodo_i = $_SESSION['nodo_i'] + 3;
  $xnodo_j = $_SESSION['nodo_j'] + 3;
  $xnodo_k = $_SESSION['nodo_k'] + 3;
  //********************************************
  // Almacenamos los Datos
   $sql_cm = 'INSERT INTO proy_cm_sim (proy_cm_cod, proy_cm_nubosidad, proy_cm_cambioaire, proy_cm_hum_relativa, proy_cm_veloc_aire, proy_cm_mes, proy_cm_latitud, proy_cm_declinacion, proy_cm_hlocal_hsolar, proy_cm_tmin, proy_cm_tmin_alos, proy_cm_tmax, proy_cm_tmas_alos, proy_cm_norte, proy_cm_norte_alos, proy_cm_sur, proy_cm_sur_alos, proy_cm_este, proy_cm_este_alos, proy_cm_oeste, proy_cm_oeste_alos, proy_cm_techo, capn_cb, capn_cr, caps_cb, caps_cr, cape_cb, cape_cr, capo_cb, capo_cr, catpl_cb, catpl_cr, capta_cr, cavna_cr, monitoreo, monit_I,monit_J, monit_K, velocidad_uvw, vuvw_fr, presion, presion_fr, temperatura, temperatura_fr, EMIP1V, EMITE, EMIP3V, EMIP4V, EMIP5V, EMIV, EMIPU, nodo_i, nodo_j, nodo_k) VALUES (\''.$proy_cod.'\', \''.$nubosidad.'\', \''.$cambaire.'\', \''.$humrelat.'\', \''.$velaire.'\', \''.$cm_mes.'\', \''.$cm_latitud.'\', \''.$cm_declinacion.'\', \''.$cm_hlocal_hsolar.'\', \''.$cm_tmin.'\', \''.$cm_tmin_alos.'\', \''.$cm_tmax.'\', \''.$cm_tmax_alos.'\', \''.$cm_norte.'\', \''.$cm_norte_alos.'\', \''.$cm_sur.'\', \''.$cm_sur_alos.'\', \''.$cm_este.'\', \''.$cm_este_alos.'\', \''.$cm_oeste.'\', \''.$cm_oeste_alos.'\', \''.$cm_techo.'\', \''.$capn_cb.'\', \''.$capn_cr.'\', \''.$caps_cb.'\', \''.$caps_cr.'\', \''.$cape_cb.'\', \''.$cape_cr.'\', \''.$capo_cb.'\', \''.$capo_cr.'\', \''.$catpl_cb.'\', \''.$catpl_cr.'\', \''.$capta_cr.'\', \''.$cavna_cr.'\', \''.$monit.'\', \''.$xxi.'\', \''.$xxj.'\', \''.$xxk.'\',\''.$xuvw.'\',\''.$xxveluvw.'\', \''.$pres.'\', \''.$presion.'\', \''.$tempe.'\', \''.$temperatura.'\', \''.$EMIP1V.'\', \''.$EMITE.'\', \''.$EMIP3V.'\', \''.$EMIP4V.'\', \''.$EMIP5V.'\', \''.$EMIV.'\', \''.$EMIPU.'\', \''.$xnodo_i.'\', \''.$xnodo_j.'\', \''.$xnodo_k.'\')';
  mysqli_query($con, $sql_cm) or die(mysqli_error());
  // Fin del Programa de Condiciones Metereológicas
  // Pasamos a ver los resultados
  header ("Location: viv_proy_tplano_sim_cm.php");
?>
