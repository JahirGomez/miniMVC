<?php
/**
* Controlador de usuario
*
* Contiene todas las funciones para el control de modelos,
* desde validaciones hasta ejecuciones. Llama al modelo y la vista necesaria
*
* @package
* @author
* @version
* @date
*
**/

/**
* Presenta la página de inicio.
* Carga el archivo modelo/productoModelo.php.
* Carga el archivo vista/productoLista.php
*
* @uses $aplicacion
* @uses $url_base
* @uses $variables_ruta
* @uses $controlador
* @uses $accion
*
* * @uses generarTitulo
*/
function accion_lista() {

	global $aplicacion, $url_base, $variables_ruta, $controlador, $accion;

	/** @ignore */
	// Incluye el modelo que corresponde
	include('modelo/productoModelo.php');
	
	$titulo = generarTitulo();

	/** @ignore */
	// Pasa a la vista toda la informacion que se desea representar
	include('vista/productoListaVista.php');
}
?>