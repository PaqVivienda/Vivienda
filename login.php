<?php session_start();
//datos para establecer la conexion con la base de mysqli.
$con = mysqli_connect('localhost','medrano','medrano') or die('Ha fallado la conexi&oacute;n: '.mysqli_error($con));
echo "<p>Otro error.</p>";
mysqli_select_db($con,'publications') or die('Error al seleccionar la Base de Datos: '.mysqli_error($con));
echo "<p>Otro error.</p>";
//$con = mysqli_connect('localhost','medrano','medrano') or die ('Ha fallado la conexi&oacute;n: '.mysqli_error($con));

function quitar($mensaje)
{
    $nopermitidos = array("'",'\\','<','>',"\"");
    $mensaje = str_replace($nopermitidos, "", $mensaje);
    return $mensaje;
}     

if(trim($_POST["login_name"]) != "" && trim($_POST["login_password"]) != "")
{
    // Puedes utilizar la funcion para eliminar algun caracter en especifico
    //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
    //$password = $HTTP_POST_VARS["password"];
    
    // o puedes convertir los a su entidad HTML aplicable con htmlentities
    $user = strtolower(htmlentities($_POST["login_name"], ENT_QUOTES));   
    $password = $_POST["login_password"];
    $result = mysqli_query($con, 'SELECT user, pass, nombre, apellido, cargo, condicion, correo FROM dg_usuario WHERE user=\''.$user.'\'');
    if ($row = mysqli_fetch_array($result)){
        if ($row["pass"] == $password){
            $_SESSION["k_user"] = $row['user'];
            if (file_exists("inicio.php")){ 
                $password = $_POST["login_password"];
                $user = $_POST["login_name"];
                $_SESSION["t_cond"] = $row['condicion'];
                $_SESSION["nom_user"] = $row['nombre'];
                $_SESSION["tpros"] = $row['pros'];
                $_SESSION["k_user"] = $row['nombre'];
                header ("Location: inicio.php");
            } else {
                echo"<script type=\"text/javascript\">alert('Este Módulo na ha sido Construido....!'); window.location='index.php';</script>";
            }
            //$_SESSION["k_nomuser"] = $row['nomuser'];
        }else{
            echo"<script type=\"text/javascript\">alert('Usted ha introducido el Password Incorrecto....!'); window.location='index.php';</script>";
            //header ("Location: vfl-admin-passincor.php");
        }
    }else{
        echo"<script type=\"text/javascript\">alert('Usted no es Usuario de Vivienda....!'); window.location='index.php';</script>";
        //header ("Location: vfl-admin-usuincor.php");
    }
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['usuario'] = $usur;
    mysqli_free_result($result);
}else{
    
    echo"<script type=\"text/javascript\">alert('Debe Introducir Correo y Contraseña....!'); window.location='index.php';</script>";
}
mysqli_close();
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['usuario'] = $usur;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</html>
