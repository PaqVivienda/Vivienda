<?php session_start();
//datos para establecer la conexion con la base de mysqli.
include('conexion.php');
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
                $email = $row['correo'];
                $_SESSION["t_cond"] = $row['condicion'];
                $_SESSION["nom_user"] = $row['nombre'];
                $_SESSION["k_user"] = $row['nombre'];
                header ("Location: inicio.php");
            } else {
                echo"<script type=\"text/javascript\">alert('Este Módulo na ha sido Construido....!'); window.location='index.php';</script>";
            }
        }else{
            echo"<script type=\"text/javascript\">alert('Usted ha introducido el Password Incorrecto....!'); window.location='index.php';</script>";
        }
    }else{
        echo"<script type=\"text/javascript\">alert('Usted no es Usuario de Vivienda....!'); window.location='index.php';</script>";
    }
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['usuario'] = $user;
    mysqli_free_result($result);
}else{
    
    echo"<script type=\"text/javascript\">alert('Debe Introducir Correo y Contraseña....!'); window.location='index.php';</script>";
}
mysqli_close($con);
