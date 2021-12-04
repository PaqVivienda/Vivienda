<?PHP

session_start();

// Definimos como constante el separador de los datos del archivo nodal
define("delimiter", "\t");

// Definimos como constantes el numero correspondiente a cada tipo de nodo segun su constitucion
define("aire" , 0);
define("pared" , 1);
define("ventana", 2);
define("piso", 3);
define("techo", 4);
define("puerta", 5);
define("pared_int", 8);

// Propiedades del piso
define("cond_piso", "8.83600E-01");
define("cp_piso", "9.35000E-01");
define("dens_piso" ,"1.21752E+03");

// Propiedades del aire
define("cond_aire", "2.60000E-02");
define("cp_aire", "1.06300E+00");
define("dens_aire", "1.22300E+00");

foreach ($_SESSION as $key => $value) {
    $GLOBALS[$key] = $value;
}


function format_number($number, $number_decimal=3) {
    
    return sprintf("%.". $number_decimal . "E", $number);
    
}


function write_to_file($file, ...$arguments) {
    // Esta funcion escribe una lista de argumentos  al archivo $file separados por un delimitador
    // En caso de ser exitosa la escritura la funcion regresa el numero de caracteres escritos al archivo
    // En caso de ser fallida la escritura la funcion regresa un numero negativo
    
    $string_to_write = "";
    foreach ($arguments as $arg) {
        
        if (empty($string_to_write)) {
            $string_to_write = $arg;
        } else {
            $string_to_write = $string_to_write . delimiter . $arg;
        }
    }
    
    $string_to_write = $string_to_write . "\r\n";
    return fwrite($file, $string_to_write);
}


function write_techo($i_coord, $j_coord, $k_coord) {
    //Escribe linea que describe el nodo ($i_coord, $j_coord, $k_cood)
    //de tipo techo al archivo nodal
    
    global $file_properties, $tpl_cond, $tpl_calor, $tpl_dens;
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, techo, format_number($tpl_cond), format_number($tpl_calor), format_number($tpl_dens));
}


function write_piso($i_coord, $j_coord, $k_coord) {
    //Escribe linea que describe el nodo ($i_coord, $j_coord, $k_cood)
    //de tipo techo al archivo nodal
    
    global $file_properties;
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, piso, format_number(cond_piso), format_number(cp_piso), format_number(dens_piso));
    
}


function write_pared($i_coord, $j_coord, $k_coord, $nombre_pared) {
    //Escribe linea que describe el nodo ($i_coord, $j_coord, $k_cood)
    //de tipo pared al archivo nodal
    
    global $file_properties;
    $pared_cond = $GLOBALS["p" . $nombre_pared[0] . "_par_cond"];
    $pared_calor  = $GLOBALS["p" . $nombre_pared[0] . "_par_calor"];
    $pared_densidad = $GLOBALS["p" . $nombre_pared[0] . "_par_dens"];
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, pared, format_number($pared_cond) , format_number($pared_calor), format_number($pared_densidad));
    
}


function write_pared_interna($i_coord, $j_coord, $k_coord, $nombre_pared) {
    //Escribe linea que describe el nodo ($i_coord, $j_coord, $k_cood)
    //de tipo pared al archivo nodal
    
    global $file_properties;
    $pared_cond = $GLOBALS["p" . $nombre_pared[0] . "_cond"];
    $pared_calor  = $GLOBALS["p" . $nombre_pared[0] . "_calor"];
    $pared_densidad = $GLOBALS["p" . $nombre_pared[0] . "_dens"];
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, pared_int, format_number($pared_cond) , format_number($pared_calor), format_number($pared_densidad));
    
}


function write_vent($i_coord, $j_coord, $k_coord, $nombre_pared) {
    
    global $file_properties;
    $pared_cond = $GLOBALS["p" . $nombre_pared[0] . "_vent_cond"];
    $pared_calor  = $GLOBALS["p" . $nombre_pared[0] . "_vent_calor"];
    $pared_densidad = $GLOBALS["p" . $nombre_pared[0] . "_vent_dens"];
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, ventana, format_number($pared_cond), format_number($pared_calor), format_number($pared_densidad));
    
}


function write_puerta($i_coord, $j_coord, $k_coord, $nombre_pared) {
    
    global $file_properties;
    $pared_cond = $GLOBALS["p" . $nombre_pared[0] . "_puerta_cond"];
    $pared_calor  = $GLOBALS["p" . $nombre_pared[0] . "_puerta_calor"];
    $pared_densidad = $GLOBALS["p" . $nombre_pared[0] . "_puerta_dens"];
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, puerta, format_number($pared_cond), format_number($pared_calor), format_number($pared_densidad));
    
}


function write_aire($i_coord, $j_coord, $k_coord) {
    //Escribe linea que describe el nodo ($i_coord, $j_coord, $k_cood)
    //de tipo techo al archivo nodal
    
    global $file_properties;
    
    return write_to_file($file_properties, $i_coord, $j_coord, $k_coord, aire, format_number(cond_aire), format_number(cp_aire), format_number(dens_aire));
    
}


function is_pared_interna($coord, $pared_sep, $dimension_malla) {
    
    $pared_coord = floor($pared_sep/$dimension_malla);
    
    if ($coord == $pared_coord) {
        return TRUE;
    } else {
        return FALSE;
    }
    
}


function is_vent($pos_hor, $pos_ver, $dim_hor, $dim_ver, $ancho, $alto) {
    // Esta funcion regresa TRUE si la posicion dada por ($pos_hor, $pos_ver) corresponde a una ventana
    // De no ser asi la funcion regresa FALSE
    if (($pos_ver >= $dim_ver) and ($pos_ver <= ($dim_ver + $alto)))
    {
        if (($pos_hor >= $dim_hor) and ($pos_ver <= ($dim_hor + $ancho))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}


function is_puerta($pos_hor, $pos_ver, $dim_hor, $ancho, $alto) {
    // Esta funcion regresa TRUE si la posicion dada por ($pos_hor, $pos_ver) corresponde a una puerta
    // De no ser asi la funcion regresa FALSE
    
    if ($pos_ver <= $alto)
    {
        if (($pos_hor >= $dim_hor) and ($pos_hor <= ($dim_hor + $ancho))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}


function is_vent_active($nombre_ventana) {
    // Esta funcion regresa TRUE si para la pared $nombre_ventana se encuentra una ventana activa
    // De no ser asi regresa FALSE
    
    $wall_indicator = $nombre_ventana[0];
    $vent_indicator = "p" . $wall_indicator . "_ventana";
    if (isset($GLOBALS[$vent_indicator]) and $GLOBALS[$vent_indicator]) {
        return TRUE;
    } else {
        return FALSE;
    }
}


function is_puerta_active($nombre_puerta) {
    // Esta funcion regresa TRUE si para la pared $nombre_puerta se encuentra una puerta activa
    // De no ser asi regresa FALSE
    
    $wall_indicator = $nombre_puerta[0];
    $puerta_indicator = "p" . $wall_indicator . "_puerta";
    if (isset($GLOBALS[$puerta_indicator]) and $GLOBALS[$puerta_indicator]) {
        return TRUE;
    } else {
        return FALSE;
    }
}


function is_pared_interna_active($nombre_pared) {
    
    if ($GLOBALS[$nombre_pared]) {
        return TRUE;
    } else {
        return FALSE;
    }
}



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

//*****************************************
// Construcción de Paredes (Altura) ***************************

$humrel = $humrelat / 100;

$monit = $_SESSION['monitoreo'];
if ( $monit == "1" ) {
    $xxi = 0.00;
    $xxj = 0.00;
    $xxk = 0.00;
} else {
    $xxi = $_SESSION['xxi'];
    $xxj = $_SESSION['xxj'];
    $xxk = $_SESSION['xxk'];
}
// Velocidades U.V.W.
$uvw = $_SESSION['uvw'];
if ($uvw =="1") {
    $xuvw = "1";
    $xxveluvw = $_SESSION['xveluvw'];
}else {
    $xuvw = "0";
}
//********************************************
// Presion
$psion = $_SESSION['psion'];
if ( $psion == "1" ) {
    $pres = "1";
    $presion = $_SESSION['presion'];
}
//********************************************
// Temperatura
$temp = $_SESSION['temp'];
if ( $temp == "1" ) {
    $tempe = "1";
    $temperatura = $_SESSION['temper'];
}

// ************************************************
// Nodos a Contabilizar
$xnodo_i = $_SESSION['nodo_i'] + 2;
$xnodo_j = $_SESSION['nodo_j'] + 2;
$xnodo_k = $_SESSION['nodo_k'] + 2;
$i = $xnodo_i;
$j = $xnodo_j;
$IJK = $xnodo_k;
$vci = $_SESSION['nodo_i'];
$vcj = $_SESSION['nodo_j'];
$vck = $_SESSION['nodo_k'];
$long_nodo_i =  $pns_long / $xnodo_i;
$long_nodo_j = $peo_long / $xnodo_j;
$long_nodo_k = $alt_yz / $xnodo_k;
$cara_i = $_SESSION['nodo_i'] + 1;
$cara_j = $_SESSION['nodo_j'] + 1;
$cara_k = $_SESSION['nodo_k'] + 1;
$dcara_i = $pns_long / $vci;
$dcara_j = $peo_long / $vcj;
$dcara_k = $alt_yz / $vck;
// ************************************************
// Datos de los Archivos .dat

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
echo '			<td width="50%" align="right" valign="middle"><small><img src="img/tech_plano.png" alt="" width="325" height="77" /></small></td>';
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
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Construcción de Vivienda con Techo Plano</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		<table width="30%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="center" colspan="3"><div id="cabecera"><font face="Comic Sans MS,arial,verdana", size="+2", color="#a62d2d"><b><i>Archivo .dat en Proceso</i></b></font></div></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Proyecto:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr height="30">';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Código del Proyecto:</b> <b>'.$proy_cod.'</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Nombre del Proyecto:</b> '.$proy_desc.'</font></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Opciones Generales:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr height="30">';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Título:</b> '.$titulo.'</font></td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			  <td>&nbsp;</td>';
echo '			</tr>';
echo '			<tr><td colspan="4"><hr size="5" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Almacenar en Carpeta</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Salida Gráfica</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Datos Nodales</b></font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Datos Propiedades</b></font></td>';
echo '			</tr>';
echo '			<tr><td colspan="5"><hr size="2" with="100%" style="color:#a62d2d;" /></hr></td></tr>';
echo '			<tr>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$carpeta.'</font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$tec.'.tec</font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$dat1.'.dat</font></td>';
echo '			  <td align="center"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">'.$dat2.'.dat</font></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<table id="opciones" width="80%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '			  <td align="left" colspan="2"><font face="Comic Sans MS,arial,verdana", size="+2", color="#000387"><b><i><u>Archivos en Proceso:</i></b></u></font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Volumen de Control:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$vci.' / J: '.$vcj.' / K: '.$vck.'</font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Datos de Nodos:</b></font></td>';
if ( $altyz != " " ) {
    $SKij = round($altyz);
    echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$i.' / J: '.$j.' / K: '.$IJK.'</font></td>';
} else {
    $SKij = round($alt_xz);
    echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$i.' / J: '.$j.' / K: '.$IJK.'</font></td>';
}
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Nodo de Monitoreo:</b></font></td>';
if ($monit == 1) {
    echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.($i/2).' / J: '.($j/2).' / K: '.round(($IJK/2)).'</font></td>';
} else {
    if ($monit == 2) {
        echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$xxi.' / J: '.$xxj.' / K: '.round($xxk).'</font></td>';
    }
}
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Distancia entre Nodos:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.number_format($long_nodo_i, 2, ".", "").' / J: '.number_format($long_nodo_j, 2, ".", "").' / K: '.number_format($long_nodo_k, 2, ".", "").'</font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Caras:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.$cara_i.' / J: '.$cara_j.' / K: '.$cara_k.'</font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td width="20%" align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Distancia entre Caras:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">I: '.number_format($dcara_i, 2, ".", "").' / J: '.number_format($dcara_j, 2, ".", "").' / K: '.number_format($dcara_k, 2, ".", "").'</font></td>';
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Archivo Procesado:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Propiedades</font></td>';

// Proceso de Archivo  de Propiedades
// Creamos la Carpeta del Archivo .dat
// Asignado permisos de lectura, escritura y ejecucion a todos los usuarios
if (!file_exists("../" . $carpeta)) {
    mkdir("../" . $carpeta, 0777, true);
}

// Crear archivos .dat (propiedades

$ancho_volumen = $peo_long/$nodo_i; //volumen de control eje X
$largo_volumen = $pns_long/$nodo_j; //largo  Volumen de control eje Y
$alto_volumen = $alt_yz/$nodo_k;

$i = $nodo_i;
$j = $nodo_j;
$k = $nodo_k;

$file_properties = fopen("$carpeta" ."/" . $dat2 . ".dat", "w");

write_to_file($file_properties, "I", "J", "K", "TIPO", "COND", "CP", "DENSIDAD");


for ($Si = 1; $Si <= $nodo_i; $Si = $Si + 1) { // Ciclo de las Paredes Norte - Sur
    for ($Sj = 1; $Sj <= $nodo_j; $Sj = $Sj + 1) { // Ciclo de las Paredes Este - Oeste
        for ($Sk = 1; $Sk <= $nodo_k; $Sk = $Sk + 1) { //Ciclo de la Altura
            
            if ($Sk == $k) { //Techo
                write_techo($Si, $Sj, $Sk);
            } elseif ($Sk == 1) { //Piso
                write_piso($Si, $Sj, $Sk);
            } elseif (is_pared_interna_active("PINS") and is_pared_interna($Si, $piy, $ancho_volumen)) {
                write_pared_interna($Si, $Sj, $Sk, "interna");
            } elseif (is_pared_interna_active("PIEO") and is_pared_interna($Sj, $pix, $largo_volumen)) {
                write_pared_interna($Si, $Sj, $Sk, "interna");
            } elseif ($Si == 1 and $Sk > 1) { //Pared Oeste
                if (is_vent_active("oeste") and is_vent($largo_volumen*$Sj, $alto_volumen*$Sk, $vxi_o, $vyi_o, $ve_o, $vh_o)) { //Chequear ventana
                    write_vent($Si, $Sj, $Sk, "oeste");
                }
                elseif (is_puerta_active("oeste") and is_puerta($largo_volumen*$Sj, $alto_volumen*$Sk, $pxi_o, $pe_o, $ph_o)) { //Chequear Puerta
                    write_puerta($Si, $Sj, $Sk, "oeste");
                }
                else {
                    write_pared($Si, $Sj, $Sk, "oeste");
                }
            } elseif ($Si == $i) { //Pared Este
                if (is_vent_active("este") and is_vent($largo_volumen*$Sj, $alto_volumen*$Sk, $vxi_e, $vyi_e, $ve_e, $vh_e)) { //Chequear ventana
                    write_vent($Si, $Sj, $Sk, "este");
                }
                elseif  (is_puerta_active("este") and is_puerta($largo_volumen*$Sj, $alto_volumen*$Sk, $pxi_e, $pe_e, $ph_e)) { //Chequear Puerta
                    write_puerta($Si, $Sj, $Sk, "este");
                }
                else {
                    write_pared($Si, $Sj, $Sk, "este");
                }
            } elseif ($Sj == 1) { //Pared Sur
                if (is_vent_active("sur") and is_vent($ancho_volumen*$Si, $alto_volumen*$Sk, $vxi_s, $vyi_s, $ve_s, $vh_s)) { //Chequear ventana
                    write_vent($Si, $Sj, $Sk, "sur");
                }
                elseif  (is_puerta_active("sur") and is_puerta($ancho_volumen*$Si, $alto_volumen*$Sk, $pxi_s, $pe_s, $ph_s)) { //Chequear Puerta
                    write_puerta($Si, $Sj, $Sk, "sur");
                }
                else {
                    write_pared($Si, $Sj, $Sk, "sur");
                }
            } elseif ($Sj == $j) { //Pared Norte
                if (is_vent_active("norte") and is_vent($ancho_volumen*$Si, $alto_volumen*$Sk, $vxi_n, $vyi_n, $ve_n, $vh_n)) { //Chequear ventana
                    write_vent($Si, $Sj, $Sk, "norte");
                }
                elseif ( (is_puerta_active("norte") and is_puerta($ancho_volumen*$Si, $alto_volumen*$Sk, $pxi_n, $pe_n, $ph_n))) { //Chequear Puerta
                    write_puerta($Si, $Sj, $Sk, "norte");
                }
                else {
                    write_pared($Si, $Sj, $Sk, "norte");
                }
            } else { //Volumen de aire general
                write_aire($Si, $Sj, $Sk);
            }
        }
    }
}

write_to_file($file_properties, "EMIP1V", "EMITE", "EMIP3V", "EMIP4V", "EMIP5V", "EMIV", "EMIPU");
write_to_file($file_properties, $EMIP1V, $EMITE, $EMIP3V, $EMIP4V, $EMIP5V, $EMIV ,$EMIPU);
write_to_file($file_properties, "ICBTE","ICBK1", "ICBN1", "ICBI1","ICBL1");
write_to_file($file_properties, 2, 2, 2, 2, 2);
write_to_file($file_properties, "RO1", "RO2", "RO3", "RO4", "RO5", "REV", "REP");
write_to_file($file_properties, $capn_cr, $caps_cr, $cape_cr, $capo_cr, $catpl_cr, $capta_cr, $cavna_cr);
write_to_file($file_properties, "ICAL", "ANUB", "ACH");
write_to_file($file_properties, "1", $nubosidad, $cambaire);
write_to_file($file_properties, "TFMIN",  "TFMAX", "ITMIN", "ITMAX");
write_to_file($file_properties, $cm_tmin, $cm_tmax, $cm_tmin_alos, $cm_tmax_alos);
write_to_file($file_properties, "LAT", "DEC","DIF", "Q1MAXV", "TMAX1", "Q3MAXV", "TMAX3", "Q4MAXV", "TMAX4", "Q5MAXV", "TMAX5", "QSMAXH", "VAIR", "HR" );
write_to_file($file_properties, $cm_latitud, $cm_declinacion, $cm_hlocal_hsolar, $cm_este, $cm_este_alos, $cm_oeste, $cm_oeste_alos, $cm_norte, $cm_norte_alos, $cm_sur, $cm_sur_alos, $cm_techo, $velaire, $humrel);
fclose($file_properties);
echo '			</tr>';
echo '			<tr>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d"><b>Archivo Procesado:</b></font></td>';
echo '			  <td align="left"><font face="Comic Sans MS,arial,verdana", size="3", color="#a62d2d">Nodales</font></td>';
echo '			</tr>';
echo '		</table>';
// Crear archivos .dat (propiedades)
$nodales = fopen("$carpeta/$dat1.dat","w");
//Es a partir de aqui que se escribe el segundo archivo
write_to_file($nodales, "TITULO");
write_to_file($nodales, $proy_desc);
write_to_file($nodales, "Numero de Iteraciones", "Algoritmo de Solucion");
write_to_file($nodales, "1", "3");
write_to_file($nodales, "Nombre de Archivo Grafico");
write_to_file($nodales, $tec);
write_to_file($nodales, "Tiempo Total", "Paso de Tiempo");
write_to_file($nodales,  $ttsim, $xpasot);
write_to_file($nodales, "Variables logicas");
write_to_file($nodales, "IcalUVW", "IcalP", "IcalT");
write_to_file($nodales, "T", "T", "T");
write_to_file($nodales, "Factores de Relajacion");
write_to_file($nodales, "RelaxUVW", "RelaxP", "RelaxT");
write_to_file($nodales, "0.5", "0.2", "0.5");
write_to_file($nodales, "Punto de Monitoreo");
write_to_file($nodales, "I", "J", "K");

if ($monit == 1) {
    fwrite($nodales, " ".($i/2)." , ".($j/2)." , ".round(($IJK/2)). "\r\n");
} else {
    if ($monit == 2) {
        fwrite($nodales, " ".$xxi." , ".$xxj." , ".round($xxk). "\r\n");
    }
}
write_to_file($nodales, "CARAS");
write_to_file($nodales, "I", $cara_i);
write_to_file($nodales, "J", $cara_k);
write_to_file($nodales, "K", $cara_j);


for ($Ci = 0; $Ci < $cara_i; $Ci = $Ci + 1) {
    write_to_file($nodales, format_number($Ci*$ancho_volumen));
}

for ($Ck = 0; $Ck < $cara_k; $Ck = $Ck + 1) {
    write_to_file($nodales, format_number($Ck*$alto_volumen));
}

for ($Cj = 0; $Cj < $cara_j; $Cj = $Cj + 1) {
    write_to_file($nodales, format_number($Cj*$largo_volumen));
}
// Fin Cara J
write_to_file($nodales, "NODOS");
write_to_file($nodales, "I ", $vci);
write_to_file($nodales, "J ", $vck);
write_to_file($nodales, "K ", $vcj);

for ($Ni = 0; $Ni <= $vci; $Ni = $Ni + 1) {
    write_to_file($nodales, format_number((0.5 + $Ni)*$ancho_volumen));
}
for ($Nk = 0; $Nk <= $vck; $Nk = $Nk + 1) {
    write_to_file($nodales, format_number((0.5 + $Nk)*$alto_volumen));
}

for ($Nj = 0; $Nj <= $vcj; $Nj = $Nj + 1) {
    write_to_file($nodales, format_number((0.5 + $Nj)*$largo_volumen));
}
fclose($nodales);

echo '		<p>&nbsp;</p>';
echo '		<table width="60%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '		  <tr>';
echo '			  <td align="right"><a href="viv_proy_tplano_sim_cm.php" class="opciones_a">Regresar</a></td>';
echo '			  <td align="right"><a href="viv_proy_archivos.php" class="opciones_a">Ejecutar Acción</a></td>';
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
echo '<script language=JavaScript>'.
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
            
            
            ?>
            