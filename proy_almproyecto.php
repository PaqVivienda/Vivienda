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
$conteo = $_SESSION['b_res'];
$codigo = $_POST['login_codigo'];
$descripcion = $_POST['login_desc'];
$fecha = date();
$cod_tech = $_POST['techo_pi'];
if ( $cod_tech == "001" ) {
	$desc_tech = "Techo Inclinado";
	$_SESSION['cod_incl']  = $codigo;
	$_SESSION['desc_incl'] = $descripcion;
} else {
	$desc_tech = "Techo Plano";
	$_SESSION['cod_incl']  = $codigo;
	$_SESSION['desc_incl'] = $descripcion;
}
$estatu = "Abierto";

// Almacenamos la Informaciòn
$sql = 'INSERT INTO proy_proyecto (proy_cod, proy_desc, proy_fecha, proy_codtech, proy_tech_desc, proy_estatu) VALUES (\''.$codigo.'\', \''.$descripcion.'\', \''.$fecha.'\', \''.$cod_tech.'\', \''.$desc_tech.'\', \''.$estatu.'\')';
	mysqli_query($con, $sql) or die(mysqli_error());
// Actualizamos el Conteo
$sqlcont = "UPDATE proy_cont SET conteo=".$_SESSION['b_res']." WHERE accion='CONAC'";
mysqli_query($con, $sqlcont);
if ( $cod_tech == "001" ) {
	header ("Location: viv_prev_tech_inc.php");
} else {
	header ("Location: viv_prev_tech_plan.php");
}
?>
