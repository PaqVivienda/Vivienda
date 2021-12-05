<?PHP
session_start();
// Verificamos la Entrada por la Intranet
$password = $_SESSION['password'];
if ($password != "")
{
}else{
		echo"<script type=\"text/javascript\">alert('Debe Introducir un Correo Electrónico y una Contaseña....!'); window.location='index.php';</script>";
}
if($_SESSION["t_cond"] == "ADMINISTRADOR" or $_SESSION["t_cond"] == "RESPONZABLE") {
} else {
	echo"<script type=\"text/javascript\">alert('Usted no está Autorizado para Este Módulo....!'); window.location='vfl-inicio.php';</script>";
}
	
/*
	================================================================
	Plataforma Intranet para el Sistema de Gestión de la Calidad
	Elaborado por: T.S.U. Wilmer Faria / Coordinador de Informática
	Diseñado para: Venezolana de Fundición Lufkin, S.A.
	Diseño: Aplicación para el Inicio de la Intranet index.php
	================================================================
*/
// datos para establecer la conexion con la base de mysql.
	include("conexion.php");
	function formRegistro(){
		header ("Location: viv-ingusuario.php");
		}
	// verificamos si se han enviado ya las variables necesarias.
    if (isset($_POST["username"])) {
		//$string = htmlentities($string, ENT_QUOTES,'UTF-8'); // así de sencillo
        $username = $_POST["username"];
		$nombres = $_POST["nombre"];
        $password = $_POST["pass"];
		$condicion = $_POST["condicion"];
		$departamento = $_POST["dep"];
		// Hay campos en blanco
        if($username==NULL|$password==NULL|$email==NULL) {
            echo "un campo está; vacio.";
            formRegistro();
		}else{
				// Comprobamos si el nombre de usuario o la cuenta de correo ya existen
                $checkuser = mysqli_query($con, "SELECT usuario FROM dg_usuario WHERE usuario='$username'");
                $username_exist = mysqli_num_rows($checkuser);
               
                $checkemail = mysqli_query($con, "SELECT email FROM dg_usuario WHERE email='$email'");
                $email_exist = mysqli_num_rows($checkemail);
				
				if ($email_exist>0|$username_exist>0) {
                    echo "El nombre de usuario o la cuenta de correo estan ya en uso";
                    formRegistro();
                }else{
					$query = 'INSERT INTO dg_usuario (usuario, nombre, password, fecha, condicion, departamento)
                    VALUES (\''.$username.'\',\''.$nombres.'\',\''.$password.'\',\''.date("Y-m-d").'\', \''.$condicion.'\', \''.$departamento.'\')';
                   
                    mysqli_query($con, $query) or die(mysqli_error($con));
					} // Cerramos email y usuario
					// Fin del Codigo de Envío
		}//Cerramos si hay campos en blanco
		header ("Location: viv-ingusuario.php");
	} //Cerramos la Verificacion de Datos