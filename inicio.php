<?php session_start();
include("conexion.php");
/*
	================================================================
	Plataforma para Intranet de Lufkin de Veezuela, S.A.
	Elaborado por: T.S.U. Wilmer Faria / Coordinador de Informática
	Diseñado para: Venezolana de Fundición Lufkin, S.A.
	Diseño: Aplicación para las Donaciones
	================================================================
*/

/*
============
 Encabezado
============
*/
header("Content-Type: text/html; charset=UTF-8");
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"><head><title>Pre Procesador - Vivienda</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
echo '<meta http-equiv="Content-Script-Type" content="text/javascript"/>';
echo '<link rel="shortcut icon" type="images/x-icon" href="/pics/logo_viv.ico" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link href="estilos.css" rel="stylesheet" type="text/css" media="screen" />';
echo '<link rel="stylesheet" href="css/normalize.css">';
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
echo '	<div align="left" id="contenedor">';
echo '		<small>';
echo '			<img src="img/vivienda.png" id="girando" width="300" width=*92" />';
echo '		</small>';
echo '	</div>';
echo '    </header>'; // Fin del Header
echo '	  <div id="herramienta">';
echo '		<a href="viv_ad_mu.php" title="Mant. de Usuario"><img src="pics/usuario.png" width="26" height="26"></a>';
echo '		<a href="viv_ad_bbd.php" title="Backup Base de Datos"><img src="pics/backup.png" width="26" height="26"></a>';
echo '		<a href="viv_ad_it.php" title="Importar Tablas"><img src="pics/importar.png" width="26" height="26"></a>';
echo '		<a href="viv_inc_met.php" title="Incorporar Región Metereológica"><img src="pics/metereologico.png" width="26" height="26"></a>';
echo '		<a href="viv_nvo_proy.php" title="Nuevo Proyecto"><img src="pics/nuevo.png" width="26" height="26"></a>';
echo '		<a href="#" title="Abrir Proyecto"><img src="pics/abrir.png" width="26" height="26"></a>';
echo '		<a href="#" title="Imprimir Proyecto"><img src="pics/imprimir.png" width="26" height="26"></a>';
echo '		<a href="#" title="Propiedades"><img src="pics/propiedades.png" width="26" height="26"></a>';
echo '		<a href="viv_tech_inc.php" title="Techo Inclinado"><img src="pics/techo.png" width="26" height="26"></a>';
echo '		<a href="viv_tech_pla.php" title="Techo Plano"><img src="pics/tplano.png" width="26" height="26"></a>';
echo '		<a href="#" title="Manual de Manejo y Control de Vivienda"><img src="img/libro_vivienda.png" width="22" height="26"></a>';
echo '		<a href="http://vivienda.net" title="Salir"><img src="pics/exit.png" width="26" height="26"></a>';
echo '		<div class="texto-encima">';
echo '			Herramienta Rápida';
echo '		</div>';
echo '	  </div>';
echo '    <div id="wrap">';
// Mené Desplegable
echo '		<header>';
echo '		  <nav>';
echo '			<ul>';
echo '			  <li><a href="#">Admin</a>'; // Menú Admin
echo '					  <div>';
echo '						<ul>';
echo '						  <li class="titulo degradado"><a href="#">Manejo de Usuarios</a></li>';
echo '						  <li><a href="viv_ad_mu.php"><img src="pics/usuario.png"> Mant. Usuario</a></li>';
echo '						  <li class="titulo degradado"><a href="#">Resplado de Base de Datos</a></li>';
echo '						  <li><a href="viv_ad_bbd.php"><img src="pics/backup.png"> Backup Base Datos</a></li>';
echo '						  <li class="titulo degradado"><a href="#">Importar Tablas de CSV a MySql</a></li>';
echo '						  <li><a href="viv_ad_it.php"><img src="pics/importar.png"> Importar Tablas</a></li>';
echo '						  <li class="titulo degradado"><a href="#">Tabla de Irradiaciones Atmosfeficas</a></li>';
echo '						  <li><a href="viv_inc_met.php"><img src="pics/metereologico.png"> Incorporar Región Metereológica</a></li>';

echo '						</ul>';
echo '					  </div>';
echo '			  </li>'; // Fin del Menú
echo '			  <li><a href="#">Archivo</a>'; // Menú Archivo
echo '					  <div>';
echo '						<ul>';  // Menu de Maestros
echo '						  <li class="titulo degradado"><a href="#">Proyecto</a></li>';
echo '						  <li><a href="viv_nvo_proy.php"><img src="pics/nuevo.png"> Nuevo Proyecto</a></li>';
echo '						  <li><a href="#"><img src="pics/abrir.png"> Abrir Proyecto</a></li>';
echo '						  <li class="titulo degradado"><a href="#">Otras Opciones</a></li>';
echo '						  <li><a href="vfl_ma_ndc.php"><img src="pics/imprimir.png" width="16" height="16"> Imprimir</a></li>';
echo '						  <li><a href="#"> <img src="pics/propiedades.png" width="20" height="20"> Propiedades</a></li>';
echo '						  <li><a href="http://vivienda.net"> <img src="pics/exit.png"> Salir</a></li>';
echo '						</ul>'; // Fin del Menu de Maestros
echo '					  </div>';
echo '			  </li>'; // Fin del Menú
echo '			  <li><a href="#">Componentes</a>'; // Menú Componentes
echo '					  <div>';
echo '						<ul>';  // Menu de Maestros
echo '						  <li><a href="viv_tech_inc.php"><img src="pics/techo.png" width="18" height="18"> Techo Inclinado</a></li>';
echo '						  <li><a href="viv_tech_pla.php"><img src="pics/tplano.png" width="18" height="18"> Techo Plano</a></li>';
echo '						</ul>'; // Fin del Menu de Maestros
echo '					  </div>';
echo '			  </li>';
echo '			  <li><a href="#">Herramientas</a>'; // Menú Herramientas
echo '					  <div>';
echo '						<ul>';  // Menu de Maestros
echo '						  <li class="titulo degradado"><a href="#">Generador Visual</a></li>';
echo '						  <li><a href="#"><img src="pics/simulacion.png"> Iniciar Simulación</a></li>';
echo '						  <li><a href="#"><img src="pics/sim3d.png"> Iniciar Visualización 3D</a></li>';
echo '						  <li><a href="#"><img src="pics/orientacion.png"> Orientación de la Vivienda</a></li>';
echo '						  <li><a href="#"><img src="pics/opciones.png"> Opciones</a></li>';
echo '						</ul>'; // Fin del Menu de Maestros
echo '					  </div>';
echo '			  </li>';
echo '			  <li><a href="#">Ayuda</a>'; // Menú Ayuda
echo '					  <div>';
echo '						<ul>';  // Menu de Maestros
echo '						  <li class="titulo degradado"><a href="#">Manual del Sistema</a></li>';
echo '						  <li><a href="#"><img src="img/libro_vivienda.png" width="18" height="18"> Manual del Sistema</a></li>';
echo '						  <li><a href="#"><img src="img/libro_vivienda.png" width="18" height="18"> Manual de Admin.</a></li>';
echo '						  <li><a href="#"><img src="img/libro_vivienda.png" width="18" height="18"> Manual de Archivo</a></li>';
echo '						  <li><a href="#"><img src="img/libro_vivienda.png" width="18" height="18"> Manual de Componentes</a></li>';
echo '						  <li><a href="#"><img src="img/libro_vivienda.png" width="18" height="18"> Manual de Herramientas</a></li>';
echo '						</ul>'; // Fin del Menu de Maestros
echo '					  </div>';
echo '			  </li>';
echo '			</ul>';
echo '		  </nav>';
echo '		</header>';
// Fin del Menú
echo '		<p>&nbsp;</p>';
echo '		<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td align="center" valign="top"><img src="images/vivienda_central.png" width = "550" alt="Aplicacions" /></td>';
echo '			</tr>';
echo '		</table>';
echo '		<p>&nbsp;</p>';
echo '		<p>&nbsp;</p>';
echo '		<table width="90%" height="100%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">';
echo '			<tr>';
echo '				<td align="left"><font face="Comic Sans MS,arial,verdana", size="2", color="#000000">Usuario..: <img src="img/usuario.png" width="23" height="23" /> '.$_SESSION["nom_user"].'</font></td>';
echo '				<td align="right"><font face="Comic Sans MS,arial,verdana", color="#000000"><span id="liveclock" style="left:0;top:0; font-size:14px; <span id="IL_AD12" class="IL_AD"></span></font></td>';
echo '				<td align="right"><strong><font color="#000000"><sup>®</sup> Copyright 2019 Versión 1.0</strong></font><em><br>';
echo '			</tr>';
echo '		</table>';
echo '	  </div>'; // Fin del Wrap
echo '</div>'; // Fin del art-main
echo '</body>'; // Fin del Body
/*	==================================
	Protegiendo Pagina de Acceso
	==================================
*/
echo '<Script language=JavaScript>'.
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
mysql_close($con);
?>
