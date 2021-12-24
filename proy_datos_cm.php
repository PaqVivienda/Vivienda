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
  $sql_pn_capas = "SELECT * FROM proy_matcomp where proy_cod_comp = '$pn_modelo'";
  $res_pn_capas = mysqli_query($con, $sql_pn_capas);
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
  // Datos del Programa - Simulacion
  $_SESSION['titulo'] = $_POST['xtitulo'];
  $_SESSION['ttsim'] = $_POST['xttsim'];
  $_SESSION['orient'] = $_POST['xor'];
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
  $or_desc = $_SESSION['or_desc'];
  $or_img  = $_SESSION['or_img'];
  $carpeta = $_SESSION['carpeta'];
  $tec = $_SESSION['tec'].".tec";
  $dat1 = $_SESSION['dat1'].".dat";
  $dat2 = $_SESSION['dat2'].".dat";
  // Fin Datos de Simulacion
  $sql_sim = 'INSERT INTO proy_simulacion (proy_cod, proy_sim_titulo, proy_sim_ttsim, proy_sim_or_desc, proy_sim_or_img, proy_sim_carpeta, proy_sim_archtec, proy_sim_archdat1, proy_sim_archdat2) VALUES (\''.$proy_cod.'\', \''.$titulo.'\', \''.$ttsim.'\', \''.$or_desc.'\', \''.$or_img.'\', \''.$carpeta.'\', \''.$tec.'\', \''.$dat1.'\', \''.$dat2.'\')';
  mysqli_query($con, $sql_sim) or die(mysqli_error($con));
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
  $_SESSION['monitoreo'] = $_POST['xopcion'];
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
  if ( $monit == "1" ) {
	  $xxi = 0.00;
	  $xxj = 0.00;
	  $xxk = 0.00;
  } else {
	  $_SESSION['xxi'] = $_POST['xi'];
	  $_SESSION['xxj'] = $_POST['xj'];
	  $_SESSION['xxk'] = $_POST['xk'];
	  $xxi = $_SESSION['xxi'];
	  $xxj = $_SESSION['xxj'];
	  $xxk = $_SESSION['xxk'];
  }
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
  $xnodo_i = $_SESSION['nodo_i'];
  $xnodo_j = $_SESSION['nodo_j'];
  $xnodo_k = $_SESSION['nodo_k'];
  //********************************************
  // Almacenamos los Datos
   $sql_cm = 'INSERT INTO proy_cm_sim (proy_cm_cod, proy_cm_nubosidad, proy_cm_cambioaire, proy_cm_hum_relativa, proy_cm_veloc_aire, proy_cm_mes, proy_cm_latitud, proy_cm_declinacion, proy_cm_hlocal_hsolar, proy_cm_tmin, proy_cm_tmin_alos, proy_cm_tmax, proy_cm_tmas_alos, proy_cm_norte, proy_cm_norte_alos, proy_cm_sur, proy_cm_sur_alos, proy_cm_este, proy_cm_este_alos, proy_cm_oeste, proy_cm_oeste_alos, proy_cm_techo, capn_cb, capn_cr, caps_cb, caps_cr, cape_cb, cape_cr, capo_cb, capo_cr, catpl_cb, catpl_cr, capta_cr, cavna_cr, monitoreo, monit_I,monit_J, monit_K, velocidad_uvw, presion,  temperatura, EMIP1V, EMITE, EMIP3V, EMIP4V, EMIP5V, EMIV, EMIPU, nodo_i, nodo_j, nodo_k) VALUES (\''.$proy_cod.'\', \''.$nubosidad.'\', \''.$cambaire.'\', \''.$humrelat.'\', \''.$velaire.'\', \''.$cm_mes.'\', \''.$cm_latitud.'\', \''.$cm_declinacion.'\', \''.$cm_hlocal_hsolar.'\', \''.$cm_tmin.'\', \''.$cm_tmin_alos.'\', \''.$cm_tmax.'\', \''.$cm_tmax_alos.'\', \''.$cm_norte.'\', \''.$cm_norte_alos.'\', \''.$cm_sur.'\', \''.$cm_sur_alos.'\', \''.$cm_este.'\', \''.$cm_este_alos.'\', \''.$cm_oeste.'\', \''.$cm_oeste_alos.'\', \''.$cm_techo.'\', \''.$capn_cb.'\', \''.$capn_cr.'\', \''.$caps_cb.'\', \''.$caps_cr.'\', \''.$cape_cb.'\', \''.$cape_cr.'\', \''.$capo_cb.'\', \''.$capo_cr.'\', \''.$catpl_cb.'\', \''.$catpl_cr.'\', \''.$capta_cr.'\', \''.$cavna_cr.'\', \''.$monit.'\', \''.$xxi.'\', \''.$xxj.'\', \''.$xxk.'\',\''.$xuvw.'\',\''.$pres.'\', \''.$temperatura.'\', \''.$EMIP1V.'\', \''.$EMITE.'\', \''.$EMIP3V.'\', \''.$EMIP4V.'\', \''.$EMIP5V.'\', \''.$EMIV.'\', \''.$EMIPU.'\', \''.$xnodo_i.'\', \''.$xnodo_j.'\', \''.$xnodo_k.'\')';
  mysqli_query($con, $sql_cm) or die(mysqli_error($con));
  // Fin del Programa de Condiciones Metereológicas
  // Pasamos a ver los resultados
  header ("Location: viv_proy_tincl_sim_cm.php");
?>