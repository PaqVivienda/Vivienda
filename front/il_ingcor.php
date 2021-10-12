<?PHP
/*
	================================================================
	Plataforma Intranet para el Sistema de Gestión de la Calidad
	Elaborado por: T.S.U. Wilmer Faria / Coordinador de Informática
	Diseñado para: Lufkin de Venezuela, S.A.
	Diseño: Aplicación para el Control de Acciones
	================================================================
*/
/*
    ================================
	Base de Datos / Versión del Php
	================================
*/

// Tomamos el Valor del Caso
$N_caso = $_SESSION['caso'];
// Seleccionamos la Base de Datos
include('conexion.php');
// Seleccionamos el Valor del Formulario
if (isset($_POST['boton_enviar'])){
	// Ingresamos los Valores a la Tabla il_acc_causa
  if ($_POST['desc_cor'] == "") {
	  echo"<script type=\"text/javascript\">alert('Debe Introducir una Descripción del Plan de Acciones....!'); window.location='il-ingcor.php';</script>";
  } else {
	$_SESSION['xlinea'] = $_POST['linea'];
	$_SESSION['xdesc']  = $_POST['desc_cor'];
	$_SESSION['xresp']  = $_POST['resp'];
	$_SESSION['xfecha'] = $_POST['fechaA'];
	$lin = $_POST['linea'];
	$linea = $lin + 1;
	$query = 'INSERT INTO il_correccion (n_caso, linea, desc_corr, resp_corr, fecha_comp)
			VALUES (\''.$N_caso.'\', \''.$_SESSION['xlinea'].'\', \''.$_SESSION['xdesc'].'\', \''.$_SESSION['xresp'].'\', \''.$_SESSION['xfecha'].'\')';
	mysqli_query($query) or die(mysqli_error($con));
	header ("Location: il-ingcor_previa.php");
  }
} else {
	// Veridficamos si hay datos
	$sql_cr = "SELECT COUNT(*) FROM il_correccion where n_caso='$N_caso'";
	$res_cr=mysqli_query($sql_cr, $con) or die (mysqli_error($con));
	$total_cr=mysqli_result($res_cr,0);
	$sql_acr = "SELECT * FROM il_correccion where n_caso='$N_caso'";
	$cons_acr = mysqli_query($sql_acr, $con) or die(mysqli_error($con));
	$row_cr = mysqli_fetch_assoc($cons_acr);
	$linea = $total_cr + 1;
}
/*

	===========
	Encabezado
	===========
*/
header("Content-Type: text/html; charset=UTF-8");
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
echo '<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />';
echo '<link href="img/logobueno.ico" type="image/x-icon" rel="shortcut icon" />';
echo '<link href="ico/icono.ico" type="image/x-icon" rel="shortcut icon" />';
echo '<title>LUFKIN | INTRANET</title>';
echo '<meta name="keywords" content="" />';
echo '<meta name="description" content="" />';
echo '<link href="estilos.acc.css" rel="stylesheet" type="text/css" media="screen" />';
echo '<script src="js/jquery-1.7.1.min.js"></script>';
echo '<script src="js/superfish.js"></script>';
echo '<script src="js/jquery.easing.1.3.js"></script>';
echo '<script src="js/tms-0.4.1.js"></script>';
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
echo '</head>';
/*
	===========
	Cuerpo
	===========
*/
echo '<body>';
echo	'<div id="art-main">';
echo		'<header>';
echo			'<font face="Verdana, Geneva, sans-serif", size="+1" color="#FFFFFF">.:: Corrección / Acción Correctiva ::.</font>';
echo		'</header>';
echo '      <div id="wrap">';
echo '			<h2><img src="images/lufkin Comp.png" alt="" /></h2>';
echo			'<h1>&nbsp;</h1>';
echo '			<p align="center"><font face="Comic Sans MS,arial,verdana", size="+2" color="ffffff">Detalles del Plan de Corrección</font></p>';
echo '			<img src="images/linea_rec.png" width="100%" height="10" />';
echo '			<table width="98%" align="center" border="0">';
echo '				<tr>';
echo '					<td><font face="Verdana, Geneva, sans-serif", size="+1" color="#ffffff"><b><i>No. de Caso : </i></b></font><font face="Verdana, Geneva, sans-serif", size="+1" color="#f7fd4d">'.$N_caso.'</font></td>';
echo '				</tr>';
echo '			</table>';
echo '			<img src="images/linea_rec.png" width="100%" height="10" />';
echo '			<table width="98%" align="center" border="0">';
echo '				<tr>';
echo '					<td width="10%" align="center"><font face="Verdana, Geneva, sans-serif", size="+1" color="#ffffff"><b>Línea</b></font></td>';
echo '					<td width="60%"><font face="Verdana, Geneva, sans-serif", size="+1" color="#ffffff"><b>Descripción del Plan</b></font></td>';
echo '					<td width="20%"><font face="Verdana, Geneva, sans-serif", size="+1" color="#ffffff"><b>Responsable</b></font></td>';
echo '					<td width="10%"><font face="Verdana, Geneva, sans-serif", size="+1" color="#ffffff"><b>Fecha</b></font></td>';
echo '				</tr>';
if ($total_cr>0) {
	$result = mysqli_query($sql_acr, $con);
	while ($row_cr = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
echo '				<tr>';
echo '					<td width="10%" align="center"><font face="Verdana, Geneva, sans-serif", size="+1" color="#f7fd4d">'.$row_cr['linea'].'</font></td>';
echo '					<td width="60%"><font face="Verdana, Geneva, sans-serif", size="+1" color="#f7fd4d">'.$row_cr['desc_corr'].'</font></td>';
echo '					<td width="20%"><font face="Verdana, Geneva, sans-serif", size="+1" color="#f7fd4d">'.$row_cr['resp_corr'].'</font></td>';
echo '					<td width="10%"><font face="Verdana, Geneva, sans-serif", size="+1" color="#f7fd4d">'.$row_cr['fecha_comp'].'</font></td>';
echo '				</tr>';
	}
} else {
echo '				<tr>';
echo '					<td colspan="3" align="center"><font face="Verdana, Geneva, sans-serif", size="+1" color="#ffffff">NO SE HA LEVANTADO PLAN DE CORRECCION</font></td>';
echo '				</tr>';
}
echo '			</table>';
echo '			<img src="images/linea_rec.png" width="100%" height="10" />';
echo '		<form id="form1" name="form1" method="post" enctype="multipart/form-data" >';
echo '			<table width="70%" border="0">';
echo '				<tr>';
echo '					<td width="10%"><input name="linea" type="text" id="linea" class="linea" value='.$linea.' /></td>';
echo '					<td width="60%"><textarea name="desc_cor" id="desc_cor" rows="5" cols="86" maxlength="2000" placeholder="Coloca la Descripción"></textarea></td>';
echo '					<td width="20%"><input name="resp" type="text" id="resp" class="resp" size="30" maxlength="30" placeholder="Coloca el Responsable" /></td>';
echo '					<td width="10%"><input name="fechaA" type="text" size="12" id="fecha4" class="fecha" onclick="dd-mm-yyyy" placeholder="Fecha"><br/></td>';
echo '				</tr>';
echo '			</table>';
echo '			<p>&nbsp;</p>';
echo '			<table width="98%" align="center" border="0">';
echo '				<tr>';
echo '					<td align="center"><input type="submit" value="Ingresar Acción" name="boton_enviar" class="submit" /></td>';
echo '				</tr>';
echo '			</table>';
echo '		</form>';
echo '		</div>'; /* Fin del Wrap */
echo	'</div>'; /* Fin del art-main */
echo '</body>';
/*	==================================
	Protegiendo Pagina de Acceso
	==================================
*/
echo '<Script language=JavaScript>'.
	 'function right(e) {'.
	 'if (navigator.appName == "Netscape" && (e.which == 3 || e.which == 2)){'.
	 'alert("Lo sentimos mucho..! Página Restringida");'.
	 'return false;'.
	 '}'.
	 'else if (navigator.appName == "Microsoft Internet Explorer" &&'.
	 '(event.button == 2 || event.button == 3)) {'.
	 'alert("Lo sentimos mucho..! Página Restringida");'.
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