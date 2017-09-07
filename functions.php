<?php
ini_set('display_errors', '1');
//Ruta path's
function get_template_directory_uri($slash = '') {
    $rutaProyecto = dirname($_SERVER['PHP_SELF']);
    $srvr = "http://".$_SERVER['HTTP_HOST'].$rutaProyecto.'/';
    $url = $srvr;
    return $url.$slash;
}

//Títulos Secciones
function TituloSecciones() {
	$srvrPath = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$archivo = basename($srvrPath).'.php';
	$urlTitle = $archivo;
	$arrayUrls = array(
	    //Páginas Títulos
	    'maqueta.php'=>'Inicio',
	    'inicio.php'=>'Inicio',
	    'nosotros.php'=>'Nosotros',
	    'servicios.php'=>'Servicios',
	    'portafolio.php'=>'Portafolio',
	    'equipo.php'=>'Equipo',
	    'contacto.php'=>'Contacto',
	    'blog.php'=>'Blog',
	    'carrer.php'=>'Carrer'
	    //Internas Títulos
	    //'contacto.php'=>'Contacto',
	);

	return $arrayUrls[$urlTitle];
}

//URL sitio
function site_url($slash = '') {
    $srvrSite = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
    $sitio = $srvrSite;
    return $sitio.$slash;
}

function get_site_url() {
    $url_actual = "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
    return $url_actual;
}

?>