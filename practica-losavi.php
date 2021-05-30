<?php

  /**
  *@author Lorenzo Santos Vitosta
  *@version v1.0
  */

echo '<h1>TAREA_05 DAW</h1>: </br>';
echo '<h2>Lorenzo Santos Virosta</h2>: </br>':

/**
*
* A continuancion se crean una serie de variables que seran empleadas para 
*la ejecucion de los comandos de sistemas que vamos a mostrar en nuestra
*pagina php
*
*/
$usuario="whoami";
$OS="hostnamectl";
$ruta="pwd";
$contenido="ls -la";
$vesion_apache="httpd -v";
$apache_estado="systemctl status apache2";
/**
*Funcion que emplearemos en la tarea
*
*@param string comando cadena de texto que pasamos como comando
*@return string texto con el resultado del comando 
*@throws puede lanzar excepcion por mala ejecucion del comando
*@example exec(`ls -la`) devuelve una lista de los archivos del directorio actual
*/
function comandoOsInfo(string comando) {
	
		
	try {
		$resultado = exec(comando);
	} catch (TypeError $e) {
		echo 'Error: '.$e->getMessage();
	}
	
    return $resultado;
}

echo 'Este script se encuentra en la siguiente ruta: </br>';
echo comandoOsInfo($ruta).'</br>';
echo comandoOsInfo($contenido).'</br>';

echo 'Estamos empleando la siguiente versión de apache: </br>';
echo comandoOsInfo($vesion_apache).'</br>';
echo 'Actualmente el estado de apache es </br>'
echo comandoOsInfo($apache_estado).'</br>';

echo 'Estamos empleando la versión de php: </br>';
phpinfo();
echo 'con los siguientes módulos: </br>';
phpinfo(INFO_MODULES);

echo 'Esta logado con el usuario: </br>';
echo comandoOsInfo($usuario).'</br>';
echo 'Datos del sistema operativo que estamos empleando: </br>';
echo comandoOsInfo($OS).'</br>';




?>