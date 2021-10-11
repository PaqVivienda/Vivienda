





<?php
// Crear Carpetas
$carpeta = '/ruta/a/mi/carpeta';
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}
// ******************************

// Creamos un directorio o carpeta  

$directorio = "mis_fotos"; 
$dirmake = mkdir("$directorio", 0777); 
?> 
=================================== 
<?php 
// Eliminamos un directorio o carpeta vacio 

$directorio = "mis_fotos"; 
$dirmake = rmdir("$directorio"); 
?> 
=================================== 
<?php 
// Eliminamos la foto - en_la_playa.jpg - que está en el  
// directorio en el directorio - mis_fotos - 

$foto = "mis_fotos/en_la_playa.jpg"; 
unlink($foto); 

?> 
=================================== 
<?php  
// Eliminamos todas las fotos contenidas en el directorio - mis_fotos - y seguidamente 
// eliminamos la carpeta o directorio 

$mis_fotos = "mis_fotos";    // Carpeta que contine archivos y queremos eliminar  

foreach(glob($mis_fotos."/*.*") as $archivos_carpeta)  
{  
 unlink($archivos_carpeta);     // Eliminamos todos los archivos de la carpeta hasta dejarla vacia  
}  
rmdir($mis_fotos);         // Eliminamos la carpeta vacia  

// Crear archivos .dar
$contador=1; // Esto te servirá para iniciar tu contador donde quieras ..  

if (file_exists("$resultados[postname].dat")){ 
  $abrir = fopen("$resultados[postname].dat","r"); 
  $contador = fgets($abrir ,1024); 
  $contador ++; 
  fwrite($abrir , $contador ); 
  fclose($abrir ); 
} 

echo "contador= ".$contador; 
$escribe = fopen("$resultados[postname].dat","w"); 
fwrite($escribe, $contador ); 
fclose($escribe ); 
//**************************************************************

// Creamos con este código archivos .dat
/*
	 * 1.- Creamos la variable que contiene el archivo que tenemos que crear.
	 * 2.- preguntamos si existe el archivo, si el archivo existe "se ha modificado"
	   en caso contrario el archivo se ha creado.
	 * 3.- Con fopen abrimos un archivo o url, en este caso vamos a abrir un archivo
	   pasando como parámetro la variable $nombre_archivo que es la que contiene 
	   nuestro archivo y como segundo parámetro como lo vamos a abrir, en este caso "a"
	   que nos abre el fichero en solo lectura y sitúa el puntero al final del fichero
	   y en el caso de que no exista lo crea.

	   ******Para terminar*******

	   4.-Con el fwrite escribimos dentro del archivo la fecha con la hora de Creación 
	   o modificación, según el caso, con la variable $mensaje, 

	*/
	
	$nombre_archivo = "logs.txt"; 

	if(file_exists($nombre_archivo))
	{
		$mensaje = "El Archivo $nombre_archivo se ha modificado";
	}

	else
	{
		$mensaje = "El Archivo $nombre_archivo se ha creado";
	}

	if($archivo = fopen($nombre_archivo, "a"))
	{
		if(fwrite($archivo, date("d m Y H:m:s"). " ". $mensaje. "\n"))
		{
			echo "Se ha ejecutado correctamente";
		}
		else
		{
			echo "Ha habido un problema al crear el archivo";
		}

		fclose($archivo);
	}

$nombre_archivo = "logs.txt"; //variable con el nombre del archivo que vamos a crear

	/* 1.- Si el archivo existe mostramos en el navegador el contenido con
	 * "file_get_contents" que nos devuelve lo que hay en el archivo
	 * logs.txt.
	 * 2.-forzamos con nl2br que los saltos de linea "\n" los muestre en HTML <br />
	*/
	if(file_exists($nombre_archivo)) 
	{
		echo  nl2br(file_get_contents($nombre_archivo));
	}
	else
	{
		$mensaje = "El archivo no existe";
	}
	
// MONTANDO EL LOOP Y GENERANDO LA SALIDA HTML
$fp = fopen('contactos.txt','r');
if (!$fp) {echo 'ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.'; exit;}
 
$loop = 0; // contador de líneas
while (!feof($fp)) { // loop hasta que se llegue al final del archivo
$loop++;
$line = fgets($fp); // guardamos toda la línea en $line como un string
// dividimos $line en sus celdas, separadas por el caracter |
// e incorporamos la línea a la matriz $field
$field[$loop] = explode ('|', $line);
// generamos la salida HTML
echo '
 <div>
  <div>Nombre: '.$field[$loop][0].'</div>
  <div>Email: '.$field[$loop][1].'</div>
  <div>Website: '.$field[$loop][2].'</div>
  <div>Teléfono: '.$field[$loop][3].'</div>
 </div>
';
$fp++; // necesitamos llevar el puntero del archivo a la siguiente línea
}
 
fclose($fp);

?>
