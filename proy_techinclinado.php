<?php
session_start();
// Verificamos la Entrada por la Intranet
$email = $_SESSION['email'];

function get_table_columns_names($connection, $table) {
    
    $GET_TABLE_ROWS_QUERY = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$table' order by ordinal_position;";
    return mysqli_fetch_all(mysqli_query($connection, $GET_TABLE_ROWS_QUERY));
    
}

function insert_query($connection, $table) {
    
    $table_fields_array = get_table_columns_names($connection, $table);
    $field_name_string = "";
    $field_input_string = "";
    
    foreach ($table_fields_array as $key => $value) {
        
        if (isset($GLOBALS[$value[0]])) {
            $value_to_key = $GLOBALS[$value[0]];
        } 
        else {
            $value_to_key = "";
        }
        
        if (($key < (count($table_fields_array) - 1)) and ($key != 0) ) {    
            $field_name_string .= "{$value[0]} , ";
            $field_input_string .= "'{$value_to_key}', ";
        } elseif ($key != 0) {
            $field_name_string .= "{$value[0]}";
            $field_input_string .= "'{$value_to_key}'";
        }
        
    }
    
    return "INSERT INTO $table ($field_name_string) VALUES ($field_input_string)";   
    return ($field_name_string . $field_input_string);
    
}



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
    
    $sql_pared_modelo = mysqli_query($connection, "SELECT * FROM proy_matcomp WHERE proy_cod_comp = '$cod_pared' AND proy_posicion = '2'");
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
        // Accedemos a la base de datos y obtenemos las propiedades del material seleccionado.
        $sql_vent_cod = mysqli_query($connection, "SELECT * FROM proy_ventanas WHERE id='" . $_POST["x" . $nombre_ventana . "_vent_cod"] . "'");
        $row_vent_cod = mysqli_fetch_array($sql_vent_cod, MYSQLI_ASSOC);
        // 
        guardar_elemento($nombre_ventana . "_vent_cod", $row_vent_cod["id"]);
        guardar_elemento($nombre_ventana . "_vent_desc", $row_vent_cod['proy_descripcion']);
        if ($GLOBALS[$nombre_ventana . "_vent_desc"] != "Ninguno") {
            guardar_elemento($nombre_ventana . "_ventana", "Activar");
        } else {
            guardar_elemento($nombre_ventana . "_ventana", "Desactivada");
        }
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
        guardar_elemento("pxi_". $nombre_puerta[1], $_POST["xpxi_" .$nombre_puerta[1]]);
        guardar_elemento("pe_". $nombre_puerta[1],  $_POST["xpe_" .$nombre_puerta[1]]);
        guardar_elemento("ph_" . $nombre_puerta[1],  $_POST["xph_" .$nombre_puerta[1]]);
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
        
        if ($_SESSION[$nombre_puerta . "_puerta_desc"] !== "Ninguno") {
            $_SESSION[$nombre_puerta . "_puerta"] = "Activar";
        } else {
            guardar_elemento($nombre_puerta . "_puerta", "Desactivar");
        }
    }
}

function registrar_techo($connection) {
    
    guardar_elemento('ti_modelo',  $_POST['xtech_incl_cod']); 
    $sql_ti_modelo = mysqli_query($connection, "SELECT * FROM proy_techo WHERE proy_cod = '" . $_POST['xtech_incl_cod'] . "'");
    $row_ti_modelo = mysqli_fetch_array($sql_ti_modelo,  MYSQLI_ASSOC);
    guardar_elemento('ti_desc', $row_ti_modelo['proy_descripcion']);
    guardar_elemento('ti_capas',  $row_ti_modelo['proy_capas']);
    guardar_elemento('ti_dims',  $row_ti_modelo['proy_dimensiones']);
    guardar_elemento('ti_bloque', $row_ti_modelo['proy_tipo_bloque']);
    $sql_tpl_capas = mysqli_query($connection, "SELECT * FROM proy_techo_capas WHERE proy_cod_capa = '{$_POST['xtech_incl_cod']}' AND proy_descripcion = 'FRISO'");
    $row_tpl_capas = mysqli_fetch_array($sql_tpl_capas, MYSQLI_ASSOC);
    guardar_elemento('ti_cond',  $row_tpl_capas['proy_conductividad']);
    guardar_elemento('ti_calor',  $row_tpl_capas['proy_calorespecifico']);
    guardar_elemento('ti_dens',  $row_tpl_capas['proy_densidad']);
    guardar_elemento('ti_esp',  $row_tpl_capas['proy_espesor']);
    
    guardar_elemento('tip_techo', $_POST['tip_techo']); 
    $tip_techo = $_POST['tip_techo'];
    if ($tip_techo == "dato1" ) {
        
        if ($_POST['yza1'] != "" ) {
            $_SESSION['alt_yxi'] = $_POST['yza1'];
            $_SESSION['alt_yxj'] = $_POST['yza2'];
            $_SESSION['alt_yxk'] = $_POST['yza3'];
        } elseif ( $_POST['xza1'] != "" ) {
            $_SESSION['alt_yxi'] = $_POST['xza1'];
            $_SESSION['alt_yxj'] = $_POST['xza2'];
            $_SESSION['alt_yxk'] = $_POST['xza3'];
        }
    } elseif ($GLOBALS["tip_techo"] == "dato2") {
        if ($_POST['yz1a'] != "" ) {
            guardar_elemento('alt_yxz1', $_POST['yz1a']);
            guardar_elemento('alt_yxz2', $_POST['yz2a']);
            guardar_elemento('alt_yxz3', 0);
        } elseif ( $_POST['xz1a'] != "" ) {
            guardar_elemento('alt_yxz1', $_POST['xz1a']);
            guardar_elemento('alt_yxz2', $_POST['xz2a']);
            guardar_elemento('alt_yxz3', 0);
        }
    } 
}

if (!isset($_SESSION["password"])) {
    echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}

// Activamos la base de datos
include('conexion.php');

guardar_elemento('cod_proy', $_POST['xproy_cod_incl']);
$sql_proy_cod = mysqli_query($con, "SELECT * FROM proy_proyecto where proy_cod = '$proy_cod'");
$row_proy_cod = mysqli_fetch_array($sql_proy_cod);
guardar_elemento('proy_desc', $row_proy_cod['proy_desc']);

// Fin Proyecto
// Construcción de Paredes ***
// Longitud de paredes externas **
guardar_elemento('peo_long', $_POST['xpeo_long']);
guardar_elemento('pns_long', $_POST['xpns_long']);
// Componente Constructivo
guardar_elemento("id" ,$_POST['xproy_cod_incl']);
$cod_incl = $_SESSION['cod_proy'];
$sql_proy_cod = mysqli_query($con, "SELECT * FROM proy_proyecto where proy_cod='$cod_incl'");
$row_proy_cod = mysqli_fetch_array($sql_proy_cod);
guardar_elemento('proy_desc', $row_proy_cod['proy_desc']);

registrar_pared('pn', $con);
registrar_pared('ps', $con);
registrar_pared('po', $con);
registrar_pared('pe', $con);
registrar_pared('pi', $con);
guardar_elemento('piy', $_POST['xpiy']); // Posicion Pared Norte - Sur
guardar_elemento('pix', $_POST['xpix']); // Posicion Pared Este - Oeste
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
// Fin de Construcción de Ventana

// Proyecto
$proy_cod_incl = $_SESSION['proy_cod'];
$proy_desc_incl = $_SESSION['proy_desc'];
mysqli_query($con, insert_query($con, "proy_tech_incl")) or die(mysqli_error($con));
header ("Location: viv_proy_techincl.php");
?>