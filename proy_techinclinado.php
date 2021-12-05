<?php
session_start();
// Verificamos la Entrada por la Intranet
$email = $_SESSION['email'];

function  regresar_usuario($mensaje, $pagina="viv_tech_inc.php") {
    echo"<script type=\"text/javascript\">alert(\"$mensaje\"); window.location='$pagina';</script>";    
}

function guardar_elemento($key, $value) {
    //Anade el elemento de array asociativo a las variables superglobales $_SESSION y $GLOBALS
    $_SESSION[$key] = $value; 
    $GLOBALS[$key] = $value;
}

function validar_posic_elem(...$array_posi) {
    // $array_posi es un array que contiene las posiciones de los elementos a validar
    // La condicion a evaluar es la siguiente:
    // 1. Las posiciones relativas de los elementos deben ser positivas o iguales a cero
    
    foreach ($array_posi as $posicion) {
        if ($posicion < 0) {
            regresar_usuario("Ha introducido posciones de elemento negativas, reintroduzca correctamente las posiciones.");
            return FALSE;
        }
    }
    return TRUE;
}

function validar_dim_elem(...$array_dim) {
    // $dimensiones es un array que contiene los nombres de las dimensiones a validar
    // Las condiciones son las siguientes:
    // 1. Todas las dimensiones deben ser positivas o nulas.
    // 2. Si una dimension es igual a 0 todas las demas tambien lo deben ser.
    foreach ($array_dim as $dimension) {
        if ($dimension < 0) {
            regresar_usuario("Ha introducido dimensiones negativas, reintroduzca correctamente las dimensiones");
        }
        elseif ($dimension == 0) {
            //Aqui va codigo.
            $dim_eq_cero = array_filter($array_dim, function($val) {return ($val == 0) ? TRUE :FALSE;});
            if (count($array_dim) == count($dim_eq_cero)) {
                return TRUE;
            } else {
                regresar_usuario("");
                return FALSE;
            }
        }
    }
    return TRUE;
}

function get_table_fields($table_name, $connection) {
    
    $GET_TABLE_ROWS_QUERY = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$table_name' order by ordinal_position;";
    $table_fields_rows = mysqli_query($connection, $GET_TABLE_ROWS_QUERY);
    $table_fields = mysqli_fetch_all($table_fields_rows);
    $array_fields = array();
    foreach ($table_fields as $field => $value) {
        array_push($array_fields, $value[0]);
    }
    return $array_fields;
    
}

function registrar_pared($pared_nombre, $connection) {
    $cod_pared = $_POST["x". $pared_nombre ."_pared_cod"];
    
    $sql_pared_modelo = mysqli_query($connection, "SELECT * FROM proy_componentes WHERE proy_modelo = '$cod_pared'");
    $row_pared_modelo = mysqli_fetch_array($sql_pared_modelo);
    
    guardar_elemento($pared_nombre . "_modelo", $cod_pared);
    guardar_elemento($pared_nombre . "_par_desc", $row_pared_modelo['proy_descripcion']);
    guardar_elemento($pared_nombre . "_capas", $row_pared_modelo['proy_ncapas']);
    guardar_elemento($pared_nombre . "_bloque", $row_pared_modelo['proy_tipo_bloque']);
    guardar_elemento($pared_nombre . "_dimensiones", $row_pared_modelo['proy_dimensiones']);
    
    $sql_pared_modelo = mysqli_query($connection, "SELECT * FROM proy_matcomp WHERE proy_cod_comp = '$cod_pared'");
    $row_pared_modelo = mysqli_fetch_array($sql_pared_modelo);
    guardar_elemento($pared_nombre . "_par_esp", $row_pared_modelo['proy_espesor']);
    guardar_elemento($pared_nombre . "_par_dens", $row_pared_modelo['proy_densidad']);
    guardar_elemento($pared_nombre . "_par_cond", $row_pared_modelo['proy_conductividad']);
    guardar_elemento($pared_nombre . "_par_calor", $row_pared_modelo['proy_calorespecifico']);
    
}


function registrar_ventana($nombre_ventana, $connection) {
    
    if (validar_dim_elem($_POST["xve_" . $nombre_ventana[1]], $_POST["xvh_" .  $nombre_ventana[1]]) and 
    validar_posic_elem($_POST["xvxi_" . $nombre_ventana[1]], $_POST["xvyi_" . $nombre_ventana[1]]))
    {
        // Guardamos las dimensiones de la ventana corresspondiente.
        guardar_elemento("vxi_" . $nombre_ventana[1], $_POST["xvxi_" . $nombre_ventana[1]]);
        guardar_elemento("vyi_" . $nombre_ventana[1], $_POST["xvyi_" . $nombre_ventana[1]]);
        guardar_elemento("ve_" . $nombre_ventana[1], $_POST["xve_" . $nombre_ventana[1]]);
        guardar_elemento("vh_" . $nombre_ventana[1], $_POST["xvh_" .  $nombre_ventana[1]]);
        guardar_elemento($nombre_ventana . "_ventana", "Activar");
        // Accedemos a la base de datos y obtenemos las propiedades del material seleccionado.
        $sql_vent_cod = mysqli_query($connection, "SELECT * FROM proy_ventanas WHERE id='" . $_POST["x" . $nombre_ventana . "_vent_cod"] . "'");
        $row_vent_cod = mysqli_fetch_array($sql_vent_cod, MYSQLI_ASSOC);
        // 
        guardar_elemento($nombre_ventana . "_vent_cod", $row_vent_cod["id"]);
        guardar_elemento($nombre_ventana . "_vent_desc", $row_vent_cod['proy_descripcion']);
        guardar_elemento($nombre_ventana . "_vent_esp", $row_vent_cod['proy_espesor']);
        guardar_elemento($nombre_ventana . "_vent_dens", $row_vent_cod['proy_densidad']);
        guardar_elemento($nombre_ventana . "_vent_cond", $row_vent_cod['proy_conductividad']);
        guardar_elemento($nombre_ventana . "_vent_calor", $row_vent_cod['proy_calorespecifico']);
        
    }
}

function registrar_puerta($nombre_puerta, $connection) {
    if(validar_dim_elem($_POST["xpxi_" .$nombre_puerta[1]]) and
    validar_posic_elem($_POST["xpe_" .$nombre_puerta[1]], $_POST["xph_" .$nombre_puerta[1]]))
    { 
        // Guardamos las dimensiones de las puertas correspondientes.
        guardar_elemento("pxi_". $nombre_puerta, $_POST["xpxi_" .$nombre_puerta[1]]);
        guardar_elemento("pe_". $nombre_puerta,  $_POST["xpe_" .$nombre_puerta[1]]);
        guardar_elemento("ph_" . $nombre_puerta,  $_POST["xph_" .$nombre_puerta[1]]);
        // Accedemos a la base de datos y obtenemos los datos correspondientes al material.
        $sql_puerta_cod = mysqli_query($connection, "SELECT * FROM proy_puertas WHERE id='". $_POST["x" .$nombre_puerta . "_puerta_cod"] . "'");
        $row_puerta_cod = mysqli_fetch_array($sql_puerta_cod, MYSQLI_ASSOC);
        // Guardamos las propiedades del material correspondiente.
        guardar_elemento($nombre_puerta . "_puerta_cod", $row_puerta_cod["id"]);
        guardar_elemento($nombre_puerta . "_puerta_desc", $row_puerta_cod['proy_descripcion']);
        guardar_elemento($nombre_puerta . "_puerta_esp", $row_puerta_cod['proy_espesor']);
        guardar_elemento($nombre_puerta . "_puerta_dens", $row_puerta_cod['proy_densidad']);
        guardar_elemento($nombre_puerta . "_puerta_cond", $row_puerta_cod['proy_conductividad']);
        guardar_elemento($nombre_puerta . "_puerta_calor", $row_puerta_cod['proy_calorespecifico']);
        
        if ($_SESSION[$nombre_puerta . "_puerta_desc"] !== "Ninguno")
        $_SESSION[$nombre_puerta . "_puerta"] = "Activar";
        
    }
}

function registrar_techo($connection) {

    guardar_elemento('ti_modelo',  $_POST['xtech_incl_cod']); 
    $sql_ti_modelo = mysqli_query($connection, "SELECT * FROM proy_techo WHERE id = '" . $_POST['xtech_incl_cod']);
    $row_ti_modelo = mysqli_fetch_array($sql_ti_modelo,  MYSQLI_ASSOC);
    guardar_elemento('ti_desc', $row_ti_modelo['proy_descripcion']);
    guardar_elemento('ti_esp',  $row_ti_modelo['proy_espesor']);
    guardar_elemento('ti_dens',  $row_ti_modelo['proy_densidad']);
    guardar_elemento('ti_cond',  $row_ti_modelo['proy_conductividad']);
    guardar_elemento('ti_calor',  $row_ti_modelo['proy_calorespecifico']);
    
}

if (!isset($_SESSION["password"])) {
    echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}

// Activamos la base de datos
include('conexion.php');

guardar_elemento('proy_cod', $_POST['xproy_cod_incl']);
$sql_proy_cod = mysqli_query($con, "SELECT * FROM proy_proyecto where proy_cod = '$proy_cod'");
$row_proy_cod = mysqli_fetch_array($sql_proy_cod);
$_SESSION['proy_desc'] = $row_proy_cod['proy_desc'];
// Fin Proyecto
// Construcción de Paredes ***
// Longitud de paredes externas **
$_SESSION['long_peo'] = $_POST['xpeo_long'];
$_SESSION['long_pns'] = $_POST['xpns_long'];
// Componente Constructivo
registrar_pared('pn', $con);
registrar_pared('ps', $con);
registrar_pared('po', $con);
registrar_pared('pe', $con);
registrar_pared('pint', $con);

$_SESSION['tip_techo'] = $_POST['tip_techo'];
if ( $_SESSION['tip_techo'] == "dato1" ) {
    if ( $_POST['yza1'] != "" ) {
        $_SESSION['alt_yxi'] = $_POST['yza1'];
        $_SESSION['alt_yxj'] = $_POST['yza2'];
        $_SESSION['alt_yxk'] = $_POST['yza3'];
    } elseif ( $_POST['xza1'] != "" ) {
        $_SESSION['alt_yxi'] = $_POST['xza1'];
        $_SESSION['alt_yxj'] = $_POST['xza2'];
        $_SESSION['alt_yxk'] = $_POST['xza3'];
    }
}

if ( $_SESSION['tip_techo'] == "dato2" ) {
    if ( $_POST['yz1a'] != "" ) {
        $_SESSION['alt_yxi'] = $_POST['yz1a'];
        $_SESSION['alt_yxj'] = $_POST['yz2a'];
    } elseif ( $_POST['xz1a'] != "" ) {
        $_SESSION['alt_yxi'] = $_POST['xz1a'];
        $_SESSION['alt_yxj'] = $_POST['xz2a'];
    }
}

if ( $_POST['tip_techo'] == "dato2" ) {
    if ( $_POST['yz1b'] != "" ) {
        $_SESSION['alt_yxi'] = $_POST['yz1b'];
        $_SESSION['alt_yxj'] = $_POST['yz2b'];
    } else {
        if ( $_POST['xz1b'] != "" ) {
            $_SESSION['alt_yxi'] = $_POST['xz1b'];
            $_SESSION['alt_yxj'] = $_POST['xz2b'];
        }}
    }
    // Fin Altura
    // Construcción Pared Interna
    guardar_elemento('piy', $_POST['xpiy']); // Posicion Pared Norte - Sur
    guardar_elemento('pix', $_POST['xpix']); // Posicion Pared Este - Oeste
    // Componentes de Construcción
    // Fin de Paredes
    // Construcción Techo
    registrar_techo($con);
    
    // Construcción de Puertas
    registrar_puerta("pn", $con);
    registrar_puerta("ps", $con);
    registrar_puerta("pe", $con);
    registrar_puerta("po", $con);
    
    // Construcción de Ventana
    registrar_ventana("pn", $con);
    registrar_ventana("ps", $con);
    registrar_ventana("pe", $con);
    registrar_ventana("po", $con);
    //*************
    // Fin de Construcción de Ventana
    //****************************************************************************
    // Variables de Almacenamiento
    // Proyecto
    $proy_cod_incl = $_SESSION['proy_cod'];
    $proy_desc_incl = $_SESSION['proy_desc'];
    // ********
    // Construcción Paredes **
    // Longitud
    $pns_long = $_SESSION['long_pns'];
    $peo_lomg = $_SESSION['long_peo'];
    // Componente Constructivo
    // Norte - Componente Constructivo
    
    // Fin Construcción de Paredes
    // Construcción de Altura
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
    // Fin Construcción de Altura

    // Fin de la toma de Datos **************************************************************
    // Almacenamos los Datos en la Base
    $sql_tincl = 'INSERT INTO proy_tech_incl (cod_proy, desc_proy, pns_long, peo_long, pn_modelo, pn_desc, pn_capas, pn_tip_bloque, pn_dimension, pn_esp, pn_densidad, pn_conductividad, pn_cal_esp, ps_modelo, ps_desc, ps_capas, ps_tip_bloque, ps_dimension, ps_esp, ps_densidad, ps_conductividad, ps_cal_esp, pe_modelo, pe_desc, pe_capas, pe_tip_bloque, pe_dimension, pe_esp, pe_densidad, pe_conductividad, pe_cal_esp, po_modelo, po_desc, po_capas, po_tip_bloque, po_dimension, po_esp, po_densidad, po_conductividad, po_cal_esp, alt_yxz1, alt_yxz2, alt_yxz3, pi_modelo, pi_desc, pi_capas, pi_tip_bloque, pi_dimension, pi_esp, pi_dens, pi_cond, pi_cal_esp, ti_modelo, ti_desc, ti_capas, ti_bloque, ti_dims, ti_esp, ti_dens, ti_cond, ti_cal_esp, pta_n_a, pta_n_w, pta_n_h, pta_n_desc, pta_n_esp, pta_n_dens, pta_n_cond, pta_n_calesp, pta_s_a, pta_s_w, pta_s_h, pta_s_desc, pta_s_esp, pta_s_dens, pta_s_cond, pta_s_calesp, pta_e_a, pta_e_w, pta_e_h, pta_e_desc, pta_e_esp, pta_e_dens, pta_e_cond, pta_e_calesp, pta_o_a, pta_o_w, pta_o_h, pta_o_desc, pta_o_esp, pta_o_dens, pta_o_cond, pta_o_calesp, vtna_n_a, vtna_n_b, vtna_n_w, vtna_n_h, vtna_n_desc, vtna_n_esp, vtna_n_dens, vtna_n_cond, vtna_n_calesp, vtna_s_a, vtna_s_b, vtna_s_w, vtna_s_h, vtna_s_desc, vtna_s_esp, vtna_s_dens, vtna_s_cond, vtna_s_calesp, vtna_e_a, vtna_e_b, vtna_e_w, vtna_e_h, vtna_e_desc, vtna_e_esp, vtna_e_dens, vtna_e_cond, vtna_e_calesp, vtna_o_a, vtna_o_b, vtna_o_w, vtna_o_h, vtna_o_desc, vtna_o_esp, vtna_o_dens, vtna_o_cond, vtna_o_calesp) values (\''.$proy_cod_incl.'\', \''.$proy_desc_incl.'\', \''.$pns_long.'\', \''.$peo_lomg.'\', \''.$pn_modelo.'\', \''.$pn_par_desc.'\', \''.$pn_capas.'\', \''.$pn_bloque.'\', \''.$pn_dimensiones.'\', \''.$pn_par_esp.'\', \''.$pn_par_dens.'\', \''.$pn_par_cond.'\', \''.$pn_par_calor.'\', \''.$ps_modelo.'\', \''.$ps_par_desc.'\', \''.$ps_capas.'\', \''.$ps_bloque.'\', \''.$ps_dimensiones.'\', \''.$ps_par_esp.'\', \''.$ps_par_dens.'\', \''.$ps_par_cond.'\', \''.$ps_par_calor.'\', \''.$pe_modelo.'\', \''.$pe_par_desc.'\', \''.$pe_capas.'\', \''.$pe_bloque.'\', \''.$pe_dimensiones.'\', \''.$pe_par_esp.'\', \''.$pe_par_dens.'\', \''.$pe_par_cond.'\', \''.$pe_par_calor.'\', \''.$po_modelo.'\', \''.$po_par_desc.'\', \''.$po_capas.'\', \''.$po_bloque.'\', \''.$po_dimensiones.'\', \''.$po_par_esp.'\', \''.$po_par_dens.'\', \''.$po_par_cond.'\', \''.$po_par_calor.'\', \''.$alt_yxzi.'\', \''.$alt_yxzj.'\', \''.$alt_yxzk.'\', \''.$pi_modelo.'\', \''.$pi_desc.'\', \''.$pi_capas.'\', \''.$pi_bloque.'\', \''.$pi_dimensiones.'\', \''.$pi_esp.'\', \''.$pi_dens.'\', \''.$pi_cond.'\', \''.$pi_calor.'\', \''.$ti_modelo.'\', \''.$ti_desc.'\', \''.$ti_capas.'\', \''.$ti_bloque.'\', \''.$ti_dims.'\', \''.$ti_esp.'\', \''.$ti_dens.'\', \''.$ti_cond.'\', \''.$ti_calor.'\', \''.$pxi_n.'\', \''.$pe_n.'\', \''.$ph_n.'\', \''.$pn_puerta_desc.'\', \''.$pn_puerta_esp.'\', \''.$pn_puerta_dens.'\', \''.$pn_puerta_cond.'\', \''.$pn_puerta_calor.'\', \''.$pxi_s.'\', \''.$pe_s.'\', \''.$ph_s.'\', \''.$ps_puerta_desc.'\', \''.$ps_puerta_esp.'\', \''.$ps_puerta_dens.'\', \''.$ps_puerta_cond.'\', \''.$ps_puerta_calor.'\', \''.$pxi_e.'\', \''.$pe_e.'\', \''.$ph_e.'\', \''.$pe_puerta_desc.'\', \''.$pe_puerta_esp.'\', \''.$pe_puerta_dens.'\', \''.$pe_puerta_cond.'\', \''.$pe_puerta_calor.'\', \''.$pxi_o.'\', \''.$pe_o.'\', \''.$ph_o.'\', \''.$po_puerta_desc.'\', \''.$po_puerta_esp.'\', \''.$po_puerta_dens.'\', \''.$po_puerta_cond.'\', \''.$po_puerta_calor.'\', \''.$vxi_n.'\', \''.$vyi_n.'\', \''.$ve_n.'\', \''.$vh_n.'\', \''.$pn_vent_desc.'\', \''.$pn_vent_esp.'\', \''.$pn_vent_dens.'\', \''.$pn_vent_cond.'\', \''.$pn_vent_calor.'\', \''.$vxi_s.'\', \''.$vyi_s.'\', \''.$ve_s.'\', \''.$vh_s.'\', \''.$ps_vent_desc.'\', \''.$ps_vent_esp.'\', \''.$ps_vent_dens.'\', \''.$ps_vent_cond.'\', \''.$ps_vent_calor.'\', \''.$vxi_e.'\', \''.$vyi_e.'\', \''.$ve_e.'\', \''.$vh_e.'\', \''.$pe_vent_desc.'\', \''.$pe_vent_esp.'\', \''.$pe_vent_dens.'\', \''.$pe_vent_cond.'\', \''.$pe_vent_calor.'\', \''.$vxi_o.'\', \''.$vyi_o.'\', \''.$ve_o.'\', \''.$vh_o.'\', \''.$po_vent_desc.'\', \''.$po_vent_esp.'\', \''.$po_vent_dens.'\', \''.$po_vent_cond.'\', \''.$po_vent_calor.'\')';
    mysqli_query($con, $sql_tincl) or die(mysqli_error($con));
    header ("Location: viv_proy_techincl.php");
    ?>