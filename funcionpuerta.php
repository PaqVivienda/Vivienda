<?PHP

function  regresar_usuario($mensaje, $pagina="viv_tech_inc.php") {
    echo"<script type=\"text/javascript\">alert(\"$mensaje\"); window.location='$pagina';</script>";    
}

function guardar_elemento($key, $value) {
    //Anade el elemento de array asociativo a la variable superglobal $_SESSION y $GLOBALS
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
        $sql_vent_cod = mysqli_query($connection, "SELECT * FROM proy_ventanas WHERE id='$pn_vent_cod'");
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
    if(validar_dim_elem($_POST["xpxi_" .$nombre_puerta]) and
        validar_posic_elem($_POST["xpe_" .$nombre_puerta], $_POST["xph_" .$nombre_puerta]))
    { 
        // Guardamos las dimensiones de las puertas correspondientes.
        guardar_elemento("pxi_". $nombre_puerta, $_POST["xpxi_" .$nombre_puerta]);
        guardar_elemento("pe_". $nombre_puerta,  $_POST["xpe_" .$nombre_puerta]);
        guardar_elemento("ph_" . $nombre_puerta,  $_POST["xph_" .$nombre_puerta]);
        // Accedemos a la base de datos y obtenemos los datos correspondientes al material.
        $sql_puerta_cod = mysqli_query($con, "SELECT * FROM proy_puertas WHERE id='". $nombre_puerta . "_puerta_cod'");
        $row_puerta_cod = mysqli_fetch_array($sql_puerta_cod, MYSQLI_ASSOC);
        // Guardamos las propiedades del material correspondiente.
        guardar_elemento($nombre_puerta . "_puerta_cod", $row_puerta_cod["id"];
        guardar_elemento([$nombre_puerta . "_puerta_desc", $row_puerta_cod['proy_descripcion'];
        guardar_elemento([$nombre_puerta . "_puerta_esp", $row_puerta_cod['proy_espesor'];
        guardar_elemento($nombre_puerta . "_puerta_dens", $row_puerta_cod['proy_densidad'];
        guardar_elemento($nombre_puerta . "_puerta_cond", $row_puerta_cod['proy_conductividad']);
        guardar_elemento($nombre_puerta . "_puerta_calor", $row_puerta_cod['proy_calorespecifico']);
        
    if ($_SESSION[$nombre_puerta . "_puerta_desc"] !== "Ninguno")
        $_SESSION[$nombre_puerta . "_puerta"] = "Activar";

    }
}


?>