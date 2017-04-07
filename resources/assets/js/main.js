/**
 * Scripts principales del sistema
 */

$(document).ready( function(){

	startUp();//Configuraciones

});

/**
 * Funcion de configuraciones iniciales
 * Gestion de listeners pos-carga del documento
 */
function startUp(){
	//Inicializador de side bar
	$(".button-collapse").sideNav();
}