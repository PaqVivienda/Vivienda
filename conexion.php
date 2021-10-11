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
define("SERVERNAME", "localhost");
define("USERNAME", "medrano");
define("PASSWORD", "medrano");
define("DB_NAME", "publications");

$con = mysqli_connect(SERVERNAME, USERNAME, PASSWORD) or die ('Ha fallado la conexión: '.mysqli_error());
mysqli_select_db($con, DB_NAME) or die ('Error al seleccionar la base de datos: '. mysqli_error());

if (version_compare(PHP_VERSION, "5.3.0") < 0) {
   die("PHP >= 5.3.0 required");
}
?>
