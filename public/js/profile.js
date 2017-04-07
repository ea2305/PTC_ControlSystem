/**
 * Scripts para visulizacion de perfiles de usuarios
 */

$( document ).ready( function(){
	//Carga de configuraciones iniciales
	startUp();
}); 

function startUp(){
	
	//Carga de text-area
	$(document).ready(function() {
		$('input#input_text, textarea#textarea1').characterCounter();
	});
}
//# sourceMappingURL=profile.js.map
