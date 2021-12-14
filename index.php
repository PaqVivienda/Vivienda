<?php
/*
================================================================
Plataforma para el Control Digital del proceso de Informática
Elaborado por: T.S.U. Wilmer Faria / Coordinador de Informática
Diseñado para: Lufkin de Venezuela, S.A.
Diseño: Aplicación para el Control del Proceso de Informática
================================================================
*/
/*
===========
Encabezado
===========
*/
header("Content-Type: text/html; charset=UTF-8");
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"><head><title>Pre Procesador - Vivienda</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
echo '<meta http-equiv="Content-Script-Type" content="text/javascript"/>';
echo '<link rel="shortcut icon" type="images/x-icon" href="/pics/logo_viv.ico" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="/css/styles.css" type="text/css" media="screen" />';
echo '<link rel="stylesheet" type="text/css" href="/css/auror.css" media="screen">';
/*<!--[if lte IE 6]>*/

/*<![endif]-->*/
echo '</head>';
echo '<body>';
echo '<div id="firstboxlogin">';
echo '  <div id="logo_login" class="girando">';
echo '  </div>';
echo '  <div id="text-login">';
echo '  </div>';
echo '  <div id="boxlogin"><form action="login.php" method="post"><p class="login_input">';
echo '		<input type="text" name="login_name" id="login_name" required="required" placeholder="Usuario" />';
echo '		<span class="login_img"></span>';
echo '		</p><p class="login_input">';
echo '		<input type="password" name="login_password" id="login_password" required="required" placeholder="Contraseña"  />';
echo '		<span class="login_img"></span>';
echo '		</p><p class="login_input">';
echo '		<input type="submit" name="submit" value="Aceptar" class="submit" />';
echo '		</p>';
echo '		<input type="hidden" name="_glpi_csrf_token" value="91813e8ed9b44456277fd955ded7e7fc">';
echo '  </form>';
echo '<script type="text/javascript" >
document.getElementById("login_name").focus();</script></div><div class="error"><noscript><p>You must activate the JavaScript function of your browser</p></noscript></div><div id="display-login"></div></div><div id="footer-login"><a href="http://glpi-project.org/" title="Powered By Teclib">Universidad del Zulia <br />Facultad de Ingeniería <br />Escuela de Mecánica <br />Pre - Procesador Vivienda version 3.0 Copyright (C) 2019 por Grecia Pana / Jesús Medina. <br />Copyright (C) 2019 Pre - Procesador Vivienda</a></div></script></html>';
?>