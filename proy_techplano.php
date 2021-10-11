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
  $_SESSION['proy_cod'] = $_POST['xproy_cod'];
  $proy_cod = $_SESSION['proy_cod'];
  $sql_proy_cod = mysqli_query($con, "SELECT * FROM proy_proyecto where proy_cod='$proy_cod'");
  $row_proy_cod = mysqli_fetch_array($sql_proy_cod);
  $_SESSION['proy_desc'] = $row_proy_cod['proy_desc'];
  $proy_desc = $_SESSION['proy_desc'];
  // Construcción Paredes (Longitud)
  $_SESSION['pns_long'] = $_POST['xpns_long'];
  $_SESSION['peo_long'] = $_POST['xpeo_long'];
  $pns_long = $_SESSION['pns_long'];
  $peo_long = $_SESSION['peo_long'];
  // Componente Constructivo
		// Norte
		$_SESSION['pn_modelo'] = $_POST['xpn_pared_cod'];
		$pn_modelo = $_SESSION['pn_modelo'];
		$sql_pn_modelo = mysqli_query($con, "SELECT * FROM proy_componentes where proy_modelo = '$pn_modelo'");
  		$row_pn_modelo = mysqli_fetch_array($sql_pn_modelo, MYSQLI_ASSOC);
  		$_SESSION['pn_par_desc'] = $row_pn_modelo['proy_descripcion'];
  		$_SESSION['pn_capas'] = $row_pn_modelo['proy_ncapas'];
  		$_SESSION['pn_bloque'] = $row_pn_modelo['proy_tipo_bloque'];
  		$_SESSION['pn_dimensiones'] = $row_pn_modelo['proy_dimensiones'];
		// Capas
		$sql_pn_capas = mysqli_query($con, "SELECT * FROM proy_matcomp where proy_cod_comp = '$pn_modelo' AND proy_posicion = '1'");
		$row_pn_capas = mysqli_fetch_array($sql_pn_capas, MYSQLI_ASSOC);
		$_SESSION['pn_par_esp'] =  $row_pn_capas['proy_espesor'];
		$_SESSION['pn_par_dens'] =  $row_pn_capas['proy_densidad'];
		$_SESSION['pn_par_cond'] =  $row_pn_capas['proy_conductividad'];
		$_SESSION['pn_par_calor'] =  $row_pn_capas['proy_calorespecifico'];
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
		$_SESSION['PN'] = 1;
		// Fin Norte
		// Sur
		$_SESSION['ps_modelo'] = $_POST['xps_pared_cod'];
		$ps_modelo = $_SESSION['ps_modelo'];
		$sql_ps_modelo = mysqli_query($con, "SELECT * FROM proy_componentes where proy_modelo = '$ps_modelo'");
  		$row_ps_modelo = mysqli_fetch_array($sql_ps_modelo, MYSQLI_ASSOC);
  		$_SESSION['ps_par_desc'] = $row_ps_modelo['proy_descripcion'];
  		$_SESSION['ps_capas'] = $row_ps_modelo['proy_ncapas'];
  		$_SESSION['ps_bloque'] = $row_ps_modelo['proy_tipo_bloque'];
  		$_SESSION['ps_dimensiones'] = $row_ps_modelo['proy_dimensiones'];
		// Capas
		$sql_ps_capas = mysqli_query($con, "SELECT * FROM proy_matcomp where proy_cod_comp = '$ps_modelo' AND proy_posicion = '1'");
		$row_ps_capas = mysqli_fetch_array($sql_ps_capas, MYSQLI_ASSOC);
		$_SESSION['ps_par_esp'] =  $row_ps_capas['proy_espesor'];
		$_SESSION['ps_par_dens'] =  $row_ps_capas['proy_densidad'];
		$_SESSION['ps_par_cond'] =  $row_ps_capas['proy_conductividad'];
		$_SESSION['ps_par_calor'] =  $row_ps_capas['proy_calorespecifico'];
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
		$_SESSION['PS'] = 1;
		// Fin Sur
		// Este
		$_SESSION['pe_modelo'] = $_POST['xpe_pared_cod'];
		$pe_modelo = $_SESSION['pe_modelo'];
		$sql_pe_modelo = mysqli_query($con, "SELECT * FROM proy_componentes where proy_modelo = '$pe_modelo'");
  		$row_pe_modelo = mysqli_fetch_array($sql_pe_modelo, MYSQLI_ASSOC);
  		$_SESSION['pe_par_desc'] = $row_pe_modelo['proy_descripcion'];
  		$_SESSION['pe_capas'] = $row_pe_modelo['proy_ncapas'];
  		$_SESSION['pe_bloque'] = $row_pe_modelo['proy_tipo_bloque'];
  		$_SESSION['pe_dimensiones'] = $row_pe_modelo['proy_dimensiones'];
		// Capas
		$sql_pe_capas = mysqli_query($con, "SELECT * FROM proy_matcomp where proy_cod_comp = '$pe_modelo' AND proy_posicion = '1'");
		$row_pe_capas = mysqli_fetch_array($sql_pe_capas, MYSQLI_ASSOC);
		$_SESSION['pe_par_esp'] =  $row_pe_capas['proy_espesor'];
		$_SESSION['pe_par_dens'] =  $row_pe_capas['proy_densidad'];
		$_SESSION['pe_par_cond'] =  $row_pe_capas['proy_conductividad'];
		$_SESSION['pe_par_calor'] =  $row_pe_capas['proy_calorespecifico'];
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
		$_SESSION['PE'] = 1;
		// Fin Este
		// Oeste
		$_SESSION['po_modelo'] = $_POST['xpo_pared_cod'];
		$po_modelo = $_SESSION['po_modelo'];
		$sql_po_modelo = mysqli_query($con, "SELECT * FROM proy_componentes where proy_modelo = '$po_modelo'");
  		$row_po_modelo = mysqli_fetch_array($sql_po_modelo, MYSQLI_ASSOC);
  		$_SESSION['po_par_desc'] = $row_po_modelo['proy_descripcion'];
  		$_SESSION['po_capas'] = $row_po_modelo['proy_ncapas'];
  		$_SESSION['po_bloque'] = $row_po_modelo['proy_tipo_bloque'];
  		$_SESSION['po_dimensiones'] = $row_po_modelo['proy_dimensiones'];
		// Capas
		$sql_po_capas = mysqli_query($con, "SELECT * FROM proy_matcomp where proy_cod_comp = '$po_modelo' AND proy_posicion = '1'");
		$row_po_capas = mysqli_fetch_array($sql_po_capas, MYSQLI_ASSOC);
		$_SESSION['po_par_esp'] =  $row_po_capas['proy_espesor'];
		$_SESSION['po_par_dens'] =  $row_po_capas['proy_densidad'];
		$_SESSION['po_par_cond'] =  $row_po_capas['proy_conductividad'];
		$_SESSION['po_par_calor'] =  $row_po_capas['proy_calorespecifico'];
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
		$_SESSION['PO'] = 1;
		// Fin Oeste
  // Fin de Construcción de Paredes Longitud
  // Construcción de Paredes (Altura) ***************************
  if ( $_POST['xalt_yz'] == "" ) {
	  $alt_yz = 0;
	  $alt_yyz = 0;
  } else {
	  $_SESSION['alt_yz'] = $_POST['xalt_yz'];
	  $alt_yz = $_SESSION['alt_yz'];
	  $_SESSION['alt_yyz'] = $_POST['xalt_yyz'];
	  $alt_yyz = $_SESSION['alt_yyz'];
  }
  if ( $_POST['xalt_xz'] == "" ) {
	  $alt_xz = 0;
	  $alt_xxz = 0;
  } else {
	  $_SESSION['alt_xz'] = $_POST['xalt_xz'];
	  $alt_xz = $_SESSION['alt_xz'];
	  $_SESSION['alt_xxz'] = $_POST['xalt_xxz'];
	  $alt_xxz = $_SESSION['alt_xxz'];
  }
  // Fin de Altura
  // Construcción de Pared Interna *****************************
  $_SESSION['piy'] = $_POST['xpiy'];
  $_SESSION['pix'] = $_POST['xpix'];
  $piy = $_SESSION['piy'];
  $pix = $_SESSION['pix'];
  if ( $piy > 0 ) {
	  $pi_ori = "Norte - Sur";
	  $pi_long = $pns_long;
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
	  $pi_long = $peo_long;
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
  $_SESSION['pi_modelo'] = $_POST['xpint_cod'];
  $pint_modelo = $_SESSION['pi_modelo'];
  // Componente
  $sql_pi_modelo = mysqli_query($con, "SELECT * FROM proy_componentes where proy_modelo = '$pint_modelo'");
  $row_pi_modelo = mysqli_fetch_array($sql_pi_modelo, MYSQLI_ASSOC);
  if ( $row_pi_modelo['proy_descripcion'] != "Ninguno" ) {
	  $_SESSION['pi_desc'] = $row_pi_modelo['proy_descripcion'];
	  $_SESSION['pi_capas'] = $row_pi_modelo['proy_ncapas'];
	  $_SESSION['pi_bloque'] = $row_pi_modelo['proy_tipo_bloque'];
	  $_SESSION['pi_dimensiones'] = $row_pi_modelo['proy_dimensiones'];
	  // Capas
	  $sql_pi_capas = mysqli_query($con, "SELECT * FROM proy_matcomp where proy_cod_comp = '$pint_modelo' AND proy_posicion = '1'");
	  $row_pi_capas = mysqli_fetch_array($sql_pi_capas, MYSQLI_ASSOC);
	  $_SESSION['pi_esp'] =  $row_pi_capas['proy_espesor'];
	  $_SESSION['pi_dens'] =  $row_pi_capas['proy_densidad'];
	  $_SESSION['pi_cond'] =  $row_pi_capas['proy_conductividad'];
	  $_SESSION['pi_calor'] =  $row_pi_capas['proy_calorespecifico'];
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
  } else {
	  // Componentes
  	  $_SESSION['pi_modelo'] = "";
	  $_SESSION['pi_desc'] = "";
	  $_SESSION['pi_capas'] = 0;
	  $_SESSION['pi_bloque'] = "";
	  $_SESSION['pi_dimensiones'] = "";
	  $pint_modelo = $_SESSION['pi_modelo'];
	  $pi_desc = $_SESSION['pi_desc'];
	  $pi_capas = $_SESSION['pi_capas'];
	  $pi_bloque = $_SESSION['pi_bloque'];
	  $pi_dimensiones = $_SESSION['pi_dimensiones'];
	  // Capas
	  $_SESSION['pi_esp'] = 0.00;
	  $_SESSION['pi_dens'] = 0.00;
	  $_SESSION['pi_cond'] = 0.00;
	  $_SESSION['pi_calor'] = 0.00;
	  $pi_esp = $_SESSION['pi_esp'];
	  $pi_dens = $_SESSION['pi_dens'];
	  $pi_cond = $_SESSION['pi_cond'];
	  $pi_calor = $_SESSION['pi_calor'];
  }
  // Fin Construcción Pared Interna
  // Construcción Techo
  $_SESSION['tpl_modelo'] = $_POST['xtech_incl_cod']; //
  $tpl_modelo = $_SESSION['tpl_modelo'];
  // Componente Techo
  $sql_tpl_modelo = mysqli_query($con, "SELECT * FROM proy_techo WHERE proy_cod = '$tpl_modelo'");
  $row_tpl_modelo = mysqli_fetch_array($sql_tpl_modelo,  MYSQLI_ASSOC);
  $_SESSION['tpl_desc'] = $row_tpl_modelo['proy_descripcion'];
  $_SESSION['tpl_capas'] = $row_tpl_modelo['proy_capas'];
  $_SESSION['tpl_bloque'] = $row_tpl_modelo['proy_tipo_bloque'];
  $_SESSION['tpl_dims'] = $row_tpl_modelo['proy_dimensiones'];
  // Capas
  $sql_tpl_capas = mysqli_query($con, "SELECT * FROM proy_techo_capas where proy_cod_capa = '$tpl_modelo' AND proy_descripcion = 'FRISO'");
  $row_tpl_capas = mysqli_fetch_array($sql_tpl_capas, MYSQLI_ASSOC);
  $_SESSION['tpl_esp'] =  $row_tpl_capas['proy_espesor'];
  $_SESSION['tpl_dens'] =  $row_tpl_capas['proy_densidad'];
  $_SESSION['tpl_cond'] =  $row_tpl_capas['proy_conductividad'];
  $_SESSION['tpl_calor'] =  $row_tpl_capas['proy_calorespecifico'];
  // Construcción de Techo
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
  $_SESSION['TECH'] = 1;
  $_SESSION['PIS'] = 1;
  // Fin de Construcción Techo
  // Construcción de Puertas
  // Puerta Norte
		// Componentes
		$_SESSION['pn_puerta_cod'] = $_POST['xpn_puerta_cod'];
  		$pn_puerta_cod = $_SESSION['pn_puerta_cod'];
  		$sql_pn_puerta_cod = mysqli_query($con, "SELECT * FROM proy_puertas where id='$pn_puerta_cod'");
  		$row_pn_puerta_cod = mysqli_fetch_array($sql_pn_puerta_cod, MYSQLI_ASSOC);
  		if ( $row_pn_puerta_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['pn_puerta_desc'] = $row_pn_puerta_cod['proy_descripcion'];
	  		$_SESSION['pn_puerta_esp'] = $row_pn_puerta_cod['proy_espesor'];
	  		$_SESSION['pn_puerta_dens'] = $row_pn_puerta_cod['proy_densidad'];
	  		$_SESSION['pn_puerta_cond'] = $row_pn_puerta_cod['proy_conductividad'];
	  		$_SESSION['pn_puerta_calor'] = $row_pn_puerta_cod['proy_calorespecifico'];
			$pn_puerta_desc = $_SESSION['pn_puerta_desc'];
			$pn_puerta_esp = $_SESSION['pn_puerta_esp'];
	  		$pn_puerta_dens = $_SESSION['pn_puerta_dens'];
	  		$pn_puerta_cond = $_SESSION['pn_puerta_cond'];
	  		$pn_puerta_calor = $_SESSION['pn_puerta_calor'];
			$_SESSION['pxi_n'] = $_POST['xpxi_n'];
			$_SESSION['pe_n'] = $_POST['xpe_n'];
			$_SESSION['ph_n'] = $_POST['xph_n'];
			$pxi_n = $_SESSION['pxi_n'];
			$pe_n = $_SESSION['pe_n'];
			$ph_n = $_SESSION['ph_n'];
	  		$_SESSION['pn_puerta'] = 1;
			$_SESSION['PTAN'] = 1;
			$_SESSION['NPTAN'] = 1;
  		} else {
			$pn_puerta_desc = "";
	  		$pn_puerta_esp = 0.00;
	  		$pn_puerta_dens = 0.00;
	  		$pn_puerta_cond = 0.00;
	  		$pn_puerta_calor = 0.00;
			$pxi_n = 0.00;
			$pe_n = 0.00;
			$ph_n = 0.00;
		}
		// Fin Puerta Norte
		// Sur
		//Puerta Sur
		// Componentes
		$_SESSION['ps_puerta_cod'] = $_POST['xps_puerta_cod'];
  		$ps_puerta_cod = $_SESSION['ps_puerta_cod'];
  		$sql_ps_puerta_cod = mysqli_query($con, "SELECT * FROM proy_puertas where id='$ps_puerta_cod'");
  		$row_ps_puerta_cod = mysqli_fetch_array($sql_ps_puerta_cod, MYSQLI_ASSOC);
  		if ( $row_ps_puerta_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['ps_puerta_desc'] = $row_ps_puerta_cod['proy_descripcion'];
	  		$_SESSION['ps_puerta_esp'] = $row_ps_puerta_cod['proy_espesor'];
	  		$_SESSION['ps_puerta_dens'] = $row_ps_puerta_cod['proy_densidad'];
	  		$_SESSION['ps_puerta_cond'] = $row_ps_puerta_cod['proy_conductividad'];
	  		$_SESSION['ps_puerta_calor'] = $row_ps_puerta_cod['proy_calorespecifico'];
			$ps_puerta_desc = $_SESSION['ps_puerta_desc'];
			$ps_puerta_esp = $_SESSION['ps_puerta_esp'];
	  		$ps_puerta_dens = $_SESSION['ps_puerta_dens'];
	  		$ps_puerta_cond = $_SESSION['ps_puerta_cond'];
	  		$ps_puerta_calor = $_SESSION['ps_puerta_calor'];
			$_SESSION['pxi_s'] = $_POST['xpxi_s'];
	  		$_SESSION['pe_s'] = $_POST['xpe_s'];
	  		$_SESSION['ph_s'] = $_POST['xph_s'];
			$pxi_s = $_SESSION['pxi_s'];
	  		$pe_s = $_SESSION['pe_s'];
	  		$ph_s = $_SESSION['ph_s'];
	  		$_SESSION['ps_puerta'] = 1;
			$_SESSION['PTAS'] = 1;
			$_SESSION['NPTAS'] = 1;
  		} else {
			$ps_puerta_desc = "";
	  		$ps_puerta_esp = 0.00;
	  		$ps_puerta_dens = 0.00;
	  		$ps_puerta_cond = 0.00;
	  		$ps_puerta_calor = 0.00;
			$pxi_s = 0.00;
	  		$pe_s = 0.00;
	  		$ph_s = 0.00;;
		}
		// Fin Puerta Sur
		// Puerta Este
		 // Componentes
		 $_SESSION['pe_puerta_cod'] = $_POST['xpe_puerta_cod'];
  		$pe_puerta_cod = $_SESSION['pe_puerta_cod'];
  		$sql_pe_puerta_cod = mysqli_query($con, "SELECT * FROM proy_puertas where id='$pe_puerta_cod'");
  		$row_pe_puerta_cod = mysqli_fetch_array($sql_pe_puerta_cod, MYSQLI_ASSOC);
  		if ( $row_pe_puerta_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['pe_puerta_desc'] = $row_pe_puerta_cod['proy_descripcion'];
	  		$_SESSION['pe_puerta_esp'] = $row_pe_puerta_cod['proy_espesor'];
	  		$_SESSION['pe_puerta_dens'] = $row_pe_puerta_cod['proy_densidad'];
	  		$_SESSION['pe_puerta_cond'] = $row_pe_puerta_cod['proy_conductividad'];
	  		$_SESSION['pe_puerta_calor'] = $row_pe_puerta_cod['proy_calorespecifico'];
			$pe_puerta_desc = $_SESSION['pe_puerta_desc'];
			$pe_puerta_esp = $_SESSION['pe_puerta_esp'];
	  		$pe_puerta_dens = $_SESSION['pe_puerta_dens'];
	  		$pe_puerta_cond = $_SESSION['pe_puerta_cond'];
	  		$pe_puerta_calor = $_SESSION['pe_puerta_calor'];
			$_SESSION['pxi_e'] = $_POST['xpxi_e'];
	  		$_SESSION['pe_e'] = $_POST['xpe_e'];
	  		$_SESSION['ph_e'] = $_POST['xph_e'];
			$pxi_e = $_SESSION['pxi_e'];
	  		$pe_e = $_SESSION['pe_e'];
	  		$ph_e = $_SESSION['ph_e'];
	  		$_SESSION['pe_puerta'] = 1;
			$_SESSION['PTAE'] = 1;
			$_SESSION['NPTAE'] = 1;
  		} else {
			$pe_puerta_desc = "";
			$pe_puerta_esp = 0.00;
	  		$pe_puerta_dens = 0.00;
	  		$pe_puerta_cond = 0.00;
	  		$pe_puerta_calor = 0.00;
			$pxi_e = 0.00;
	  		$pe_e = 0.00;
	  		$ph_e = 0.00;
		}
		// Fin Puerta Este
		// Puerta Oeste
		// Componentes
		$_SESSION['po_puerta_cod'] = $_POST['xpo_puerta_cod'];
  		$po_puerta_cod = $_SESSION['po_puerta_cod'];
  		$sql_po_puerta_cod = mysqli_query($con, "SELECT * FROM proy_puertas where id='$po_puerta_cod'");
  		$row_po_puerta_cod = mysqli_fetch_array($sql_po_puerta_cod, MYSQLI_ASSOC);
  		if ( $row_po_puerta_cod['proy_descripcion'] != "Ninguno" ) {
	 		$_SESSION['po_puerta_desc'] = $row_po_puerta_cod['proy_descripcion'];
	  		$_SESSION['po_puerta_esp'] = $row_po_puerta_cod['proy_espesor'];
	  		$_SESSION['po_puerta_dens'] = $row_po_puerta_cod['proy_densidad'];
	  		$_SESSION['po_puerta_cond'] = $row_po_puerta_cod['proy_conductividad'];
	  		$_SESSION['po_puerta_calor'] = $row_po_puerta_cod['proy_calorespecifico'];
			$po_puerta_desc = $_SESSION['po_puerta_desc'];
			$po_puerta_esp = $_SESSION['po_puerta_esp'];
	  		$po_puerta_dens = $_SESSION['po_puerta_dens'];
	  		$po_puerta_cond = $_SESSION['po_puerta_cond'];
	  		$po_puerta_calor = $_SESSION['po_puerta_calor'];
			$_SESSION['pxi_o'] = $_POST['xpxi_o'];
	   		$_SESSION['pe_o'] = $_POST['xpe_o'];
	   		$_SESSION['ph_o'] = $_POST['xph_o'];
			$pxi_o = $_SESSION['pxi_o'];
	   		$pe_o = $_SESSION['pe_o'];
	   		$ph_o = $_SESSION['ph_o'];
	  		$_SESSION['po_puerta'] = 1;
			$_SESSION['PTAO'] = 1;
			$_SESSION['NPTAO'] = 1;
  		}
		 else {
			$po_puerta_desc = "";
	  		$po_puerta_esp = 0.00;
	  		$po_puerta_dens = 0.00;
	  		$po_puerta_cond = 0.00;
	  		$po_puerta_calor = 0.00;
			$pxi_o = 0.00;
	  		$pe_o = 0.00;
	  		$ph_o = 0.00;
		}
		// Fin Puerta Oeste
	// Fin Construcción de Puertas
	// Fin de Construcción de Puertas
	// Construcción de Ventana
		// Ventana Norte
		$_SESSION['pn_vent_cod'] = $_POST['xpn_vent_cod'];
  		$pn_vent_cod = $_SESSION['pn_vent_cod'];
  		$sql_pn_vent_cod = mysqli_query($con, "SELECT * FROM proy_ventanas where id='$pn_vent_cod'");
  		$row_pn_vent_cod = mysqli_fetch_array($sql_pn_vent_cod, MYSQLI_ASSOC);
  		if ( $row_pn_vent_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['pn_vent_desc'] = $row_pn_vent_cod['proy_descripcion'];
	  		$_SESSION['pn_vent_esp'] = $row_pn_vent_cod['proy_espesor'];
	  		$_SESSION['pn_vent_dens'] = $row_pn_vent_cod['proy_densidad'];
	  		$_SESSION['pn_vent_cond'] = $row_pn_vent_cod['proy_conductividad'];
	  		$_SESSION['pn_vent_calor'] = $row_pn_vent_cod['proy_calorespecifico'];
			$pn_vent_desc = $_SESSION['pn_vent_desc'];
	  		$pn_vent_esp = $_SESSION['pn_vent_esp'];
	  		$pn_vent_dens = $_SESSION['pn_vent_dens'];
	  		$pn_vent_cond = $_SESSION['pn_vent_cond'];
	  		$pn_vent_calor = $_SESSION['pn_vent_calor'];
			$_SESSION['vxi_n'] = $_POST['xvxi_n'];
	  		$_SESSION['vyi_n'] = $_POST['xvyi_n'];
	  		$_SESSION['ve_n'] = $_POST['xve_n'];
	  		$_SESSION['vh_n'] = $_POST['xvh_n'];
			$vxi_n = $_SESSION['vxi_n'];
	  		$vyi_n = $_SESSION['vyi_n'];
	  		$ve_n = $_SESSION['ve_n'];
	  		$vh_n = $_SESSION['vh_n'];
			$_SESSION['pn_ventana'] = 1;
			$_SESSION['VNAN'] = 1;
			$_SESSION['NVNAN'] = 1;
  		} else {
			$pn_vent_desc = "";
	  		$pn_vent_esp = 0.00;
	  		$pn_vent_dens = 0.00;
	  		$pn_vent_cond = 0.00;
	  		$pn_vent_calor = 0.00;
			$vxi_n = 0.00;
	  		$vyi_n = 0.00;
	  		$ve_n = 0.00;
	  		$vh_n = 0.00;
		}
		//*************
		// Ventana Sur
		$_SESSION['ps_vent_cod'] = $_POST['xps_vent_cod'];
  		$ps_vent_cod = $_SESSION['ps_vent_cod'];
  		$sql_ps_vent_cod = mysqli_query($con, "SELECT * FROM proy_ventanas where id='$ps_vent_cod'");
  		$row_ps_vent_cod = mysqli_fetch_array($sql_ps_vent_cod, MYSQLI_ASSOC);
  		if ( $row_ps_vent_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['ps_vent_desc'] = $row_ps_vent_cod['proy_descripcion'];
	  		$_SESSION['ps_vent_esp'] = $row_ps_vent_cod['proy_espesor'];
	  		$_SESSION['ps_vent_dens'] = $row_ps_vent_cod['proy_densidad'];
	  		$_SESSION['ps_vent_cond'] = $row_ps_vent_cod['proy_conductividad'];
	  		$_SESSION['ps_vent_calor'] = $row_ps_vent_cod['proy_calorespecifico'];
			$ps_vent_desc = $_SESSION['ps_vent_desc'];
	  		$ps_vent_esp = $_SESSION['ps_vent_esp'];
	  		$ps_vent_dens = $_SESSION['ps_vent_dens'];
	  		$ps_vent_cond = $_SESSION['ps_vent_cond'];
	  		$ps_vent_calor = $_SESSION['ps_vent_calor'];
			$_SESSION['vxi_s'] = $_POST['xvxi_s'];
	  		$_SESSION['vyi_s'] = $_POST['xvyi_s'];
	  		$_SESSION['ve_s'] = $_POST['xve_s'];
	  		$_SESSION['vh_s'] = $_POST['xvh_s'];
			$vxi_s = $_SESSION['vxi_s'];
	  		$vyi_s = $_SESSION['vyi_s'];
	  		$ve_s = $_SESSION['ve_s'];
	  		$vh_s = $_SESSION['vh_s'];
			$_SESSION['ps_ventana'] = 1;
			$_SESSION['VNAS'] = 1;
			$_SESSION['NVNAS'] = 1;
  		} else {
			$ps_vent_desc = "";
	  		$ps_vent_esp = 0.00;
	  		$ps_vent_dens = 0.00;
	  		$ps_vent_cond = 0.00;
	  		$ps_vent_calor = 0.00;
			$vxi_s = 0.00;
	  		$vyi_s = 0.00;
	  		$ve_s = 0.00;
	  		$vh_s = 0.00;
		}
		//*************
		// Ventana Este
		$_SESSION['pe_vent_cod'] = $_POST['xpe_vent_cod'];
  		$pe_vent_cod = $_SESSION['pe_vent_cod'];
  		$sql_pe_vent_cod = mysqli_query($con, "SELECT * FROM proy_ventanas where id='$pe_vent_cod'");
  		$row_pe_vent_cod = mysqli_fetch_array($sql_pe_vent_cod, MYSQLI_ASSOC);
 		 if ( $row_pe_vent_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['pe_vent_desc'] = $row_pe_vent_cod['proy_descripcion'];
	 		$_SESSION['pe_vent_esp'] = $row_pe_vent_cod['proy_espesor'];
	  		$_SESSION['pe_vent_dens'] = $row_pe_vent_cod['proy_densidad'];
	  		$_SESSION['pe_vent_cond'] = $row_pe_vent_cod['proy_conductividad'];
	  		$_SESSION['pe_vent_calor'] = $row_pe_vent_cod['proy_calorespecifico'];
			$pe_vent_desc = $_SESSION['pe_vent_desc'];
            $pe_vent_esp = $_SESSION['pe_vent_esp'];
	  		$pe_vent_dens = $_SESSION['pe_vent_dens'];
	  		$pe_vent_cond = $_SESSION['pe_vent_cond'];
	 		$pe_vent_calor = $_SESSION['pe_vent_calor'];
			$_SESSION['vxi_e'] = $_POST['xvxi_e'];
	  		$_SESSION['vyi_e'] = $_POST['xvyi_e'];
	  		$_SESSION['ve_e'] = $_POST['xve_e'];
	  		$_SESSION['vh_e'] = $_POST['xvh_e'];
			$vxi_e = $_SESSION['vxi_e'];
	  		$vyi_e = $_SESSION['vyi_e'];
	  		$ve_e = $_SESSION['ve_e'];
	  		$vh_e = $_SESSION['vh_e'];
			$_SESSION['pe_ventana'] = 1;
			$_SESSION['VNAE'] = 1;
			$_SESSION['NVNAE'] = 1;
 		 } else {
			$pe_vent_desc = "";
            $pe_vent_esp = 0.00;
	  		$pe_vent_dens = 0.00;
	  		$pe_vent_cond = 0.00;
	 		$pe_vent_calor = 0.00;
			$vxi_e = 0.00;
	  		$vyi_e = 0.00;
	  		$ve_e = 0.00;
	  		$vh_e = 0.00;
		 }
		//*************
		// Ventana Oeste
		$_SESSION['po_vent_cod'] = $_POST['xpo_vent_cod'];
  		$po_vent_cod = $_SESSION['po_vent_cod'];
  		$sql_po_vent_cod = mysqli_query($con, "SELECT * FROM proy_ventanas where id='$po_vent_cod'");
  		$row_po_vent_cod = mysqli_fetch_array($sql_po_vent_cod, MYSQLI_ASSOC);
  		if ( $row_po_vent_cod['proy_descripcion'] != "Ninguno" ) {
	  		$_SESSION['po_vent_desc'] = $row_po_vent_cod['proy_descripcion'];
	  		$_SESSION['po_vent_esp'] = $row_po_vent_cod['proy_espesor'];
	  		$_SESSION['po_vent_dens'] = $row_po_vent_cod['proy_densidad'];
	  		$_SESSION['po_vent_cond'] = $row_po_vent_cod['proy_conductividad'];
	  		$_SESSION['po_vent_calor'] = $row_po_vent_cod['proy_calorespecifico'];
			$po_vent_desc = $_SESSION['po_vent_desc'];
	  		$po_vent_esp = $_SESSION['po_vent_esp'];
	  		$po_vent_dens = $_SESSION['po_vent_dens'];
	  		$po_vent_cond = $_SESSION['po_vent_cond'];
	  		$po_vent_calor = $_SESSION['po_vent_calor'];
			$_SESSION['vxi_o'] = $_POST['xvxi_o'];
	  		$_SESSION['vyi_o'] = $_POST['xvyi_o'];
	  		$_SESSION['ve_o'] = $_POST['xve_o'];
	  		$_SESSION['vh_o'] = $_POST['xvh_o'];
			$vxi_o = $_SESSION['vxi_o'];
	  		$vyi_o = $_SESSION['vyi_o'];
	  		$ve_o = $_SESSION['ve_o'];
	  		$vh_o = $_SESSION['vh_o'];
			$_SESSION['po_ventana'] = 1;
			$_SESSION['VNAO'] = 1;
			$_SESSION['NVNAO'] = 1;
  		} else {
			$po_vent_desc = "";
	  		$po_vent_esp = 0.00;
	  		$po_vent_dens = 0.00;
	  		$po_vent_cond = 0.00;
	  		$po_vent_calor = 0.00;
			$vxi_o = 0.00;
	  		$vyi_o = 0.00;
	  		$ve_o = 0.00;
	  		$vh_o = 0.00;
		}
		//*************
	// Fin de Construcción de Ventana
	// Datos de Construcción de Casa
	
// Fin de la toma de Datos **************************************************************
// Almacenamos la Información ***********************************************************
$sql = 'INSERT INTO proy_tech_plan ( cod_proy, desc_proy, pns_long, peo_long, pn_modelo, pn_desc, pn_capas, pn_bloques, pn_dimensiones, pn_esp, pn_dens, pn_cond, pn_calesp, ps_modelo, ps_desc, ps_capas, ps_bloques, ps_dimensiones, ps_esp, ps_dens, ps_cond, ps_calesp, pe_modelo, pe_desc, pe_capas, pe_bloques, pe_dimensiones, pe_esp, pe_dens, pe_cond, pe_calesp, po_modelo, po_desc, po_capas, po_bloques, po_dimensiones, po_esp, po_dens, po_cond, po_calesp, alt_yz, alt_yyz, alt_xz, alt_xxz, pix, piy, pi_orientacion, pi_long, pi_alt, pi_sep, pi_modelo, pi_desc, pi_capas, pi_bloques, pi_dimensiones, pi_esp, pi_dens, pi_cond, pi_calesp, tpl_modelo, tpl_desc, tpl_capas, tpl_bloques, tpl_dimensiones, tpl_esp, tpl_dens, tpl_cond, tpl_calesp, pta_i_n, pta_e_n, pta_h_n, pta_desc_n, pta_esp_n, pta_dens_n, pta_cond_n, pta_calesp_n, pta_i_s, pta_e_s, pta_h_s, pta_desc_s, pta_esp_s, pta_dens_s, pta_cond_s, pta_calesp_s, pta_i_e, pta_e_e, pta_h_e, pta_desc_e, pta_esp_e, pta_dens_e, pta_cond_e, pta_calesp_e, pta_i_o, pta_e_o, pta_h_o, pta_desc_o, pta_esp_o, pta_dens_o, pta_cond_o, pta_calesp_o, vna_a_n, vna_b_n, vna_w_n, vna_h_n, vna_desc_n, vna_esp_n, vna_dens_n, vna_cond_n, vna_calesp_n, vna_a_s, vna_b_s, vna_w_s, vna_h_s, vna_desc_s, vna_esp_s, vna_dens_s, vna_cond_s, vna_calesp_s, vna_a_e, vna_b_e, vna_w_e, vna_h_e, vna_desc_e, vna_esp_e, vna_dens_e, vna_cond_e, vna_calesp_e, vna_a_o, vna_b_o, vna_w_o, vna_h_o, vna_desc_o, vna_esp_o, vna_dens_o, vna_cond_o, vna_calesp_o, pn, ps, pe, po, pins, pieo, tech, pis, ptan, ptas, ptae, ptao, vnan, vnas, vnae, vnao ) VALUES ( \''.$proy_cod.'\', \''.$proy_desc.'\', \''.$pns_long.'\', \''.$peo_long.'\', \''.$pn_modelo.'\', \''.$pn_par_desc.'\', \''.$pn_capas.'\', \''.$pn_bloque.'\', \''.$pn_dimensiones.'\', \''.$pn_par_esp.'\', \''.$pn_par_dens.'\', \''.$pn_par_cond.'\', \''.$pn_par_calor.'\', \''.$ps_modelo.'\', \''.$ps_par_desc.'\', \''.$ps_capas.'\', \''.$ps_bloque.'\', \''.$ps_dimensiones.'\', \''.$ps_par_esp.'\', \''.$ps_par_dens.'\', \''.$ps_par_cond.'\', \''.$ps_par_calor.'\', \''.$pe_modelo.'\', \''.$pe_par_desc.'\', \''.$pe_capas.'\', \''.$pe_bloque.'\', \''.$pe_dimensiones.'\', \''.$pe_par_esp.'\', \''.$pe_par_dens.'\', \''.$pe_par_cond.'\', \''.$pe_par_calor.'\', \''.$po_modelo.'\', \''.$po_par_desc.'\', \''.$po_capas.'\', \''.$po_bloque.'\', \''.$po_dimensiones.'\', \''.$po_par_esp.'\', \''.$po_par_dens.'\', \''.$po_par_cond.'\', \''.$po_par_calor.'\', \''.$alt_yz.'\', \''.$alt_yyz.'\', \''.$alt_xz.'\', \''.$alt_xxz.'\', \''.$pix.'\', \''.$piy.'\', \''.$pi_ori.'\', \''.$pi_long.'\', \''.$pi_alt.'\', \''.$pi_sep.'\', \''.$pint_modelo.'\', \''.$pi_desc.'\', \''.$pi_capas.'\', \''.$pi_bloque.'\', \''.$pi_dimensiones.'\', \''.$pi_esp.'\', \''.$pi_dens.'\', \''.$pi_cond.'\', \''.$pi_calor.'\', \''.$tpl_modelo.'\', \''.$tpl_desc.'\', \''.$tpl_capas.'\', \''.$tpl_bloque.'\', \''.$tpl_dims.'\', \''.$tpl_esp.'\', \''.$tpl_dens.'\', \''.$tpl_cond.'\', \''.$tpl_calor.'\', \''.$pxi_n.'\', \''.$pe_n.'\', \''.$ph_n.'\', \''.$pn_puerta_desc.'\', \''.$pn_puerta_esp.'\', \''.$pn_puerta_dens.'\', \''.$pn_puerta_cond.'\', \''.$pn_puerta_calor.'\', \''.$pxi_s.'\', \''.$pe_s.'\', \''.$ph_s.'\', \''.$ps_puerta_desc.'\', \''.$ps_puerta_esp.'\', \''.$ps_puerta_dens.'\', \''.$ps_puerta_cond.'\', \''.$ps_puerta_calor.'\', \''.$pxi_e.'\', \''.$pe_e.'\', \''.$ph_e.'\', \''.$pe_puerta_desc.'\', \''.$pe_puerta_esp.'\', \''.$pe_puerta_dens.'\', \''.$pe_puerta_cond.'\', \''.$pe_puerta_calor.'\', \''.$pxi_o.'\', \''.$pe_o.'\', \''.$ph_o.'\', \''.$po_puerta_desc.'\', \''.$po_puerta_esp.'\', \''.$po_puerta_dens.'\', \''.$po_puerta_cond.'\', \''.$po_puerta_calor.'\', \''.$vxi_n.'\', \''.$vyi_n.'\', \''.$ve_n.'\', \''.$vh_n.'\', \''.$pn_vent_desc.'\', \''.$pn_vent_esp.'\', \''.$pn_vent_dens.'\', \''.$pn_vent_cond.'\', \''.$pn_vent_calor.'\', \''.$vxi_s.'\', \''.$vyi_s.'\', \''.$ve_s.'\', \''.$vh_s.'\', \''.$ps_vent_desc.'\', \''.$ps_vent_esp.'\', \''.$ps_vent_dens.'\', \''.$ps_vent_cond.'\', \''.$ps_vent_calor.'\', \''.$vxi_e.'\', \''.$vyi_e.'\', \''.$ve_e.'\', \''.$vh_e.'\', \''.$pe_vent_desc.'\', \''.$pe_vent_esp.'\', \''.$pe_vent_dens.'\', \''.$pe_vent_cond.'\', \''.$pe_vent_calor.'\', \''.$vxi_o.'\', \''.$vyi_o.'\', \''.$ve_o.'\', \''.$vh_o.'\', \''.$po_vent_desc.'\', \''.$po_vent_esp.'\', \''.$po_vent_dens.'\', \''.$po_vent_cond.'\', \''.$po_vent_calor.'\', \''.$_SESSION['PN'].'\', \''.$_SESSION['PS'].'\', \''.$_SESSION['PE'].'\', \''.$_SESSION['PO'].'\', \''.$_SESSION['PINS'].'\', \''.$_SESSION['PIEO'].'\', \''.$_SESSION['TECH'].'\', \''.$_SESSION['PIS'].'\', \''.$_SESSION['PTAN'].'\', \''.$_SESSION['PTAS'].'\', \''.$_SESSION['PTAE'].'\', \''.$_SESSION['PTAO'].'\', \''.$_SESSION['VNAN'].'\', \''.$_SESSION['VNAS'].'\', \''.$_SESSION['VNAE'].'\', \''.$_SESSION['VNAO'].'\' )';
mysqli_query($con, $sql) or die(mysqli_error());
header ("Location: viv_proy_techplano.php");
?>
