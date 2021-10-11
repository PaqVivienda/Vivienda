<?PHP
/*
	================================================================
	Plataforma Intranet para el Sistema de Gestión de la Calidad
	Elaborado por: T.S.U. Wilmer Faria / Coordinador de Informática
	Diseñado para: Venezolana de Fundición Lufkin, S.A.
	Diseño: Aplicación para el Inicio de la Intranet index.php
	================================================================
*/
// datos para establecer la conexion con la base de mysql.
$con = mysqli_connect('localhost','medrano','medrano') or die ('Ha fallado la conexi&oacute;n: '.mysqli_error());
mysqli_select_db($con, 'publications') or die ('Error al seleccionar la base de datos: '. mysqli_error());
//$con = mysqli_connect('localhost','root','root') or die ('Ha fallado la conexi&oacute;n: '.mysqli_error());
// Cheque la versión del Php
if (version_compare(PHP_VERSION, "5.3.0") < 0) {
   die("PHP >= 5.3.0 required");
}
?>
